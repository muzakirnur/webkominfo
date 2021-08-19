@extends('layouts.admin.admin')

@section('abody')

<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Permohonan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Permohonan</h6>
        </div>
            <div class="card-body">
            <form action="{{ route('permohonan.update', $permohonan->id) }}" method="POST">
              @csrf
              @method('PUT')
            <label class="form-label">No Tiket</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="no_tiket" name="no_tiket" aria-describedby="basic-addon3" value="{{ $permohonan->no_tiket }}" readonly>
              </div>
            <label class="form-label">Topik</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="topik" name="topik" aria-describedby="basic-addon3" value="{{ $permohonan->topik }}" readonly>
              </div>
            <label class="form-label">Judul</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="judul" name="judul" aria-describedby="basic-addon3" value="{{ $permohonan->judul }}" readonly>
              </div>
            <label class="form-label">Deskripsi</label>
            <div class="input-group mb-3">
                <textarea class="form-control" id="deskripsi" name="deskripsi" aria-describedby="basic-addon3" value="" readonly>{{ $permohonan->deskripsi }}</textarea>
              </div>
            <label class="form-label">Lampiran</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="lampiran" name="lampiran" aria-describedby="basic-addon3" value="{{ $permohonan->lampiran }}" readonly>
                <button class="btn btn-success" type="button"><i class="fas fa-arrow-down fa-1x"> Download</i></button>
              </div>
            <label class="form-label">Status</label>
            <div class="input-group mb-3">
              <select class="form-select" id="status" name="status">
                <option selected>{{ $permohonan->status }}</option>
                <option value="Diterima">Diterima</option>
                <option value="Diproses">Diproses</option>
                <option value="Ditolak">Ditolak</option>
              </select>
            </div>
            <label class="form-label">Progres</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="progres" name="progres" aria-describedby="basic-addon3" value="{{ $permohonan->progres }}">
              </div>
              <div class="card-footer mt-5 border-primary text-center">
                <div class="row row-cols-lg-2">
                  <div class="col">
              <a href="{{ route('permohonan.index') }}"><button type="button" class="btn btn-light mt-2 mx-auto shadow-sm"><i class="fas fa-chevron-left"></i> Kembali</button></a></div>
              <div class="col">
                <button type="submit" class="btn btn-primary mt-2 mx-auto shadow-sm"><i class="fas fa-check"></i> Simpan</button></div>
              </div>
              </div>
            </form>
    </div>
</div>

@endsection