@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-top: 48px">
    <h1 class="h2">Edit Toko</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="{{ url('/admin/listtags/update/'.$id) }}" class="mb-5">

      @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Id</label>
          <input type="text" class="form-control" id="id" 
          name="id" required autofocus value="{{ $tag['id'] }}">
        </div>
        <div class="mb-3">
          <label for="tag" class="form-label">Tag</label>
          <input type="text" class="form-control" id="tag" 
          name="tag" required autofocus value="{{ $tag['tag'] }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
</div>
@endsection