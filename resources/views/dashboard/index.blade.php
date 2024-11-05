@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('breadcrumb')
<x-dashboard.breadcrumb
    :title="'Dashboard'"
    :page="'Dashboard'"
    :active="'Dashboard'"
    :route="route('dashboard.index')"
/>

@endsection

@section('content')

<div class="row">
    <div class="col-xl-3">
        <div class="card mb-1">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Status SKA</h4>
            </div><!-- end card header -->

            <div class="card-body d-flex flex-column justify-content-between">
                <div id="custom_datalabels_bar"
                    data-colors='["--vz-primary", "--vz-secondary", "--vz-success", "--vz-info", "--vz-warning", "--vz-danger", "--vz-dark", "--vz-primary", "--vz-success", "--vz-secondary"]'
                    class="apex-charts" dir="ltr" style="height: 150px;"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Request Maintenance</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="column_chart_datalabel" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"
                    style="height: 150px;"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-2">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Stat Medical Check-Up</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="chart-pie"
                    data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]'
                    class="e-charts" style="height: 150px;"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-2">
        <!-- Small Tables Card -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Absensi Terlambat</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 165px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Greg</td>
                                <td>20 Okt 2024</td>
                                <td>07:06</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Udin</td>
                                <td>20 Okt 2024</td>
                                <td>07:08</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Dila</td>
                                <td>20 Okt 2024</td>
                                <td>07:13</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Hanif</td>
                                <td>20 Okt 2024</td>
                                <td>07:15</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Sofa</td>
                                <td>20 Okt 2024</td>
                                <td>07:22</td>
                            </tr>
                            <th scope="row">6</th>
                            <td>Udin</td>
                            <td>20 Okt 2024</td>
                            <td>07:08</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-2">
        <!-- Small Tables Card -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Kegiatan Tahunan</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 165px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kick Off</td>
                                <td>10 Oktober 2024</td>
                            </tr>
                            <tr>
                                <td>Family Gathering</td>
                                <td>12 Oktober 2024</td>
                            </tr>
                            <tr>
                                <td>Welcoming Party</td>
                                <td>14 Oktober 2024</td>
                            </tr>
                            <tr>
                                <td>CSR Program</td>
                                <td>15 Oktober 2024</td>
                            </tr>
                            <tr>
                                <td>TGIF</td>
                                <td>17 Oktober 2024</td>
                            </tr>
                            <tr>
                                <td>Family Gathering</td>
                                <td>12 Oktober 2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-2">
        <!-- Small Tables Card -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Status Booking Mobil</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 165px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">Plat Nomor</th>
                                <th scope="col">Jenis Mobil</th>
                                <th scope="col">Hari Ini</th>
                                <th scope="col">Besok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>B 1234 XYZ</td>
                                <td>SUV</td>
                                <td>
                                    <div>10:00</div>
                                    <div>28 Oktober 2024</div>
                                </td>
                                <td>
                                    <div>09:00</div>
                                    <div>29 Oktober 2024</div>
                                </td>
                            </tr>
                            <tr>
                                <td>D 5678 ABC</td>
                                <td>Sedan</td>
                                <td>
                                    <div>11:30</div>
                                    <div>28 Oktober 2024</div>
                                </td>
                                <td>
                                    <div>10:30</div>
                                    <div>29 Oktober 2024</div>
                                </td>
                            </tr>
                            <tr>
                                <td>A 4321 DEF</td>
                                <td>Truck</td>
                                <td>
                                    <div>13:00</div>
                                    <div>28 Oktober 2024</div>
                                </td>
                                <td>
                                    <div>14:00</div>
                                    <div>29 Oktober 2024</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-2">
        <!-- Small Tables Card -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Kotak Saran</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 165px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">Isi Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tambahkan fasilitas olahraga di area kantor.</td>
                            </tr>
                            <tr>
                                <td>Perbaiki area parkir agar lebih luas.</td>
                            </tr>
                            <tr>
                                <td>Sediakan opsi menu makanan sehat di kantin.</td>
                            </tr>
                            <tr>
                                <td>Adakan sesi pelatihan keterampilan setiap bulan.</td>
                            </tr>
                            <tr>
                                <td>Perbanyak tanaman hijau di sekitar kantor.</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-2">
        <!-- Tabel Usulan Pelatihan -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Usulan Pelatihan</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 165px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">Nama Pelatihan</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pelatihan Leadership</td>
                                <td>05 Nov 2024</td>
                                <td>Menunggu Persetujuan</td>
                            </tr>
                            <tr>
                                <td>Pelatihan Keterampilan Teknik</td>
                                <td>10 Nov 2024</td>
                                <td>Diterima</td>
                            </tr>
                            <tr>
                                <td>Pelatihan Manajemen Proyek</td>
                                <td>15 Nov 2024</td>
                                <td>Ditolak</td>
                            </tr>
                            <tr>
                                <td>Pelatihan Manajemen Proyek</td>
                                <td>15 Nov 2024</td>
                                <td>Ditolak</td>
                            </tr>
                            <tr>
                                <td>Pelatihan Manajemen Proyek</td>
                                <td>15 Nov 2024</td>
                                <td>Ditolak</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-2">
        <!-- Tabel Monitoring -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Pengeluaran (3 bulan)</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 165px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">Bulan</th>
                                <th scope="col">Biaya Listrik</th>
                                <th scope="col">Biaya Air</th>
                                <th scope="col">Biaya Pengobatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Januari</td>
                                <td>Rp.2.500.000</td>
                                <td>Rp.7.503.000</td>
                                <td>Rp.1.403.000</td>
                            </tr>
                            <tr>
                                <td>Februari</td>
                                <td>Rp.2.500.000</td>
                                <td>Rp.7.503.000</td>
                                <td>Rp.1.403.000</td>
                            </tr>
                            <tr>
                                <td>Maret</td>
                                <td>Rp.2.500.000</td>
                                <td>Rp.7.503.000</td>
                                <td>Rp.1.403.000</td>
                            </tr>
                            <tr>
                                <td>Januari</td>
                                <td>Rp.2.500.000</td>
                                <td>Rp.7.503.000</td>
                                <td>Rp.1.403.000</td>
                            </tr>
                            <tr>
                                <td>Februari</td>
                                <td>Rp.2.500.000</td>
                                <td>Rp.7.503.000</td>
                                <td>Rp.1.403.000</td>
                            </tr>
                            <tr>
                                <td>Maret</td>
                                <td>Rp.2.500.000</td>
                                <td>Rp.7.503.000</td>
                                <td>Rp.1.403.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-2">
        <!-- Tabel Permintaan Kendaraan -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Permintaan Ruangan</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 165px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">Nama Pemohon</th>
                                <th scope="col">Tanggal Permintaan</th>
                                <th scope="col">Waktu Penggunaan</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Udin</td>
                                <td>28 Oktober 2024</td>
                                <td>09:00 - 12:00</td>
                                <td>Disetujui</td>
                            </tr>
                            <tr>
                                <td>Rina</td>
                                <td>28 Oktober 2024</td>
                                <td>14:00 - 16:00</td>
                                <td>Menunggu Persetujuan</td>
                            </tr>
                            <tr>
                                <td>Sofia</td>
                                <td>28 Oktober 2024</td>
                                <td>13:00 - 15:00</td>
                                <td>Ditolak</td>
                            </tr>
                            <td>Rina</td>
                            <td>28 Oktober 2024</td>
                            <td>14:00 - 16:00</td>
                            <td>Menunggu Persetujuan</td>
                            </tr>
                            <td>Rina</td>
                            <td>28 Oktober 2024</td>
                            <td>14:00 - 16:00</td>
                            <td>Menunggu Persetujuan</td>
                            </tr>
                            <td>Rina</td>
                            <td>28 Oktober 2024</td>
                            <td>14:00 - 16:00</td>
                            <td>Menunggu Persetujuan</td>
                            </tr>
                            <td>Rina</td>
                            <td>28 Oktober 2024</td>
                            <td>14:00 - 16:00</td>
                            <td>Menunggu Persetujuan</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-2">
        <!-- Tabel Status PTK -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Status PTK</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 165px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">Nama Karyawan</th>
                                <th scope="col">Posisi</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Yanto</td>
                                <td>Staff</td>
                                <td>Aktif</td>
                            </tr>
                            <tr>
                                <td>Wati</td>
                                <td>Supervisor</td>
                                <td>Tidak Aktif</td>
                            </tr>
                            <tr>
                                <td>Agus</td>
                                <td>Manager</td>
                                <td>Aktif</td>
                            </tr>
                            <tr>
                                <td>Agus</td>
                                <td>Manager</td>
                                <td>Aktif</td>
                            </tr>
                            <tr>
                                <td>Agus</td>
                                <td>Manager</td>
                                <td>Aktif</td>
                            </tr>
                            <tr>
                                <td>Agus</td>
                                <td>Manager</td>
                                <td>Aktif</td>
                            </tr>
                            <tr>
                                <td>Agus</td>
                                <td>Manager</td>
                                <td>Aktif</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3">
        <!-- Tabel Status PTK -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Flow GA Maintenance</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 175px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">Request</th>
                                <th scope="col">Verify</th>
                                <th scope="col">Proses</th>
                                <th scope="col">Selesai</th>
                                <th scope="col">Confirm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kamar Mandi</td>
                                <td> v</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Dapur</td>
                                <td> </td>
                                <td> v</td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Kamar Mandi</td>
                                <td> v</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Kamar Mandi</td>
                                <td> v</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Kamar Mandi</td>
                                <td> v</td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3">
    <!-- Tabel Status Karyawan yang cuti -->
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

    <div class="col-xl-3">
        <!-- Tabel Informasi Karyawan Perjalanan Dinas -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 fs-10">Informasi Karyawan Perjalanan Dinas</h4>
            </div>
            <div class="card-body p-2">
                <!-- Mengurangi padding card body -->
                <div class="table-responsive" style="max-height: 175px; overflow-y: auto;">
                    <!-- Menambahkan scrolling -->
                    <table class="table table-sm table-nowrap" style="font-size: 9px;">
                        <!-- Ukuran font lebih kecil -->
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Karyawan</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Tanggal Perjalanan Dinas Mulai</th>
                                <th scope="col">Tanggal Perjalanan Dinas Selesai</th>
                                <th scope="col">Tujuan Perjalanan</th>
                                <th scope="col">Status Perjalanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Andi Setiawan</td>
                                <td>Staff Administrasi</td>
                                <td>2024-10-01</td>
                                <td>2024-10-03</td>
                                <td>Jakarta</td>
                                <td>Dalam Perjalanan</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Budi Santoso</td>
                                <td>Manajer Pemasaran</td>
                                <td>2024-10-05</td>
                                <td>2024-10-08</td>
                                <td>Surabaya</td>
                                <td>Selesai</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Siti Aminah</td>
                                <td>Staff Keuangan</td>
                                <td>2024-10-10</td>
                                <td>2024-10-12</td>
                                <td>Bandung</td>
                                <td>Dalam Perjalanan</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Rina Juwita</td>
                                <td>Staff HRD</td>
                                <td>2024-10-12</td>
                                <td>2024-10-15</td>
                                <td>Medan</td>
                                <td>Dalam Perjalanan</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Joko Purwanto</td>
                                <td>Staff IT</td>
                                <td>2024-10-18</td>
                                <td>2024-10-20</td>
                                <td>Yogyakarta</td>
                                <td>Selesai</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

</div><!-- end row -->
@endsection