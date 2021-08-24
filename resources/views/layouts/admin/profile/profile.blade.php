@extends('layouts.admin.admin')

@section('abody')

<div class="card shadow mb-3" style="max-width: 540px;margin:auto">
    <div class="card-header" style="background-color: #8FC1D4">
        <h5 class="header-title" style="color:white">Profile Saya</h5>
    </div>
    @if (session()->has('updatesuccess'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
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
    <div class="row g-0">
    <div class="col-md-4 justify-content-center" style="margin:auto;display:flex;">
        <img src="/img/user/{{ Auth::user()->profile }}" style="width:180px;height:180px" class="img-profile rounded-circle ml-5" alt="Users Profile">
    </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{ Auth::user()->name }}</h5><br>
            <p class="card-text">NIP : {{ Auth::user()->nip }}</p>
            <p class="card-text">Jabatan : {{ Auth::user()->jabatan }}</p>
            <p class="card-text">Instansi : {{ Auth::user()->instansi }}</p>
            <p class="card-text">No HP : {{ Auth::user()->hp }}</p>
            <p class="card-text">Email : {{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
    <div class="card-footer mt-5 text-center" style="background-color: #8FC1D4">
        <div class="row row-cols-3 justify-content-center">
        <div class="col">
        <button type="button" class="btn btn-light shadow-sm" onclick="history.back(-1)"><i class="fas fa-chevron-left"></i> Kembali</button></a></div>
    <div class="col">
    <a href="{{ route('profile.edit', $UserProfile->id) }}" class="btn btn-primary shadow-sm"><i class="fas fa-edit"></i> Edit</a></div>
    </div>
    </div>
</div>

@endsection