<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0">{{ $title }}</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ $route }}">{{ $page }}</a></li>
            <li class="breadcrumb-item active">{{ $active }}</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Status SKA</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="custom_datalabels_bar"
                    data-colors='["--vz-primary", "--vz-secondary", "--vz-success", "--vz-info", "--vz-warning", "--vz-danger", "--vz-dark", "--vz-primary", "--vz-success", "--vz-secondary"]'
                    class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Status Request Maintenance</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="column_chart_datalabel" data-colors='["--vz-success"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Status Medical Check-Up</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="chart-pie"
                    data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]'
                    class="e-charts"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3">
        <!-- Small Tables Card -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Status Absensi Terlambat (Hari Ini)</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-nowrap">
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
                                <td>20 Oktober 2024</td>
                                <td>07:06</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Udin</td>
                                <td>20 Oktober 2024</td>
                                <td>07:08</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Dila</td>
                                <td>20 Oktober 2024</td>
                                <td>07:13</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Hanif</td>
                                <td>20 Oktober 2024</td>
                                <td>07:15</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Sofa</td>
                                <td>20 Oktober 2024</td>
                                <td>07:22</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Greg</td>
                                <td>20 Oktober 2024</td>
                                <td>07:06</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Udin</td>
                                <td>20 Oktober 2024</td>
                                <td>07:08</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Dila</td>
                                <td>20 Oktober 2024</td>
                                <td>07:13</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Hanif</td>
                                <td>20 Oktober 2024</td>
                                <td>07:15</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Sofa</td>
                                <td>20 Oktober 2024</td>
                                <td>07:22</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3">
        <!-- Small Tables Card -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Kegiatan Tahunan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-nowrap">
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
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <!-- Small Tables Card -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Status Booking Mobil</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-nowrap">
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

    <div class="col-xl-3">
        <!-- Small Tables Card -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Kotak Saran</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-nowrap">
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
</div><!-- end row -->
