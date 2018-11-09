<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="{{asset('backend/images/faces/face10.jpg')}}" alt="image"/>
          <span class="online-status online"></span> 
        </div>
        <div class="profile-name">
          <p class="name">
            Marina Michel
          </p>
          <p class="designation">
            Super Admin
          </p>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="icon-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="fa fa-cubes menu-icon"></i>
        <span class="menu-title">Produk</span>
      </a>
    </li>


    <li class="nav-item d-none d-lg-block">
      <a class="nav-link" data-toggle="collapse" href="#kode-akun" aria-expanded="false" aria-controls="kode-akun">
        <i class="icon-layers menu-icon"></i>
        <span class="menu-title">Kode Akun</span>
        <span class="badge badge-warning">3</span>
      </a>
      <div class="collapse" id="kode-akun">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('kelompoks')}}">Kelompok</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('gols')}}">Golongan</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('subgols')}}">Sub-Golongan</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('akuns')}}">Akun</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item d-none d-lg-block">
      <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
        <i class="icon-people menu-icon"></i>
        <span class="menu-title">User</span>
        <span class="badge badge-primary">2</span>
      </a>
      <div class="collapse" id="user">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('customers') }}">Customer</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('suppliers') }}">Supplier</a></li>
        </ul>
      </div>
    </li>


    <li class="nav-item d-none d-lg-block">
      <a class="nav-link" data-toggle="collapse" href="#transaksi" aria-expanded="false" aria-controls="transaksi">
        <i class="fa fa-exchange menu-icon"></i>
        <span class="menu-title">Transaksi</span>
        <span class="badge badge-danger">3</span>
      </a>
      <div class="collapse" id="transaksi">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Pembelian</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Penjualan</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Jurnal Umum</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item d-none d-lg-block">
      <a class="nav-link" data-toggle="collapse" href="#laporan" aria-expanded="false" aria-controls="laporan">
        <i class="icon-printer menu-icon"></i>
        <span class="menu-title">Laporan</span>
        <span class="badge badge-success">2</span>
      </a>
      <div class="collapse" id="laporan">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> 
            <a class="nav-link" data-toggle="collapse" href="" data-target=".produkex">Produk<span class="badge badge-info">3</span></a>
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Penjualan</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Pembelian</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Stock</a></li>
            </ul>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" data-toggle="collapse" href=""  data-target=".akuntanex">Akuntan<span class="badge badge-dark">5</span></a>
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Jurnal</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Buku Besar</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Neraca Saldo</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Laba Rugi</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Neraca</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </li>

  </ul>
</nav>



