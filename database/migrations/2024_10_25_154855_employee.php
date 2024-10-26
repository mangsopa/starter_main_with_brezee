<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('idpgw')->unique();
            $table->integer('idfinger')->unique();
            $table->integer('id_org');
            $table->char('register, 10');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('negara');
            $table->string('workgroup');
            $table->string('jeniskerja');
            $table->string('kodespv');
            $table->string('sertifikat');
            $table->string('posisi');
            $table->string('statuspgw');
            $table->string('pendidikan');
            $table->string('alumnus');
            $table->string('jurusan');
            $table->string('lokasikerja');
            $table->string('grade');
            $table->text('alamat');
            $table->string('telp');
            $table->string('email');
            $table->string('nik');
            $table->string('agama');
            $table->string('gender');
            $table->string('goldar');
            $table->string('statuskawin');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->date('tmbkontrak');
            $table->date('awal_kontrak');
            $table->date('akhir_kontrak');
            $table->date('tmbtetap');
            $table->string('sk_tetap');
            $table->date('tanggalpensiun');
            $table->decimal('hak_cuti', 3, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
