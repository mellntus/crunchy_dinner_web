@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-top: 48px">
    <h1 class="h2">Add Tag</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/admin/listtags" class="mb-5">

      @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Id</label>
          <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" 
          name="id" required autofocus>
          @error('id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="tag" class="form-label">Tag</label>
          <input type="text" class="form-control @error('tag') is-invalid @enderror" id="tag" 
          name="tag" required autofocus>
          @error('tag')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button type="submit" name="add" class="btn btn-primary">Save</button>
      </form>
</div>
@endsection