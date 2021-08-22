@extends('layouts.user.user')

@section('ubody')

    <!-- Begin Page Content -->
    <div class="container">
        
        <form action="{{ route('layaruser.update',$layaruser->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label >Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  value="{{ $layaruser->name }}" placeholder="Nama" name="name" required>
            </div>
            <input type="hidden" class="form-control" id="exampleFormControlInput1"  value="{{ $layaruser->role }}" name="role" required>
            <div class="form-group">
                <label >Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  value="{{ $layaruser->email }}" placeholder="Email" name="email" required>
            </div>

            <div class="form-group">
                <label >NIP</label>
                    <input type="text" class="form-control" name="nip" value="{{ $layaruser->nip }}" placeholder="NIP" required>
            </div>
            <div class="form-group">
                <label >No. HP</label>
                    <input type="text" class="form-control" name="hp" value="{{ $layaruser->hp }}" placeholder="NO. HP" >
            </div>
            <div class="form-group">
                <label >Profile</label>
                    <input type="text" class="form-control" name="profile" value="{{ $layaruser->profile }}" readonly >
            </div>

            <div class="form-group">
                <label >Jabatan</label>
                    <input type="text" class="form-control" id="exampleFormControlTextarea1" value="{{ $layaruser->jabatan }}" name="jabatan" placeholder="Jabatan">
            </div>
            
            <div class="form-group">
                <label >Instansi</label>
                    <input type="text" class="form-control" name="instansi" value="{{ $layaruser->instansi }}" placeholder="Instansi" >
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Submit
            </button>
        </form>

    </div>

@endsection