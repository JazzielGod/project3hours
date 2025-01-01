<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'posts';

    //protected $fillable = ['title', 'body'];
    
    //campos que no podran ser asignados masivamente
    // protected $guarded = [
    //     'id', 'created_at', 'updated_at'
    // ];

    // desactivar la proteccion de asignacion masiva
    // protected $guarded = [];

}
