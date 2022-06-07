<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container">
        <a class="navbar-brand {{ ($active === "index") ? 'active' : '' }}" id="comp-name" href="/">CrunchyDinner</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link {{ ($active === "menu") ? 'active' : '' }}" aria-current="page" href="/menu">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "store") ? 'active' : '' }}" href="/store">Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#kritik">Kritik&Saran</a>
            </li> --}}
        </ul>
        <span class="nav-item"><a class="nav-link p-0 {{ ($active === "feedback") ? 'active' : '' }}" href="/feedback">
            <span class="material-icons" style="font-size: 13px">markunread_mailbox</span>
            Kritik&Saran</a></span>
        
        @auth
        <span class="dropdown nav-link" style="margin-left: 30px" style="color: rgba(255,255,255,.55)">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="color: rgba(255,255,255,.55)">
                <i class="bi bi-people"></i> Welcome, {{ auth()->user()->name }}
            </a>
          
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="/admin">My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                  <form action="/logout" method="post">
                        @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                  </form>
            </ul>
        </span>
        @endauth
    </div>
</nav>