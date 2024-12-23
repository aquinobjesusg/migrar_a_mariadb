<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    protected $table = 'transacciones';
    protected $primaryKey = "id";
    protected $fillable = ['id','fe_registro','name_user','id_user','identificationNac','identificationNumber','cellphone','email','reference_t','cantidad','totalusd','totalbs','tasa','cantcuotas','amount','title','description_t','id_transaccion','usercreated_at','userupdated_at','created_at','updated_at','status','ti_registro','tipo_facccionado'];
 
}

