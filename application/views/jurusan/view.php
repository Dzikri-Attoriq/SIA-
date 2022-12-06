<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('template/header');
$this->load->view('template/menu');

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Jurusan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('jurusan'); ?>">jurusan</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div class="row">
      		<div class="col-12">
      			<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Jurusan</h3>
                <br>
                <a href="<?= base_url('jurusan/tambah'); ?>" class="btn btn-success btn-sm">Tambah</a>
                <a href="<?= base_url('jurusan/print'); ?>" class="btn btn-warning btn-sm">Print</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Jurusan</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>

                  <tbody>
                  	<?php $no=1; ?>
                  	<?php foreach($query as $rows) : ?>
                  		<tr>
                  			<td><?= $no; ?></td>
	                  		<td><?= $rows['kd_jurusan']; ?></td>
	                  		<td><?= $rows['jurusan']; ?></td>
	                  		<td>
	                  			<a href="<?= base_url('jurusan/edit/').$rows['kd_jurusan']; ?>" class="btn btn-primary btn-sm">Edit</a> | 
	                  			<a href="<?= base_url('jurusan/hapus/').$rows['kd_jurusan']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda benar-benar ingin menghapus data ini?')">Hapus</a>
	                  		</td>
                  		</tr>
              		<?php $no++; ?>
                  	<?php endforeach; ?>
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
      		</div>
      	</div>
    </div>
  </section>
</div>


<?php  
$this->load->view('template/footer');

?>	