<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use Uuid, HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'idpgw',
        'idfinger',
        'id_org',
        'register',
        'nama',
        'jabatan',
        'negara',
        'workgroup',
        'jeniskerja',
        'kodespv',
        'sertifikat',
        'posisi',
        'statuspgw',
        'pendidikan',
        'alumnus',
        'jurusan',
        'lokasikerja',
        'grade',
        'alamat',
        'telp',
        'email', 
        'nik',
        'agama',
        'gender',
        'goldar',
        'statuskawin',
        'tempatlahir',
        'tanggallahir',
        'tmbkontrak',
        'awal_kontrak',
        'akhir_kontrak',
        'tmbtetap',
        'sk_tetap',
        'tanggalpensiun',
        'hak_cuti',
        'created_at',
        'updated_at',
    ];
}
