@extends('user.layouts.main')

@section('container')
    <!-- Content -->
    <div class="about-content">
        <!-- About Image Header -->
        <div class="about-image-header">
            <div class="container">
                <div class="about-caption position-absolute my-3">
                    <nav class="nav-home">
                        <a href="/" class="a-home">
                            <span class="material-icons">arrow_back</span>
                        Home
                        </a>
                    </nav>
                    <div class="about-caption mt-md-3">
                        <h2><strong>Tentang Kami</strong></h2>
                    </div>
                </div>
            </div>
            <img src="/storage/menu/menu1.png" alt="" width="100%" height="300px">
        </div>

        <!-- Visi Section -->
        <div class="visi-section">
            <div class="container my-5">
                <div class="row row-cols-2 visi-row" style="align-items: center;">
                    <div class="col">
                        <img src="picture/restoran.jpg" alt="" width="100%">
                    </div>
                    <div class="col">
                        <h1><strong>Visi</strong></h1>
                        <p class="text-muted"><strong>Visi CrunchyDinner adalah menjadi restoran fastfood terbaik yang menyajikan menu menarik dengan harga yang gak bikin dompet kejepit</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Misi Section -->
        <div class="misi-section">
            <div class="container my-5">
                <div class="row row-cols-2 misi-row" style="flex-direction: row-reverse;">
                    <div class="col">
                        <img src="picture/restoran.jpg" style="transform:scaleX(-1)" alt="" width="100%">
                    </div>
                    <div class="col">
                        <h1><strong>Misi</strong></h1>
                        <ul>
                            <li class="text-muted"><strong>Misi CrunchyDinner adalah menjadi restoran fastfood terbaik yang menyajikan menu menarik dengan harga yang gak bikin dompet kejepit</strong></li>
                            <li class="text-muted"><strong>Misi CrunchyDinner adalah menjadi restoran fastfood terbaik yang menyajikan menu menarik dengan harga yang gak bikin dompet kejepit</strong></li>
                            <li class="text-muted"><strong>Misi CrunchyDinner adalah menjadi restoran fastfood terbaik yang menyajikan menu menarik dengan harga yang gak bikin dompet kejepit</strong></li>
                            <li class="text-muted"><strong>Misi CrunchyDinner adalah menjadi restoran fastfood terbaik yang menyajikan menu menarik dengan harga yang gak bikin dompet kejepit</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About Developer -->

        <!-- team section -->
        <section class = "padding-y team" id = "team">
        <div class = "container" style="text-align:center;">
          <!-- title -->
          <div class = "title">
            <h2 class="mb-0"><strong>Our Developer</strong></h2>
            <div class="straight-line d-flex my-4">
                <div class="line"></div>
                <span class="material-icons">savings</span>
                <div class="line"></div>
            </div>
          </div>
          <!-- end of title -->
          <div class = "team-row">
            <div class = "team-item">
              <div class = "team-img">
                <img src = "picture/erlangga.jpg" height="400px" alt = "">
                <div class = "team-info">
                  <h3>Erlangga AH</h3>
                  <p class = "text">CCIT FTUI STUDENT</p>
                  <ul class = "center my-0 p-0">
                    <li class = "center">
                      <a href = "https://www.linkedin.com/in/erlangga-adidarma-hartono-6740791b8/"><i class = "bi bi-linkedin"></i></a>
                    </li>
                    <li class = "center">
                      <a href = "http://www.twitter.com"><i class = "bi bi-twitter"></i></a>
                    </li>
                    <li class = "center">
                      <a href = "https://www.instagram.com/erlangga_ah/"><i class = "bi bi-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </section>
      <!-- end of team section -->

    </div>
@endsection