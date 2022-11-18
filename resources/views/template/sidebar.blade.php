    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard')}}" class="brand-link">
      <img src="{{ asset('style/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('style/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Rekap Data dan Grafik Keluaran Informasi</li>
          <li class="nav-item">
            <a href="{{ route('lihatData') }}" class="nav-link">
              <i class="nav-icon fa-solid fa-table-list"></i>
              <p>
                Data Penjualan Keseluruhan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pilihTanggalMotor') }}" class="nav-link">
            <i class="nav-icon fa-solid fa-motorcycle"></i>
              <p>
                Data Sepeda Motor Terjual
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pilihTanggalSales') }}" class="nav-link">
              <i class="nav-icon fa-solid fa-person"></i>
              <p>
                Data Sales Performance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pilihTanggalPembayaran') }}" class="nav-link">
              <i class="nav-icon fa-solid fa-coins"></i>
              <p>
                Data Moda Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pilihTanggalFinance') }}" class="nav-link">
              <i class="nav-icon fa-solid fa-building"></i>
              <p>
                Data Jumlah Perusahaan Financing
              </p>
            </a>
          </li>
          <li class="nav-header">Unggah Data</li>
          <li class="nav-item">
            <a href="{{ route('addDataExcel') }}" class="nav-link">
              <i class="nav-icon fa-solid fa-plus"></i>
              <p>
                Unggah Data Penjualan
              </p>
            </a>
          </li>
          <li class="nav-header"> Tentang </li>
          <li class="nav-item menu-open">
            <a href="{{ route('tentang') }}" class="nav-link active">
              <i class="nav-icon fa-solid fa-align-justify"></i>
              <p>
                Tentang Situs Ini
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  <!--/aside -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
