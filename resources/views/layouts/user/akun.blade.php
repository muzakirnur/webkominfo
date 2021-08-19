@extends('layouts.user.user')

@section('ubody')

    <!-- Begin Page Content -->
    <div class="container">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Permohonan</h6>
            </div>
            <div class="card-body">
        
                <h1 class="h3 mb-2 text-gray-800">Informasi Akun</h1>
        
                <ul class="list-group">

                    <label class="">Nama        
                        <li class="list-group-item">{{ Auth::user()->name }}</li>

                    </label>
                    <label class="">Email
                        <li class="list-group-item">{{ Auth::user()->email }}</li>
                    </ul>
        </div>

    </div>
@endsection