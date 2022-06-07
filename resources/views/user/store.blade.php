@extends('user.layouts.main')

@section('container')
    <div class="container my-4">
        <nav class="nav-home">
            <a href="/" class="a-home">
                <span class="material-icons">arrow_back</span>
            Home
            </a>
        </nav>
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-4" id="lokasi-toko">
            
            @foreach ($toko as $tokos)
            <div class="col">
            <div class="card h-100">
                <img src="https://source.unsplash.com/random?{{ $tokos->provinsi }} }}" height="170px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $tokos->provinsi }}</h5>
                    <p class="card-text"><h6 class="text-muted">{{ $tokos->alamat }}</h6></p>
                </div>
            </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection