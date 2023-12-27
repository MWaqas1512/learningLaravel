<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** php artisan make:model School */
    use HasFactory;
    protected $fillable = [
      'student_name',
      'student_marks'
    ];
}
