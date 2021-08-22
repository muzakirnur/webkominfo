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
                    @foreach ($layaruser as $row)

                    <label class="">Nama        
                    <li class="list-group-item" style="border-radius: 1.5em">{{ Auth::user()->name }}</li>

                    </label>
                    <label class="">Email
                    <li class="list-group-item" style="border-radius: 1.5em">{{ Auth::user()->email }}</li>

                    </label>
                    <label class="">NIP
                    <li class="list-group-item" style="border-radius: 1.5em">{{ Auth::user()->nip }}</li>
                    

                    </label>
                    <label class="">Jabatan
                    <li class="list-group-item" style="border-radius: 1.5em">{{ Auth::user()->jabatan }}</li>
                    

                    </label>
                    <label class="">Instansi
                    <li class="list-group-item" style="border-radius: 1.5em">{{ Auth::user()->instansi }}</li>
                    

                    </label>
                    <label class="">No. HP
                    <li class="list-group-item" style="border-radius: 1.5em">{{ Auth::user()->hp }}</li>
                </ul>

                <a href="{{ route('layaruser.edit',$row->id) }}">
                <button class="btn btn-primary btn-user btn-block"></i>
                    Edit
                </button></a>
            @endforeach
        </div>

    </div>
@endsection