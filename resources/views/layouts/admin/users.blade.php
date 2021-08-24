@extends('layouts.admin.admin')

@section('abody')

   <!-- Begin Page Content -->
   <div class="container">
       
       <!-- Page Heading -->
       <h1 class="h3 mb-2 text-gray-800">Daftar User</h1>
       
       <!-- DataTales Example -->
       <div class="card shadow mb-4">
           <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-info">Tabel User</h6>
            </div>
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
        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-info" style="color: white">
                        <tr>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>NIP</th>
                            <th>Lihat</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($DaftarUser as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->role }}</td>
                            <td>{{ $row->nip }}</td>
                            <td><a href="{{ route('daftaruser.show', $row->id) }}">
                                <button class="btn btn-success"><i class="fas fa-eye"></i>
                                    Detail
                                </button></a></td>
                            <td>
                                <a href="{{ route('daftaruser.edit', $row->id) }}">
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