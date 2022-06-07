@extends('admin.layouts.main')

@section('container')
<div class="menu-content" style="margin-top: 76px">

    <div class="menu-list my-5">
        <!-- Paket -->
        <div class="menu-paket my-md-5 my-5" style="text-align:center;">
            <div class="container">
                <h2 class="mb-0"><strong>Paket Hemat</strong></h2>
                <div class="menu-paket-list" id="menu-paket-list">
                    <div class="menu-row">
                        @if (is_array($menu) || is_object($menu))
                            @foreach ($menu as $menus)
                                @foreach ($menus['tag'] as $tag)
                                    @if ($tag === 'Paket Hemat')
                                        <div class = 'menu-item'>
                                            <div class = 'menu-img'>
                                            <img src='/storage/{{ $menus['picture'] }}' height='250px' alt='{{ $menus['nama'] }}'>
                                                <div class = 'menu-info'>
                                                    <h3>{{ $menus['nama'] }}</h3>
                                                    <p class ='text px-3' style='font-size: x-small;'>{{ $menus['detail'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Burger -->
        <div class="menu-burger my-md-5 my-5 " style="text-align:center;">
            <div class="container ">
                <h2 class="mb-0"><strong>Burger</strong></h2>
                <div class="menu-burger-list" id="menu-burger-list">
                    <div class="menu-row">
                        @if (is_array($menu) || is_object($menu))
                            @foreach ($menu as $menus)
                                @foreach ($menus['tag'] as $tag)
                                    @if ($tag === 'Burger')
                                        <div class = 'menu-item'>
                                            <div class = 'menu-img'>
                                            <img src='/storage/{{ $menus['picture'] }}' height='250px' alt='{{ $menus['nama'] }}'>
                                                <div class = 'menu-info'>
                                                    <h3>{{ $menus['nama'] }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Ayam -->
        <div class="menu-ayam my-md-5 my-5" style="text-align:center;">
            <div class="container">
                <h2 class="mb-0"><strong>Ayam</strong></h2>
                <div class="menu-ayam-list" id="menu-ayam-list">
                    <div class="menu-row">
                        @if (is_array($menu) || is_object($menu))
                            @foreach ($menu as $menus)
                                @foreach ($menus['tag'] as $tag)
                                    @if ($tag === 'Ayam')
                                        <div class = 'menu-item'>
                                            <div class = 'menu-img'>
                                            <img src='/storage/{{ $menus['picture'] }}' height='250px' alt='{{ $menus['nama'] }}'>
                                                <div class = 'menu-info'>
                                                    <h3>{{ $menus['nama'] }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Minuman -->
        <div class="menu-minuman my-md-5 my-5" style="text-align:center;">
            <div class="container">
                <h2 class="mb-0"><strong>Minuman</strong></h2>
                <div class="menu-minuman-list" id="menu-minuman-list">
                    <div class="menu-row">
                        @if (is_array($menu) || is_object($menu))
                            @foreach ($menu as $menus)
                                @foreach ($menus['tag'] as $tag)
                                    @if ($tag === 'Minuman')
                                        <div class = 'menu-item'>
                                            <div class = 'menu-img'>
                                            <img src='/storage/{{ $menus['picture'] }}' height='250px' alt='{{ $menus['nama'] }}'>
                                                <div class = 'menu-info'>
                                                    <h3>{{ $menus['nama'] }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Cemilan -->
        <div class="menu-snack my-md-5 my-5" style="text-align:center;">
            <div class="container">
                <h2 class="mb-0"><strong>Snacks</strong></h2>
                <div class="menu-snack-list" id="menu-snack-list">
                    <div class="menu-row">
                        @if (is_array($menu) || is_object($menu))
                            @foreach ($menu as $menus)
                                @foreach ($menus['tag'] as $tag)
                                    @if ($tag === 'Snack')
                                        <div class = 'menu-item'>
                                            <div class = 'menu-img'>
                                                <img src='/storage/{{ $menus['picture'] }}' height='250px' alt='{{ $menus['nama'] }}'>
                                                <div class = 'menu-info'>
                                                    <h3>{{ $menus['nama'] }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>
@endsection