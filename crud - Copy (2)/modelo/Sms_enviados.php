<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms_enviados extends Model
{
    protected $table = 'sms_enviados';
    protected $primaryKey = "id";
    protected $fillable = ['conta','usuario','medico','proveedor','numero','mensaje','fecha','tipo','historia','consulta','usercreated_at','userupdated_at','created_at','updated_at','id'];
 
}
