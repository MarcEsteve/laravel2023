<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejemplo extends Model
{
    protected $table = 'ejemplo';
    protected $fillable = ['nombre', 'email'];
}