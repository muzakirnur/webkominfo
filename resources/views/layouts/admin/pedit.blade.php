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
            <form action="{{ url('/admin/permohonan/update',$permohonan->id) }}" method="POST">
              @csrf
            <label class="form-label">No Tiket</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $permohonan->no_tiket }}" readonly>
              </div>
            <label class="form-label">Kategori</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $permohonan->Kategori }}" readonly>
              </div>
            <label class="form-label">Judul</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $permohonan->judul }}" readonly>
              </div>
            <label class="form-label">Permohonan Terkait</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $permohonan->pterkait }}" readonly>
              </div>
            <label class="form-label">Prioritas</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $permohonan->prioritas }}" readonly>
              </div>
            <label class="form-label">Status</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ $permohonan->status }}">
              </div>
              <div class="card-footer mt-5 border-primary text-center">
                <div class="row row-cols-lg-3">
                  <div class="col">
              <a href="/admin/permohonan"><button type="button" class="btn btn-light mt-2 mx-auto shadow-sm"><i class="fas fa-chevron-left"></i> Kembali</button></a></div>
              <div class="col">
              <a href="/admin/permohonan/"><button type="submit" class="btn btn-danger mt-2 mx-auto shadow-sm"><i class="fas fa-trash"></i> Delete</button></a></div>
              <div class="col">
                <button type="submit" class="btn btn-primary mt-2 mx-auto shadow-sm"><i class="fas fa-check"></i> Simpan</button></div>
              </div>
              </div>
            </form>
    </div>
</div>

@endsection