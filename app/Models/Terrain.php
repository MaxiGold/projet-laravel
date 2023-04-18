<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    use HasFactory;
     protected $fillable = [
        'num_terrain', 'emplacement', 'superficie', 'province'
    ];
}
