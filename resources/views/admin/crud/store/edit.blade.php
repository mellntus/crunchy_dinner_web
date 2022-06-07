@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-top: 48px">
    <h1 class="h2">Edit Toko</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="{{ url('/admin/listtoko/update/'. $toko->id) }}" class="mb-5">

      @csrf
        <div class="mb-3">
          <label for="provinsi" class="form-label">Provinsi</label>
          <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" 
          name="provinsi" required autofocus value="{{ old('provinsi', $toko->provinsi) }}">
          @error('provinsi')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" 
          name="alamat" required autofocus value="{{ old('alamat', $toko->alamat) }}">
          @error('alamat')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
</div>
@endsection