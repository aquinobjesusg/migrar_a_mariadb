<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emision_pagos_detalle extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'emision_pagos_detalle';

    protected $fillable = ['nro_registro','nro_emision','nro_cxp','nro_mov','origen_cxp','cxp_codigo','cxp_descripcion','fecha_emision','nro_documento','tip_documento','saldo_pagar','monto_pagar','estado','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}
