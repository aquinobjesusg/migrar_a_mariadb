<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pre_trombo extends Model
{

    use HasFactory;

    public $timestamps = true;

    protected $table = 'pre_trombo';

    protected $fillable = ['historia','consulta','tipo','resultado','usercreated_at','userupdated_at','created_at','updated_at','user_data_id','id'];
 
}
