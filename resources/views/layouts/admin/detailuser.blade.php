
@section('abody')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail User
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Name: </b>{{$DaftarUser->name}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$DaftarUser->role}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$DaftarUser->nip}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$DaftarUser->jabatan}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$DaftarUser->instansi}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$DaftarUser->email}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$DaftarUser->hp}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('daftaruser.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection