@extends('layouts.user.user')

@section('ubody')

    <!-- Begin Page Content -->
    <div class="container">
        
        @foreach ($layaruser as $row)
        <form action="{{ route('layaruser.update',$row->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" value="{{ $row->id }}" id="id" name="id">
            <div class="form-group">
                <label >Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  value="{{ $row->nama }}" placeholder="Nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label >Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  value="{{ $row->email }}" placeholder="Email" name="email" required>
            </div>

            <div class="form-group">
                <label >NIP</label>
                    <input type="text" class="form-control" name="nip" value="{{ $row->nip }}" placeholder="NIP" required>
            </div>

            <div class="form-group">
                <label >No. HP</label>
                    <input type="text" class="form-control" name="hp" value="{{ $row->hp }}" placeholder="NO. HP" >
            </div>

            <div class="form-group">
                <label >Jabatan</label>
                    <input type="text" class="form-control" id="exampleFormControlTextarea1" value="{{ $row->jabatan }}" name="jabatan" placeholder="Jabatan">
            </div>
            
            <div class="form-group">
                <label >Instansi</label>
                    <input type="text" class="form-control" name="instansi" value="{{ $row->instansi }}" placeholder="Instansi" >
            </div>


            <button type="submit" class="btn btn-primary btn-user btn-block">
                Submit
            </button>
        </form>
        @endforeach

    </div>

@endsection