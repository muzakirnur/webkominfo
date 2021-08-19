@extends('layouts.admin.admin')
@section('abody')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 80%;">
            <div class="card-header">
            Edit User
            </div>
            <div class="card-body">
                <div class="row g-3">
                <form action="{{ route('daftaruser.update',$DaftarUser->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Nama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $DaftarUser->name }}">
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">NIP</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $DaftarUser->nip }}">
                    </div>
                    </div>
                    </div>
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Jabatan</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $DaftarUser->jabatan }}">
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Instansi</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="instansi" name="instansi" value="{{ $DaftarUser->instansi }}">
                    </div>
                    </div>
                    </div>
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">No Handphone</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="hp" name="hp" value="{{ $DaftarUser->hp }}">
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">role</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect02" name="role" id="role">
                          <option selected>{{ $DaftarUser->role }}</option>
                          <option value="admin">admin</option>
                          <option value="user">user</option>
                        </select>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $DaftarUser->email }}">
                    </div>
                    </div>
                    </div>
                    <div class="card-footer">
                        <div class="row row-cols-lg-3 justify-content-between mx-auto">
                    <a href="{{ route('daftaruser.index') }}" class="btn btn-light shadow-sm" type="submit"><i class="fas fa-chevron-left"></i> Kembali</a>
                    <button class="btn btn-primary shadow-sm" type="submit"><i class="fas fa-user-edit"></i> Simpan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection