<?php


namespace App\Http\Controllers;

use App\Models\Cuti;

class CutiController extends Controller
{
    public function index()
    {
        // Ambil data cuti karyawan
        $cuti = Cuti::orderBy('tanggal_mulai', 'desc')->get();

        return view('cuti.index', compact('cuti'));
    }
}
