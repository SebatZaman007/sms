<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'cne',
        'firstName',
        'lastName',
        'age',
        'speciality'
    ];
    use HasFactory;
}
