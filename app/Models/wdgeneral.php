<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wdgeneral extends Model
{
    protected $table='wdgenerals';
    protected $guarded=['id'];
    use HasFactory;    
}
