<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $table = 'cuti';

    protected $fillable = [
        'nama_karyawan',
        'tanggal_mulai',
        'tanggal_selesai',
    ];
}
