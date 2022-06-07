@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-top: 48px">
    <h1 class="h2">Add Toko</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/admin/listmenu" class="mb-5" enctype="multipart/form-data">

      @csrf
        {{-- ID --}}
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

        {{-- NAMA --}}
        <div class="mb-3">
          <label for="nama" class="form-label">Product Name</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" 
          name="nama" required autofocus>
          @error('nama')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        {{-- PRICE --}}
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control @error('price') is-invalprice @enderror" price="price" 
          name="price" required autofocus>
          @error('price')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        {{-- DETAIL --}}
        <div class="mb-3">
          <label for="detail" class="form-label">Detail</label>
          <input type="text" class="form-control @error('detail') is-invalid @enderror" id="detail" 
          name="detail" required autofocus>
          @error('detail')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        {{-- TAG --}}
        <div class="mb-3">
          <label for="tag" class="form-label">Tag</label>
            <div class="d-flex flex-wrap">
                @foreach ($tag as $index => $obj)
                    <div class="tag-list border border-success p-2 mx-1 mb-1 rounded" height="30px">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $obj['tag'] }}" id="flexCheckDefault" name="tag[]">
                            <label class="form-check-label" for="flexCheckDefault">
                            {{ $obj['tag'] }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- FAVORIT --}}
        <div class="mb-3">
          <label for="favorit" class="form-label">Favorit</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="favorit" id="exampleRadios1" value="true" checked>
            <label class="form-check-label" for="exampleRadios1">
              True
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="favorit" id="exampleRadios2" value="false">
            <label class="form-check-label" for="exampleRadios2">
              False
            </label>
          </div>
        </div>

        {{-- IMAGE --}}
        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <img class="image-preview img-fluid mb-3">
          <input class="form-control @error('image') is-invalid @enderror" type="file"
          id="image" name="image" onchange="previewImage()" required>
          @error('image')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <button type="submit" name="add" class="btn btn-primary">Save</button>
      </form>

      <script>
        // Image Preview Handler
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.image-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        };
      </script>
</div>
@endsection