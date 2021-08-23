@extends('layouts.admin.admin')
@section('abody')

<div class="card shadow mb-3" style="max-width: 540px;margin:auto">
    <div class="card-header bg-info">
        <h5 class="header-title" style="color:white">Detail User</h5>
    </div>
    <div class="row g-0">
      <div class="col-md-4 justify-content-center" style="margin:auto;display:flex;">
        <img src="/img/user/{{ $DaftarUser->profile }}" style="width:90%" class="img-profile rounded-circle ml-5" alt="Users Profile">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $DaftarUser->name }}</h5><br>
          <p class="card-text">NIP : {{ $DaftarUser->nip }}</p>
          <p class="card-text">Jabatan : {{ $DaftarUser->jabatan }}</p>
          <p class="card-text">Instansi : {{ $DaftarUser->instansi }}</p>
          <p class="card-text">No HP : {{ $DaftarUser->hp }}</p>
          <p class="card-text">Role : {{ $DaftarUser->role }}</p>
          <p class="card-text">Email : {{ $DaftarUser->email }}</p>
        </div>
      </div>
    </div>
    <div class="card-footer mt-5 bg-info text-center">
        <div class="row">
        <div class="col">
    <a href="{{ route('daftaruser.index',$DaftarUser->id) }}" class="btn btn-light shadow-sm"><i class="fas fa-chevron-left"></i> Kembali</a></div>
    </div>
    </div>
</div>
@endsection