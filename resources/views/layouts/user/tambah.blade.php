@extends('layouts.user.user')

@section('ubody')

    <!-- Begin Page Content -->
    <div class="container">

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label >No.Tiket</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="001" name="no_tiket" readonly>
            </div>

                    <input type="hidden" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->id }}" name="user_id" readonly>
            
            <div class="form-group">
                <label >Kategori</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="topik" placeholder="Kategori" required>
                        <option>Internet</option>
                        <option>Intranet</option>
                    </select>
            </div>

            <div class="form-group">
                <label >Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="Input Judul" required>
            </div>

            <div class="form-group">
                <label >Deskipsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label >Status</label>
                    <input type="text" class="form-control" name="status" value="Dikirim" readonly>
            </div>

            <div class="form-group">
                <label >progres</label>
                    <input type="text" class="form-control" name="progres" value="0%" readonly>
            </div>

            <div class="form-group">
                <label >Lampiran</label>
                    <input type="file" class="form-control-file" name="lampiran" id="exampleFormControlFile1">
            </div>

            <button type="submit" class="btn btn-primary btn-user btn-block">
                Submit
            </button>
        </form>

    </div>

@endsection