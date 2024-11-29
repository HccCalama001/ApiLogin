<?php

namespace App\Models\ServidorOld;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioServicio extends Model
{
    use HasFactory;
    
    protected $connection = 'sqlsrv2';

    // Definir la tabla asociada
    protected $table = 'Segu_Usuarios';
    
    // Definir clave primaria
    protected $primaryKey = 'Segu_Usr_RUT';

    // Definir los campos asignables masivamente
    protected $fillable = [
        'Segu_Usr_Cuenta',
        'Segu_Usr_Nombre',
        'Segu_Usr_ApellidoPaterno',
        'Segu_Usr_ApellidoMaterno',
        'Segu_Usr_RUT',
        'Segu_Usr_FuncionAdmnistr',
        'Segu_Usr_Codigo'
    ];

    public $timestamps = false;

    protected $keyType= 'string';

    protected $hidden = [
        'Segu_Vigente',
        'Segu_Usr_Descripcion',
        'Segu_FLD_CCCODIGO',
        'ID_Establecimiento',
        'Segu_Usr_CambioClave',
        'Segu_Usr_CambioCodigo',
        'Segu_Usr_CodigoAnt',
        'Segu_Usr_Fono',
        'Segu_Usr_Mail',
        'enfESI',
        'Segu_Usr_Cuenta' 
    ];


    public function servicioProfesional()
    {
        return $this->hasOne(ServicioProfesional::class, 'Segu_Usr_RUT', 'SER_PRO_Rut');
    }
    public function sysSqlLogin()
    {
        return $this->belongsTo(UsuarioLogin::class, 'Segu_Usr_Cuenta', 'name');
    }
    public function getNombreUsuarioAttribute()
    {
        return "{$this->Segu_Usr_Nombre} {$this->Segu_Usr_ApellidoPaterno} {$this->Segu_Usr_ApellidoMaterno}";
    }

    public function scopeUsername($query, $id)
    {
        return $query->where('Segu_Usr_Cuenta', '=', $id);
    }
}
