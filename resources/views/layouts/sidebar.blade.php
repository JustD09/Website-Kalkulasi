<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main Panel</li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard')}}">
        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Data Merchant</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
        <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
        <span class="menu-title">Merchant</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('merchant')}}">Penambahan Merchant</a></li>          
          <li class="nav-item"> <a class="nav-link" href="{{ route('promo')}}">Promo Merchant</a></li>          
        </ul>
      </div>
    </li>
    <li class="nav-item nav-category">Tools</li>
    <li class="nav-item">
      <li class="nav-item sidebar-user-actions">
      <div class="sidebar-user-menu">
        <a href="{{ route('logout') }}" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
          <span class="menu-title">Log Out</span></a>
      </div>
    </li>
    </li>
    
  </ul>
</nav>