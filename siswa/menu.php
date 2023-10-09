<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open">
      <a href="index.php" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-header">AKUN</li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
          Akun Anda
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=detail_akun" class="nav-link">
            <i class="fas fa-angle-right nav-icon"></i>
              <p>Detail Akun</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user-edit"></i>
        <p>
          Kelola Akun
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=edit_profil" class="nav-link">
            <i class="fas fa-angle-right nav-icon"></i>
              <p>Edit Profil</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-header">NILAI</li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-list"></i>
        <p>
          Lihat Nilai
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=data_nilai" class="nav-link">
            <i class="fas fa-angle-right nav-icon"></i>
              <p>Nilaiku</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-header">AKADEMIK</li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-calendar-alt"></i>
        <p>
          Jadwal Pelajaran
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=data_jadwal" class="nav-link">
            <i class="fas fa-angle-right nav-icon"></i>
              <p>Lihat Jadwal</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-header">DONE</li>
    <li class="nav-item has-treeview">
      <a href="../logout.php" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt" aria-hidden="true"></i>
        <p>
          Sign Out
        </p>
      </a>
    </li>

  </ul>
</nav>
