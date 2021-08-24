@extends('layouts.user.user')

@section('ubody')

    <!-- Begin Page Content -->
    <div class="container">

        <form action="{{ route('permohonan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                    <input type="hidden" class="form-control" id="exampleFormControlInput1" name="no_tiket" readonly>

                    <input type="hidden" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->id }}" name="user_id" readonly>

                    <input type="hidden" class="form-control" name="state_id" value="1" readonly>
            
            <div class="form-group">
                <label >Kategori</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="topik" placeholder="Kategori" required>
                        <option>Internet</option>
                        <option>Intranet</option>
                    </select>
            </div>

            <div class="form-group">
                <label >Peruntukan</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="peruntukan" placeholder="Kategori" required>
                        <option>Instansi SKPK</option>
                        <option>Instansi non SKPK</option>
                        <option>Kegiatan Instansi SKPK</option>
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
            

                    <input type="hidden" class="form-control" name="progres" value="0%" readonly>

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