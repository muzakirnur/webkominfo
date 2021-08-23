@extends('layouts.admin.admin')

@section('abody')
<div class="card shadow mb-3" style="max-width: 540px;margin:auto">
    <div class="card-header bg-info">
        <h5 class="header-title" style="color:white">Detail User</h5>
    </div>
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
            <form action="{{ url('admin/setting',Auth::user()->id) }}">
                <div class="row row-cols-2 justify-content-center">
                <div class="col-6">
                <label for="basic-url" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                </div>
                <div class="col-6">
                <label for="basic-url" class="form-label">Confirm password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
    <div class="card-footer mt-5 bg-info text-center">
        <div class="row">
        <div class="col">
    <button type="submit" class="btn btn-light shadow-sm"><i class="fas fa-chevron-up"></i> Submit</button></div>
    </div>
    </div>
</div>
@endsection