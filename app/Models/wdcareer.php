<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wdcareer extends Model
{
    use HasFactory;
    protected $table='wdcareers';
    protected $guarded=['id'];
}
