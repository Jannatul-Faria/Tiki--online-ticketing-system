<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#location" aria-expanded="false" aria-controls="location">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">Location</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="location">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('location-list')}}"> Location List </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('location-add')}}"> Location Add </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#trip" aria-expanded="false" aria-controls="trip">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">Trip</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="trip">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('trip-list')}}"> Trip List </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#seat" aria-expanded="false" aria-controls="seat">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">Seat</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="seat">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('seat-list')}}"> Seat List </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('seat-add') }}"> Seat Add </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> User List </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> User Add </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> User Rejected </a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>