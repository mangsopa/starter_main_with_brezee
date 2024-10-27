@extends('layouts.dashboard.app')

@section('title', 'Employee')

@section('breadcrumb')
    <x-dashboard.breadcrumb title="Employee" page="Employee" active="Employee"
        route="{{ route('employee.index') }}" />
@endsection

@section('content')
    <div class="card card-height-100 table-responsive">
        <!-- cardheader -->
        <div class="card-header border-bottom-dashed align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Employee</h4>
            <div class="flex-shrink-0">
                <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#modal-form-add-permission">
                    <i class="ri-add-line"></i>
                    Add
                </button>
            </div>
        </div>
        <!-- end cardheader -->

        <!-- Hoverable Rows -->
        <table class="table table-hover table-nowrap mb-0">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Idpgw</th>
                    <th scope="col">Id Finger</th>
                    <th scope="col">id Org</th>
                    <th scope="col">Register</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Jenis Kerja</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Lokasi Kerja</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Hak Cuti</th>
                    <th scope="col" class="col-1"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($employee as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->idpgw }}</td>
                        <td>{{ $row->idfinger }}</td>
                        <td>{{ $row->id_org }}</td>
                        <td>{{ $row->register }}</td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->jabatan }}</td>
                        <td>{{ $row->jeniskerja }}</td>
                        <td>{{ $row->posisi }}</td>
                        <td>{{ $row->lokasikerja }}</td>
                        <td>{{ $row->agama }}</td>
                        <td>{{ $row->hak_cuti }}</td>
                        <td>
                            <div class="dropdown">
                                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ri-more-2-fill"></i>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal-form-edit-human-{{ $row->id }}">
                                            Edit
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('modal-form-delete-permission-{{ $row->idpgw }}').submit()">
                                            Delete
                                        </a>
                                    </li>
                                </ul>

                                @include('components.form.modal.human.edit')
                                {{-- @include('components.form.modal.menu-group.delete') --}}
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="5" class="text-center">No data to display</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="card-footer py-4">
            <nav aria-label="..." class="pagination justify-content-end">
                {{ $employee->links() }}
            </nav>
        </div>
    </div>

    {{-- @include('components.form.modal.permission.add') --}}
@endsection
