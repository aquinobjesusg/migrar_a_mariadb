<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examenes extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'examenes';

    protected $fillable = ['codeexamen','examen','codetipo','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}
