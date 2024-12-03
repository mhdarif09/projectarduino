<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dpo extends Model
{
    use HasFactory;

    protected $table = 'dpo'; // Sesuaikan dengan nama tabel yang benar

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nik', 
        'name', 
        'status'
    ];
}

