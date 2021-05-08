<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="#" class="nav-link">
        <ion-icon class="mr-2" name="apps"></ion-icon>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
      <ion-icon class="mr-2" name="cube"></ion-icon>
        <p>
          Produk
          <ion-icon class="mr-2" name="chevron-back"></ion-icon>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('produk.index') }}" class="nav-link">
          <ion-icon class="mr-2" name="add-circle"></ion-icon>
            <p>Produk</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('kategori.index') }}" class="nav-link">
          <ion-icon class="mr-2" name="add-circle"></ion-icon>
            <p>Kategori</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
      <ion-icon class="mr-2" name="receipt"></ion-icon>
        <p>
          Transaksi
          <ion-icon class="mr-2" name="chevron-back"></ion-icon>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('transaksi.index') }}" class="nav-link">
              <ion-icon class="mr-2" name="folder"></ion-icon>
              <p>Data Transaksi</p>
            </a>
          </li>
        </ul>
      </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
          <ion-icon class="mr-2" name="folder"></ion-icon>
        <p>
          Data
          <ion-icon class="mr-2" name="chevron-back"></ion-icon>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('customer.index') }}" class="nav-link">
            <ion-icon class="mr-2" name="people"></ion-icon>
            <p>Customer</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="{{ URL::to('admin/laporan') }}" class="nav-link">
        <ion-icon class="mr-2" name="reader"></ion-icon>
          <p>
            Laporan
            <ion-icon class="mr-2" name="chevron-back"></ion-icon>
          </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
          <ion-icon class="mr-2" name="cash"></ion-icon>
            <p>Penjualan</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="{{ URL::to('admin/profil') }}" class="nav-link">
      <ion-icon class="mr-2" name="settings"></ion-icon>
        <p>
          Profil
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <ion-icon class="mr-2" name="log-out"></ion-icon>
        <p>
          Sign Out
        </p>
      </a>
    </li>
  </ul>
</nav>
