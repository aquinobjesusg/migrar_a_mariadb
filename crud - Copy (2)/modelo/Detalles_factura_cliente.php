<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalles_factura_cliente extends Model
{
    protected $table = 'detalles_factura_cliente';
    protected $primaryKey = "id";
    protected $fillable = ['cod_inventario','numfactura','tipo_articulo','nombre','precio','descuento','cantidad','fecha_doc','tipo_precio','total_articulo','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}
