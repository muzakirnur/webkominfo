@extends('layouts.admin.admin')

@section('abody')
<div class="container">
    @if (session()->has('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                        aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
<form action="{{route('password.update',Auth::user()->id)}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <div class="row ">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h4 class="card-title">
                        <h4>Ganti Password</h4>
                    </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mt-3">
                                <label for="current_password">Password Sekarang</label>
                                <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required
                                    placeholder="Enter current password">
                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-3">
                                <label for="new_password ">Password Baru</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required
                                    placeholder="Enter the new password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-3">
                                <label for="confirm_password">Confirm Password Baru</label>
                                <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"required placeholder="Enter same password">
                                @error('confirm_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-first mt-4 ml-2">
                            <button type="submit" class="btn btn-primary"
                                id="formSubmit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</form>
</div>
@endsection