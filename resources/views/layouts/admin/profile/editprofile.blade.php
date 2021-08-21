@extends('layouts.admin.admin')

@section('abody')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 80%;">
            <div class="card-header">
            Edit Profile
            </div>
            <div class="card-body">
                <div class="row g-3">
                <form action="{{ route('profile.update',$UserProfile->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Nama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $UserProfile->name }}" value="{{ old('name') }}">
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">NIP</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $UserProfile->nip }}" value="{{ old('nip') }}">
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Profile</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="profile" name="profile" value="{{ $UserProfile->profile }}">
                    </div>
                    </div>
                    </div>
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Jabatan</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $UserProfile->jabatan }}" value="{{ old('jabatan') }}">
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Instansi</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="instansi" name="instansi" value="{{ $UserProfile->instansi }}" value="{{ old('instansi') }}">
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">No Hp</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="hp" name="hp" value="{{ $UserProfile->hp }}" value="{{ old('hp') }}">
                    </div>
                    </div>
                    </div>
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">role</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect02" name="role" id="role" disabled>
                          <option selected>{{ $UserProfile->role }}</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Email</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $UserProfile->email }}" value="{{ old('email') }}">
                    </div>
                    </div>
                    </div>
                    <div class="card-footer">
                        <div class="row row-cols-lg-3 justify-content-between mx-auto">
                    <a href="{{ route('profile.index') }}" class="btn btn-light shadow-sm"><i class="fas fa-chevron-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary shadow-sm"><i class="fas fa-user-edit"></i> Simpan</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection