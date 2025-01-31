<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    use HasFactory;
    protected $table = 'karyawans';
    protected $fillable =[
        'name',
        'address',
        'profesion',
        'date_of_birth',
        'no_hp',
    ];
}
