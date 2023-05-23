<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // kalau datalistnya ga sesuai plural
    // protected $table = 'mahasiswa';
    // kalau misalnya pk nya itu bukan id doang
    // protected $primarykey = 'mahasiswaID'
    // 
}
