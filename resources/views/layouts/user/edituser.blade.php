@extends('layouts.user.user')

@section('ubody')

    <!-- Begin Page Content -->
    <div class="container">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Profile Saya</h6>
            </div>
            <div class="card-body">

        <form action="{{ route('layaruser.update',$layaruser->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{ $layaruser->name }}" name="name" required>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" id="exampleFormControlInput1"  value="{{ $layaruser->role }}" name="role" required>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{ $layaruser->email }}" name="email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">NIP</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{ $layaruser->nip }}" name="nip" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Jabatan</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{ $layaruser->jabatan }}" name="jabatan" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Instansi</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{ $layaruser->instansi }}" name="instansi" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">No. HP</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{ $layaruser->hp }}" name="hp" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Foto Profile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="file" class="form-control" name="profile" value="{{ $layaruser->profile }}" >
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>


@endsection