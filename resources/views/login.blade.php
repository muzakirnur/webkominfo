@extends('layouts.main')

@section('body')
    <div class="d-flex container justify-content-center">
        <!-- Outer Row -->
        <div class="card w-50 o-hidden border-0 shadow-lg my-5 justify-content-center" style="border-radius: 2rem">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-5">
                            @if (session()->has('success'))
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                        aria-label="Success:">
                                        <use xlink:href="#check-circle-fill" />
                                    </svg>
                                    <div>
                                        {{ session('success') }}, Silahkan Login
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang !</h1>
                        </div>
                        <form class="user" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    aria-describedby="emailHelp" name="email" placeholder="Masukkan Alamat Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword"
                                    name="password" placeholder="Masukkan Password" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                                    Login
                                </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="{{ route('forget.get') }}">Lupa Password ?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/register">Buat Akun !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
