@extends('layouts.admin.admin')

@section('abody')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 80%;">
            <div class="card-header">
            Detail Permohonan
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">No Tiket</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $permohonan->no_tiket }}" readonly>
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Nama Pemohon</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $permohonan->user->name }}" readonly>
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Deskripsi</label>
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" id="hp" name="hp" value="" readonly>{{ $permohonan->deskripsi }}</textarea>
                    </div>
                    </div>
                    </div>
                    <div class="row justify-content-start">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Topik</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $permohonan->topik }}" readonly>
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Judul</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="instansi" name="instansi" value="{{ $permohonan->judul }}" readonly>
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">lampiran</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $permohonan->lampiran }}" readonly>
                        <a href="/lampiran/{{ $permohonan->lampiran }}" class="btn btn-primary"><i class="fas fa-arrow-down"></i> Download</a>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Status</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="hp" name="hp" value="{{ $permohonan->status }}" readonly>
                    </div>
                    </div>
                    <div class="col-6 col-sm-4">
                    <label for="basic-url" class="form-label">Progres</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $permohonan->progres }}" readonly>
                    </div>
                    </div>
                    </div>
                    <div class="card-footer">
                        <div class="row row-cols-lg-1 justify-content-between mx-auto">
                    <a href="{{ route('permohonan.index') }}" class="btn btn-primary shadow-sm" type="submit"><i class="fas fa-chevron-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection