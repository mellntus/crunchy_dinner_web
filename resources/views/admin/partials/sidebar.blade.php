<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse p-0" style="margin-top: 48px">
    <div class="pt-3" id="sidebar-collapse">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">
            <span data-feather="home"></span>
            <i class="bi bi-arrow-left"></i> Back to Website
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" aria-current="page" href="/admin">
            <span data-feather="home"></span>
            Menu Dashboard
          </a>
        </li>
      </ul>
      
      <div class="post-section">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center 
        px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/listmenu*') ? 'active' : '' }}" href="/admin/listmenu">
              <span data-feather="grid"></span>
              List Menu
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/listtags*') ? 'active' : '' }}" href="/admin/listtags">
              <span data-feather="grid"></span>
              List Tags
            </a>
          </li>
        </ul>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/listtoko*') ? 'active' : '' }}" href="/admin/listtoko">
              <span data-feather="grid"></span>
              List Store
            </a>
          </li>
        </ul>
      
      </div>

      <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="nav-link px-3 bg-light border-0" style="margin-top: auto" id="btn-logout">
          Logout <span data-feather="log-out"></span></button>
      </form>

    </div>
  </nav>