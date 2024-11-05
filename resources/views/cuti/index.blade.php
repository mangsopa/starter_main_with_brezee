@extends('layouts.dashboard.app')


@section('title', 'Cuti')

@section('empty-breadcrumb')
<x-dashboard.breadcrumb title="Cuti" page="cuti" active="Cuti" route="{{ route('cuti.index') }}" />
@endsection

@section('content')
   
   <div class="col-md-12">
    <!-- Tabel Status PTK -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0 fs-10">Informasi Karyawan yang Cuti</h4>
        </div>
        <div class="card-body p-2">
            <!-- Mengurangi padding card body -->
            <div class="table-responsive" style="max-height: 175px; overflow-y: auto;">
                <!-- Menambahkan scrolling -->
                <table class="table table-sm table-nowrap" style="font-size: 9px;">
                    <!-- Ukuran font lebih kecil -->
                    <thead>
                        <tr>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Tanggal Cuti Mulai</th>
                            <th scope="col">Tanggal Cuti Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cuti as $data)
                            <tr>
                                <td>{{ $data->nama_karyawan }}</td>
                                <td>{{ $data->tanggal_mulai }}</td>
                                <td>{{ $data->tanggal_selesai }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection