<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\ServidorNew\User;

class AuthService
{

        /**
     * Verifica la conexión con SQL Server.
     *
     * @return bool
     * @throws \Exception
     */
    public function testSqlServerConnection()
    {
        $connection = @sqlsrv_connect(env('DB_HOST'), [
            'UID' => env('DB_USERNAME'),
            'PWD' => env('DB_PASSWORD'),
            'Database' => 'master',
        ]);

        if (!$connection) {
            $errorDetails = sqlsrv_errors();
            Log::error('Error al conectar con SQL Server (test de conexión):', $errorDetails);
            throw new \Exception('Error al conectar con SQL Server. Verifique la configuración.');
        }

        sqlsrv_close($connection);

        return true;
    }

    /**
     * Autentica a un usuario en SQL Server.
     *
     * @param string $username
     * @param string $password
     * @return bool
     * @throws \Exception
     */
    public function authenticateUser($username, $password)
    {
        // Validar entradas para evitar caracteres sospechosos
        if (!preg_match('/^[a-zA-Z0-9_@.]+$/', $username)) {
            throw new \Exception('El nombre de usuario contiene caracteres no permitidos.');
        }

        if (empty($password)) {
            throw new \Exception('La contraseña no puede estar vacía.');
        }

        // Test de conexión antes de autenticar al usuario
        $this->testSqlServerConnection();

        // Usar conexión con cuenta de servicio para verificar credenciales
        $connection = @sqlsrv_connect(env('DB_HOST'), [
            'UID' => env('DB_USERNAME'),
            'PWD' => env('DB_PASSWORD'),
            'Database' => 'master',
        ]);

        if (!$connection) {
            $errorDetails = sqlsrv_errors();
            Log::error('Error al conectar con SQL Server para autenticación:', ['error' => $errorDetails]);
            throw new \Exception('Error al conectar con SQL Server.');
        }

        // Ejemplo de verificación de usuario usando consultas seguras
        $query = "SELECT 1 FROM sys.sql_logins WHERE name = ? AND PWDCOMPARE(?, password_hash) = 1";
        $params = [$username, $password];

        $stmt = sqlsrv_query($connection, $query, $params);

        if (!$stmt) {
            $errorDetails = sqlsrv_errors();
            Log::error('Error al ejecutar consulta de autenticación:', ['error' => $errorDetails]);
            sqlsrv_close($connection);
            throw new \Exception('Error al autenticar al usuario.');
        }

        $result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($connection);

        if (!$result) {
            throw new \Exception('Usuario o contraseña incorrectos.');
        }

        return true;
    }

    public function updatePassword($username, $newPassword)
    {
        DB::unprepared("ALTER LOGIN [$username] WITH PASSWORD = '$newPassword'");
    }

    public function closeUserSessions($username)
    {
        $sessions = DB::select("SELECT session_id FROM sys.dm_exec_sessions WHERE login_name = ?", [$username]);

        foreach ($sessions as $session) {
            DB::unprepared("KILL {$session->session_id}");
        }

        Session::forget('sql_username');
    }

    public function generateResetToken($emailOrUsername)
    {
        // Buscar al usuario por correo o nombre de usuario
        $user = User::where('EmailUsuario', $emailOrUsername)
            ->orWhere('NombreUsuario', $emailOrUsername)
            ->first();
    
        if (!$user) {
            throw new \Exception('Usuario no encontrado.');
        }
    
        // Crear el payload del token
        $payload = [
            'sub' => $user->id, // ID del usuario
            'iat' => now()->timestamp, // Tiempo actual
            'exp' => now()->addMinutes(30)->timestamp, // Expira en 30 minutos
        ];
    
        // Generar el token JWT
        $token = JWTAuth::fromUser($user, $payload);
    
        // Generar un código aleatorio único
        $codAleatorio = strtoupper(Str::random(5));
    
        try {
            // Insertar o actualizar el token y el código en la tabla de restablecimiento
            DB::connection('mysql')
                ->table('password_resets')
                ->updateOrInsert(
                    ['email' => $user->EmailUsuario], // Identificar por correo electrónico
                    [
                        'token' => $token,
                        'codAleatorio' => $codAleatorio,
                        'created_at' => now()
                    ] // Guardar el token, código y fecha
                );
        } catch (\Exception $e) {
            throw new \Exception('Error al guardar el token en la base de datos: ' . $e->getMessage());
        }
    
        // Retornar el código y el correo
        return [
            'codAleatorio' => $codAleatorio,
            'email' => $user->EmailUsuario,
        ];
    }

}