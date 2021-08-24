@extends('layouts.user.user')

@section('ubody')

    <!-- Begin Page Content -->

        <div class="container">

        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Saya</h6>
                </div>
                <div class="card-body">
                    

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle"  alt="Users Profile" width="150">
                    <div class="mt-3">
                        <p class="text-secondary mb-1">{{ Auth::user()->name }}</p>
                    </div>
                </div>
                </div>
            </div>
            
            </div>
            <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Username</h6>
                    </div>
                    <li class="col-sm-9 text-secondary"> {{ Auth::user()->name }}
                    </li>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                    </div>
                    <li class="col-sm-9 text-secondary"> {{ Auth::user()->email }}
                    </li>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">NIP</h6>
                    </div>
                    <li class="col-sm-9 text-secondary"> {{ Auth::user()->nip }}
                    </li>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Jabatan</h6>
                    </div>
                    <li class="col-sm-9 text-secondary"> {{ Auth::user()->jabatan }}
                    </li>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Instansi</h6>
                    </div>
                    <li class="col-sm-9 text-secondary"> {{ Auth::user()->instansi }}
                    </li>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">No. HP</h6>
                    </div>
                    <li class="col-sm-9 text-secondary"> {{ Auth::user()->hp }}
                    </li>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{ route('layaruser.edit', $layaruser->id) }}">
                            <button class="btn btn-primary"><i class="fas fa-edit"></i>
                                Edit
                            </button></a></td>
                    </div>
                </div>
                </div>
            </div>

    </div>
@endsection