<?php defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url('template/adminlte/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <h1>Sistem Informasi Akademik</h1>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('template/adminlte/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('template/adminlte/'); ?>dist/img/user3-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('home'); ?>" class="nav-link">
              <i class="nav-icon fas fa-house-user"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('profil'); ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Jurusan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Jurusan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Mahasiswa'); ?>" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Mahasiswa
              </p>
            </a>
          </li>
          <?php if( $this->session->userdata('level') =="Admin" ) : ?>
          <li class="nav-item">
            <a href="<?= base_url('Pengguna'); ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
        <?php endif; ?>
          <li class="nav-item">
            <a href="<?= base_url('login/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log-out
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>