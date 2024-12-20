<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SistemaConsolidadoSeeder extends Seeder
{
    protected $connection = 'sqlsrvUsers'; // Especifica la conexión a la base de datos

    public function run()
    {
        DB::connection($this->connection)->table('sistema_consolidado')->insert([
            ['Codigo' => '01', 'Nombre' => 'Pabellon', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 4, 'created_at' => '2024-12-20 12:03:18.567', 'updated_at' => '2024-12-20 12:03:18.567', 'deleted_at' => null],
            [ 'Codigo' => '02', 'Nombre' => 'Hospitalizacion', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 6, 'created_at' => '2024-12-20 12:03:18.580', 'updated_at' => '2024-12-20 12:03:18.580', 'deleted_at' => null],
            ['Codigo' => '07', 'Nombre' => 'Farmacia', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 2, 'created_at' => '2024-12-20 12:03:18.580', 'updated_at' => '2024-12-20 12:03:18.580', 'deleted_at' => null],
            ['Codigo' => '100', 'Nombre' => 'Portal Salud', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 7, 'created_at' => '2024-12-20 12:03:18.583', 'updated_at' => '2024-12-20 12:03:18.583', 'deleted_at' => null],
            ['Codigo' => '103', 'Nombre' => 'Procedimiento Amb', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 7, 'created_at' => '2024-12-20 12:03:18.583', 'updated_at' => '2024-12-20 12:03:18.583', 'deleted_at' => null],
            [ 'Codigo' => '105', 'Nombre' => 'Indice Paciente', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 9, 'created_at' => '2024-12-20 12:03:18.583', 'updated_at' => '2024-12-20 12:03:18.583', 'deleted_at' => null],
            ['Codigo' => '110', 'Nombre' => 'Fichas Clinicas', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 17, 'created_at' => '2024-12-20 12:03:18.587', 'updated_at' => '2024-12-20 12:03:18.587', 'deleted_at' => null],
            ['Codigo' => '200', 'Nombre' => 'Lista Espera', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 14, 'created_at' => '2024-12-20 12:03:18.587', 'updated_at' => '2024-12-20 12:03:18.587', 'deleted_at' => null],
            ['Codigo' => '300', 'Nombre' => 'REM', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 18, 'created_at' => '2024-12-20 12:03:18.587', 'updated_at' => '2024-12-20 12:03:18.587', 'deleted_at' => null],
            ['Codigo' => '400', 'Nombre' => 'Agenda', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 11, 'created_at' => '2024-12-20 12:03:18.590', 'updated_at' => '2024-12-20 12:03:18.590', 'deleted_at' => null],
            [ 'Codigo' => '500', 'Nombre' => 'Turno Clinico', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 20, 'created_at' => '2024-12-20 12:03:18.590', 'updated_at' => '2024-12-20 12:03:18.590', 'deleted_at' => null],
            ['Codigo' => '600', 'Nombre' => 'Farmacia-GES', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 21, 'created_at' => '2024-12-20 12:03:18.590', 'updated_at' => '2024-12-20 12:03:18.590', 'deleted_at' => null],
            [ 'Codigo' => '700', 'Nombre' => 'Control de Gestión', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 22, 'created_at' => '2024-12-20 12:03:18.593', 'updated_at' => '2024-12-20 12:03:18.593', 'deleted_at' => null],
            [ 'Codigo' => '800', 'Nombre' => 'C.A.I', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 23, 'created_at' => '2024-12-20 12:03:18.593', 'updated_at' => '2024-12-20 12:03:18.593', 'deleted_at' => null],
            ['Codigo' => '900', 'Nombre' => 'Consentimientos', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 24, 'created_at' => '2024-12-20 12:03:18.593', 'updated_at' => '2024-12-20 12:03:18.593', 'deleted_at' => null],
            ['Codigo' => '1000', 'Nombre' => 'Mater', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 25, 'created_at' => '2024-12-20 12:03:18.597', 'updated_at' => '2024-12-20 12:03:18.597', 'deleted_at' => null],
            [ 'Codigo' => '1100', 'Nombre' => 'Larga Estadia', 'Descripcion' => null, 'ValidaRUT' => false, 'UsuarioBD' => 1, 'Vigencia' => true, 'GrupoID' => 27, 'created_at' => '2024-12-20 12:03:18.597', 'updated_at' => '2024-12-20 12:03:18.597', 'deleted_at' => null],
            [ 'Codigo' => '1200', 'Nombre' => 'Helios', 'Descripcion' => 'Sistema Web avanzado para gestión hospitalaria', 'ValidaRUT' => false, 'UsuarioBD' => 2, 'Vigencia' => true, 'GrupoID' => 6, 'created_at' => '2024-12-20 12:05:00.000', 'updated_at' => '2024-12-20 12:05:00.000', 'deleted_at' => null],
            ['Codigo' => '1300', 'Nombre' => 'Apolo', 'Descripcion' => 'Sistema de escritorio para consulta y atención médica', 'ValidaRUT' => true, 'UsuarioBD' => 3, 'Vigencia' => true, 'GrupoID' => 7, 'created_at' => '2024-12-20 12:10:00.000', 'updated_at' => '2024-12-20 12:10:00.000', 'deleted_at' => null],
            ['Codigo' => '1400', 'Nombre' => 'Uros', 'Descripcion' => 'Sistema especializado en urología', 'ValidaRUT' => false, 'UsuarioBD' => 4, 'Vigencia' => true, 'GrupoID' => 8, 'created_at' => '2024-12-20 12:15:00.000', 'updated_at' => '2024-12-20 12:15:00.000', 'deleted_at' => null],
            [ 'Codigo' => '1500', 'Nombre' => 'Recaudacion', 'Descripcion' => 'Sistema de gestión de pagos y recaudación', 'ValidaRUT' => true, 'UsuarioBD' => 5, 'Vigencia' => true, 'GrupoID' => 10, 'created_at' => '2024-12-20 12:20:00.000', 'updated_at' => '2024-12-20 12:20:00.000', 'deleted_at' => null],
            [ 'Codigo' => '1600', 'Nombre' => 'Agenda', 'Descripcion' => 'Sistema de programación y gestión de citas', 'ValidaRUT' => false, 'UsuarioBD' => 6, 'Vigencia' => true, 'GrupoID' => 11, 'created_at' => '2024-12-20 12:25:00.000', 'updated_at' => '2024-12-20 12:25:00.000', 'deleted_at' => null],
            [ 'Codigo' => '1700', 'Nombre' => 'Finanzas', 'Descripcion' => 'Sistema para control financiero hospitalario', 'ValidaRUT' => true, 'UsuarioBD' => 7, 'Vigencia' => true, 'GrupoID' => 12, 'created_at' => '2024-12-20 12:30:00.000', 'updated_at' => '2024-12-20 12:30:00.000', 'deleted_at' => null],
            [ 'Codigo' => '1800', 'Nombre' => 'Consultas Medicas', 'Descripcion' => 'Sistema especializado en consultas externas', 'ValidaRUT' => true, 'UsuarioBD' => 8, 'Vigencia' => true, 'GrupoID' => 13, 'created_at' => '2024-12-20 12:35:00.000', 'updated_at' => '2024-12-20 12:35:00.000', 'deleted_at' => null],
            [ 'Codigo' => '1900', 'Nombre' => 'Lista Espera', 'Descripcion' => 'Sistema para manejo de listas de espera', 'ValidaRUT' => false, 'UsuarioBD' => 9, 'Vigencia' => true, 'GrupoID' => 14, 'created_at' => '2024-12-20 12:40:00.000', 'updated_at' => '2024-12-20 12:40:00.000', 'deleted_at' => null],
            [ 'Codigo' => '2000', 'Nombre' => 'PPV', 'Descripcion' => 'Sistema web para seguimiento de pacientes', 'ValidaRUT' => false, 'UsuarioBD' => 10, 'Vigencia' => true, 'GrupoID' => 15, 'created_at' => '2024-12-20 12:45:00.000', 'updated_at' => '2024-12-20 12:45:00.000', 'deleted_at' => null],
            [ 'Codigo' => '2100', 'Nombre' => 'Consentimientos', 'Descripcion' => 'Sistema web de gestión de consentimiento', 'ValidaRUT' => false, 'UsuarioBD' => 11, 'Vigencia' => true, 'GrupoID' => 24, 'created_at' => '2024-12-20 12:50:00.000', 'updated_at' => '2024-12-20 12:50:00.000', 'deleted_at' => null],
            [ 'Codigo' => '2200', 'Nombre' => 'REM', 'Descripcion' => 'Reporte Estadístico Mensual', 'ValidaRUT' => false, 'UsuarioBD' => 12, 'Vigencia' => true, 'GrupoID' => 18, 'created_at' => '2024-12-20 12:55:00.000', 'updated_at' => '2024-12-20 12:55:00.000', 'deleted_at' => null],
            [ 'Codigo' => '2300', 'Nombre' => 'Control de Gestión', 'Descripcion' => 'Sistema web de control administrativo', 'ValidaRUT' => false, 'UsuarioBD' => 13, 'Vigencia' => true, 'GrupoID' => 22, 'created_at' => '2024-12-20 13:00:00.000', 'updated_at' => '2024-12-20 13:00:00.000', 'deleted_at' => null],
            [ 'Codigo' => '2400', 'Nombre' => 'C.A.I', 'Descripcion' => 'Sistema informático para gestión interna', 'ValidaRUT' => false, 'UsuarioBD' => 14, 'Vigencia' => true, 'GrupoID' => 23, 'created_at' => '2024-12-20 13:05:00.000', 'updated_at' => '2024-12-20 13:05:00.000', 'deleted_at' => null],
            ['Codigo' => '2500', 'Nombre' => 'FARMACIA-GES', 'Descripcion' => 'Sistema web para la gestión de medicamentos GES', 'ValidaRUT' => false, 'UsuarioBD' => 15, 'Vigencia' => true, 'GrupoID' => 21, 'created_at' => '2024-12-20 13:10:00.000', 'updated_at' => '2024-12-20 13:10:00.000', 'deleted_at' => null],
            ['Codigo' => '2600', 'Nombre' => 'Registro Usuario', 'Descripcion' => 'Sistema de escritorio para la gestión de usuarios', 'ValidaRUT' => false, 'UsuarioBD' => 16, 'Vigencia' => true, 'GrupoID' => 26, 'created_at' => '2024-12-20 13:15:00.000', 'updated_at' => '2024-12-20 13:15:00.000', 'deleted_at' => null],
            [ 'Codigo' => '2700', 'Nombre' => 'Lista Espera Rx', 'Descripcion' => 'Sistema web para seguimiento de exámenes pendientes', 'ValidaRUT' => false, 'UsuarioBD' => 17, 'Vigencia' => true, 'GrupoID' => 19, 'created_at' => '2024-12-20 13:20:00.000', 'updated_at' => '2024-12-20 13:20:00.000', 'deleted_at' => null],
            [ 'Codigo' => '2800', 'Nombre' => 'Turno Clinico', 'Descripcion' => 'Sistema para asignación de turnos médicos', 'ValidaRUT' => false, 'UsuarioBD' => 18, 'Vigencia' => true, 'GrupoID' => 20, 'created_at' => '2024-12-20 13:25:00.000', 'updated_at' => '2024-12-20 13:25:00.000', 'deleted_at' => null],
            ['Codigo' => '2900', 'Nombre' => 'Mater', 'Descripcion' => 'Sistema web para gestión materna', 'ValidaRUT' => false, 'UsuarioBD' => 19, 'Vigencia' => true, 'GrupoID' => 25, 'created_at' => '2024-12-20 13:30:00.000', 'updated_at' => '2024-12-20 13:30:00.000', 'deleted_at' => null],
            ['Codigo' => '3000', 'Nombre' => 'Larga Estadia', 'Descripcion' => 'Sistema de escritorio para manejo de estadías prolongadas', 'ValidaRUT' => false, 'UsuarioBD' => 20, 'Vigencia' => true, 'GrupoID' => 27, 'created_at' => '2024-12-20 13:35:00.000', 'updated_at' => '2024-12-20 13:35:00.000', 'deleted_at' => null],
            [ 'Codigo' => '3100', 'Nombre' => 'Consultas Internas', 'Descripcion' => 'Sistema de escritorio para gestión de consultas internas', 'ValidaRUT' => true, 'UsuarioBD' => 21, 'Vigencia' => true, 'GrupoID' => 12, 'created_at' => '2024-12-20 13:40:00.000', 'updated_at' => '2024-12-20 13:40:00.000', 'deleted_at' => null],
            [ 'Codigo' => '3200', 'Nombre' => 'Helios RX', 'Descripcion' => 'Sistema especializado para radiología', 'ValidaRUT' => false, 'UsuarioBD' => 22, 'Vigencia' => true, 'GrupoID' => 6, 'created_at' => '2024-12-20 13:45:00.000', 'updated_at' => '2024-12-20 13:45:00.000', 'deleted_at' => null],
            [ 'Codigo' => '3300', 'Nombre' => 'UCI', 'Descripcion' => 'Sistema de escritorio para la unidad de cuidados intensivos', 'ValidaRUT' => false, 'UsuarioBD' => 23, 'Vigencia' => true, 'GrupoID' => 3, 'created_at' => '2024-12-20 13:50:00.000', 'updated_at' => '2024-12-20 13:50:00.000', 'deleted_at' => null],
            ['Codigo' => '3400', 'Nombre' => 'Urgencias', 'Descripcion' => 'Sistema de escritorio para la gestión de urgencias', 'ValidaRUT' => false, 'UsuarioBD' => 24, 'Vigencia' => true, 'GrupoID' => 1, 'created_at' => '2024-12-20 13:55:00.000', 'updated_at' => '2024-12-20 13:55:00.000', 'deleted_at' => null],
            [ 'Codigo' => '3500', 'Nombre' => 'Lista Espera Qx', 'Descripcion' => 'Sistema web para manejo de listas quirúrgicas', 'ValidaRUT' => true, 'UsuarioBD' => 25, 'Vigencia' => true, 'GrupoID' => 14, 'created_at' => '2024-12-20 14:00:00.000', 'updated_at' => '2024-12-20 14:00:00.000', 'deleted_at' => null],
            [ 'Codigo' => '3600', 'Nombre' => 'Patología', 'Descripcion' => 'Sistema web para gestión de patologías', 'ValidaRUT' => false, 'UsuarioBD' => 26, 'Vigencia' => true, 'GrupoID' => 16, 'created_at' => '2024-12-20 14:05:00.000', 'updated_at' => '2024-12-20 14:05:00.000', 'deleted_at' => null],
            [ 'Codigo' => '3700', 'Nombre' => 'Historial Médico', 'Descripcion' => 'Sistema web para consulta de historial médico', 'ValidaRUT' => false, 'UsuarioBD' => 27, 'Vigencia' => true, 'GrupoID' => 9, 'created_at' => '2024-12-20 14:10:00.000', 'updated_at' => '2024-12-20 14:10:00.000', 'deleted_at' => null],
            [ 'Codigo' => '3800', 'Nombre' => 'Diagnóstico', 'Descripcion' => 'Sistema de escritorio para diagnósticos médicos', 'ValidaRUT' => true, 'UsuarioBD' => 28, 'Vigencia' => true, 'GrupoID' => 10, 'created_at' => '2024-12-20 14:15:00.000', 'updated_at' => '2024-12-20 14:15:00.000', 'deleted_at' => null],
            [ 'Codigo' => '3900', 'Nombre' => 'Recetas Médicas', 'Descripcion' => 'Sistema web para emisión de recetas', 'ValidaRUT' => false, 'UsuarioBD' => 29, 'Vigencia' => true, 'GrupoID' => 17, 'created_at' => '2024-12-20 14:20:00.000', 'updated_at' => '2024-12-20 14:20:00.000', 'deleted_at' => null],
            [ 'Codigo' => '4000', 'Nombre' => 'Historial Rx', 'Descripcion' => 'Sistema de escritorio para historial de radiografías', 'ValidaRUT' => false, 'UsuarioBD' => 30, 'Vigencia' => true, 'GrupoID' => 19, 'created_at' => '2024-12-20 14:25:00.000', 'updated_at' => '2024-12-20 14:25:00.000', 'deleted_at' => null],
            ['Codigo' => '4100', 'Nombre' => 'Turnos Enfermería', 'Descripcion' => 'Sistema de escritorio para turnos de enfermería', 'ValidaRUT' => false, 'UsuarioBD' => 31, 'Vigencia' => true, 'GrupoID' => 20, 'created_at' => '2024-12-20 14:30:00.000', 'updated_at' => '2024-12-20 14:30:00.000', 'deleted_at' => null],
            ['Codigo' => '4200', 'Nombre' => 'Programación Qx', 'Descripcion' => 'Sistema web para programación de cirugías', 'ValidaRUT' => false, 'UsuarioBD' => 32, 'Vigencia' => true, 'GrupoID' => 4, 'created_at' => '2024-12-20 14:35:00.000', 'updated_at' => '2024-12-20 14:35:00.000', 'deleted_at' => null],
            [ 'Codigo' => '4300', 'Nombre' => 'Laboratorio', 'Descripcion' => 'Sistema web para gestión de laboratorios clínicos', 'ValidaRUT' => false, 'UsuarioBD' => 33, 'Vigencia' => true, 'GrupoID' => 8, 'created_at' => '2024-12-20 14:40:00.000', 'updated_at' => '2024-12-20 14:40:00.000', 'deleted_at' => null],
            [ 'Codigo' => '4400', 'Nombre' => 'Consentimientos Qx', 'Descripcion' => 'Sistema web para consentimientos quirúrgicos', 'ValidaRUT' => false, 'UsuarioBD' => 34, 'Vigencia' => true, 'GrupoID' => 24, 'created_at' => '2024-12-20 14:45:00.000', 'updated_at' => '2024-12-20 14:45:00.000', 'deleted_at' => null],
            [ 'Codigo' => '4500', 'Nombre' => 'Documentos Médicos', 'Descripcion' => 'Sistema web para almacenamiento de documentos médicos', 'ValidaRUT' => true, 'UsuarioBD' => 35, 'Vigencia' => true, 'GrupoID' => 12, 'created_at' => '2024-12-20 14:50:00.000', 'updated_at' => '2024-12-20 14:50:00.000', 'deleted_at' => null],
            [ 'Codigo' => '4600', 'Nombre' => 'Farmacia Ambulatoria', 'Descripcion' => 'Sistema de escritorio para gestión de farmacias ambulatorias', 'ValidaRUT' => true, 'UsuarioBD' => 36, 'Vigencia' => true, 'GrupoID' => 2, 'created_at' => '2024-12-20 14:55:00.000', 'updated_at' => '2024-12-20 14:55:00.000', 'deleted_at' => null],
            [ 'Codigo' => '4700', 'Nombre' => 'Hospitalización Pediátrica', 'Descripcion' => 'Sistema web especializado en hospitalización pediátrica', 'ValidaRUT' => false, 'UsuarioBD' => 37, 'Vigencia' => true, 'GrupoID' => 6, 'created_at' => '2024-12-20 15:00:00.000', 'updated_at' => '2024-12-20 15:00:00.000', 'deleted_at' => null],
            [ 'Codigo' => '4800', 'Nombre' => 'Control Administrativo', 'Descripcion' => 'Sistema web para la supervisión administrativa', 'ValidaRUT' => true, 'UsuarioBD' => 38, 'Vigencia' => true, 'GrupoID' => 22, 'created_at' => '2024-12-20 15:05:00.000', 'updated_at' => '2024-12-20 15:05:00.000', 'deleted_at' => null],
        ]);
    }
}