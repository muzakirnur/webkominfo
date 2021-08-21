@extends('layouts.user.user')

@section('ubody')

    <!-- Begin Page Content -->
    <div class="container">

        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label >Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label >Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Email" name="email" required>
            </div>

            <div class="form-group">
                <label >NIP</label>
                    <input type="text" class="form-control" name="nip" placeholder="NIP" required>
            </div>

            <div class="form-group">
                <label >Jabatan</label>
                    <input type="text" class="form-control" id="exampleFormControlTextarea1" name="jabatan" placeholder="Jabatan">
            </div>
            
            <div class="form-group">
                <label >Instansi</label>
                    <input type="text" class="form-control" name="instansi" placeholder="Instansi" >
            </div>

            <div class="form-group">
                <label >No. HP</label>
                    <input type="text" class="form-control" name="hp" placeholder="NO. HP" >
            </div>

            <button type="submit" class="btn btn-primary btn-user btn-block">
                Submit
            </button>
        </form>

    </div>

@endsection