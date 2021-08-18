@extends('layouts.main')

@section('body')
    
<div class="d-flex container justify-content-center">

    <div class="card w-75 o-hidden border-0 shadow-lg my-5 text-center">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
                        </div>
                        <form class="user" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleFirstName"
                                        placeholder="Nama" name="name" required value="{{ old('name') }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail"
                                    placeholder="Alamat Email" name="email" required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user @error('password')is-invalid @enderror"
                                        id="exampleInputPassword" placeholder="Password" name="password" required>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Repeat Password" name="password_confirmation" required>
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/forgot">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection