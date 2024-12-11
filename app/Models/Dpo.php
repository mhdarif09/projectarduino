<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dpo extends Model
{
    use HasFactory;

    // Nama tabel yang sesuai
    protected $table = 'dpo'; 

    // Kolom yang bisa diisi (fillable)
    protected $fillable = ['nik', 'name', 'status'];

    // Jika kolom timestamps tidak otomatis terdeteksi, bisa ditambahkan:
    public $timestamps = true;
    
    // Status DPO
    const STATUS_DPO = 'DPO';
    const STATUS_BUKAN_DPO = 'Bukan DPO';

    public static $statuses = [self::STATUS_DPO, self::STATUS_BUKAN_DPO];
}
