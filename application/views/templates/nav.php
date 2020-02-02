 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU NAVIGASI</li>

          <li>
            <a href="<?= base_url('home/dashboard/')?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Front Office</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('home/tambah_pasien');?>"><i class="fa fa-circle-o"></i> Registrasi Rawat Inap</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Registrasi Rawat Jalan</a></li>
            <li><a href="<?= base_url('home/list_pasien')?>"><i class="fa fa-circle-o"></i>List Pasien</a></li>
            <li><a href="<?= base_url('home/index_keluar')?>"><i class="fa fa-circle-o"></i>List Pasien Keluar</a></li>
          </ul>
        </li>

        <li>
          <a href="<?= base_url('pemeriksaan/index/')?>">
            <i class="fa fa-users"></i> <span>Pemeriksaan</span>
          </a>
        </li>

         <li class="treeview">
          <a href="">
            <i class="fa fa-print"></i><span>Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('laporan/jumlah_pasien_rujuk')?>">Jumlah Pasien Rawat Inap Rujuk</a></li>
            <li><a href="<?= base_url('laporan/jumlah_pasien_rawat_inap')?>">Jumlah Pasien Rawat Inap</a></li>
            <li><a href="<?= base_url('laporan/jumlah_pasien_per_jenis_kelamin')?>">Jumlah Perjenis Kelamin</a></li>
            <!-- <li><a href="<?= base_url('laporan/')?>">10 Besar Penyakit Rawat Inap</a></li> -->
            <li><a href="<?= base_url('laporan/jumlah_pasien_per_ruangan')?>">Jumlah Pasien Per Ruangan</a></li>
            <li><a href="<?= base_url('laporan/jumlah_pasien_evakuasi')?>">Jumlah Pasien Evakuasi</a></li>
            <li><a href="<?= base_url('laporan/jumlah_pasien_per_usia')?>">Jumlah Pasien Per Usia</a></li>
            <li><a href="<?= base_url('laporan/jumlah_pasien_per_kloter')?>">Jumlah Pasien Per Kloter</a></li>
            <
          </ul>
        </li>

      

        <li>
          <a href="<?= base_url('login/keluar/')?>">
            <i class="fa fa-users"></i> <span>Keluar</span>
          </a>
        </li>

         
      </ul>
      </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">

              