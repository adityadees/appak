<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  @include('layouts.css')
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="{{ route('home') }}">
            <i class="icon-grid"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid page-body-wrapper">
    <div class="row row-offcanvas row-offcanvas-right">
      @include('layouts.sidebar')

      <div class="content-wrapper">
        @yield('content')
      </div>
      @include('layouts.footer')
    </div>
  </div>
</div>
@include('layouts.js')
</body>
</html>
