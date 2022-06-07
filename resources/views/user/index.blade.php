@extends('user.layouts.main')

@section('container')

<!-- Image Header -->
<div class="image-header">
    <div class="picture-bg">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" id="home1">
                <a href="/menu"><img class="d-block" width="100%" height="400px" alt="..."></a>
              </div>
              <div class="carousel-item" id="home2">
                <a href="/menu"><img class="d-block" width="100%" height="400px" alt="..."></a>
              </div>
              <div class="carousel-item" id="home3">
                <a href="/menu"><img class="d-block" width="100%" height="400px" alt="..."></a>
              </div>
            </div>
          </div>
    </div>
          
</div>
    
<div class="container my-3">

    <!-- Video Commercial -->
    <div class="row row-cols-1 row-cols-md-2 g-4 " id="content-head">
      <div class="col">
        <p><strong>Video Commercial</strong></p>
        <div class="card border-0 card-img-top ">
          <iframe height="320" src="https://www.youtube.com/embed/hOTptszJDKQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col">
        <p><strong>Video Commercial</strong></p>
        <div class="card border-0 card-img-top ">
          <iframe height="320" src="https://www.youtube.com/embed/hOTptszJDKQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <!-- Menu Favorit List -->
    <div class="menu-list my-3" id="menu-home" style="text-align: end;">
      <div class = "title">
        <p><strong>Menu Favorit</strong></p>
        <div class="straight-line d-flex my-4">
          <div class="line"></div>
          <span class="material-icons">restaurant</span>
          <div class="line"></div>
        </div>
      </div>
        <div class="menu-favorit-list" id="menu-favorit-list">
          <div class="menu-fav-row">
            @if (is_array($menu) || is_object($menu))
              @foreach (array_slice($menu, 0, 9) as $menus)

                @if ($menus['favorit'] === 'true')
                  <div class = 'menu-fav-item'>
                    <div class = 'menu-fav-img'>
                      <img src='/storage/{{ $menus['picture'] }}' height='250px' alt='{{ $menus['nama'] }}'>
                      <div class = 'menu-fav-info'>
                        <h3>{{ $menus['nama'] }}</h3>

                        @foreach ($menus['tag'] as $tag)
                          @if (str_contains($tag, 'Paket'))
                            <p class ='text px-3' style='font-size: x-small;'>{{ $menus['detail'] }}</p>
                          @endif
                        @endforeach

                      </div>
                    </div>
                  </div>
                @endif

              @endforeach
            @endif
          </div>
          
          <button type="button" class="btn btn-outline-danger" id="btn-menu">Lihat Semua Menu</button>
        <script>
          btn_Menu = document.getElementById("btn-menu");

          btn_Menu.addEventListener("click", function(){
            window.location.href = "/menu";
          })
        </script>
      </div>
    </div>

    <!-- Store -->
    <div class="store-list py-3" id="toko">
        <p id="toko-title"><strong>Lokasi Toko Kami</strong></p>
        <div class="straight-line d-flex my-4">
          <div class="line"></div>
          <span class="material-icons">storefront</span>
          <div class="line"></div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-4" id="lokasi-toko">
          
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
        <button type="button" class="btn btn-outline-danger" id="btn-toko">Lihat Semua Toko</button>
        <script>
          btn_Menu = document.getElementById("btn-toko");

          btn_Menu.addEventListener("click", function(){
            window.location.href = "/store";
          })
        </script>
    </div>
</div>

@endsection