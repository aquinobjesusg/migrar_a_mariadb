<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dias_semana extends Model
{
    protected $table = 'dias_semana';
    protected $primaryKey = "id";
    protected $fillable = ['fecha','dia_semana','semana','ano','descripcion','tipo_dia','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}
