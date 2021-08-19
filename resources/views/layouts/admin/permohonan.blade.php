@extends('layouts.admin.admin')

@section('abody')

    <!-- Begin Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Permohonan</h1>

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
                                <th>Tanggal</th>
                                <th>topik</th>
                                <th>Judul Permasalahan</th>
                                <th>lampiran</th>
                                <th>Status</th>
                                <th>Progres</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="bg-primary" style="color: white">
                                <th>No.Tiket</th>
                                <th>Tanggal</th>
                                <th>topik</th>
                                <th>Judul Permasalahan</th>
                                <th>lampiran</th>
                                <th>Status</th>
                                <th>Progres</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($permohonan as $row)
                            <tr>
                                <td>{{ $row->no_tiket }}</td>
                                <td>{{ $row->created_at->format('d-m-Y') }}</td>
                                <td>{{ $row->topik }}</td>
                                <td>{{ $row->judul }}</td>
                                <td>{{ $row->lampiran }}</td>
                                <th>{{ $row->status }}</th>
                                <th>{{ $row->progres }}</th>
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