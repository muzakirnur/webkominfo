@extends('layouts.admin.admin')

@section('abody')

    <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Permohonan</h1>
        @if (session()->has('updatesuccess'))
                                <div class="alert alert-primary d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                        aria-label="Success:">
                                        <use xlink:href="#check-circle-fill" />
                                    </svg>
                                    <div>
                                        {{ session('updatesuccess') }}
                                    </div>
                                </div>
                            @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Permohonan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="bg-primary" style="color: white">
                                <th>No.Tiket</th>
                                <th>Nama Pemohon</th>
                                <th>Tanggal</th>
                                <th>Topik</th>
                                <th>Status</th>
                                <th>Lihat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permohonan as $row)
                            <tr>
                                <td>{{ $row->no_tiket }}</td>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->created_at->format('d-m-Y') }}</td>
                                <td>{{ $row->topik }}</td>
                                <th>{{ $row->state->name}}</th>
                                <td><a href="{{ route('permohonan.show', $row->id) }}">
                                    <button class="btn btn-success"><i class="fas fa-eye"></i>
                                        Show
                                    </button></a></td>
                                <td><a href="{{ route('permohonan.edit', $row->id) }}">
                                    <button class="btn btn-primary"><i class="fas fa-edit"></i>
                                        Edit
                                    </button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    
@endsection