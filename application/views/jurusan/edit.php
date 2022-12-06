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
              <li class="breadcrumb-item"><a href="<?= base_url('jurusan/edit'); ?>">Edit</a></li>
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
      			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Jurusan</h3>
              </div>
              <!-- /.card-header -->
               <form action="<?= base_url('jurusan/edit/').$query['kd_jurusan']; ?>" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kd_jurusan" class="col-sm-1">Kode Jurusan</label>
                    <div class="col-sm-1">
	                    <input type="text" class="form-control" id="kd_jurusan" placeholder="" name="kd_jurusan" value="<?= $query['kd_jurusan']; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jurusan" class="col-sm-1">Jurusan</label>
                    <div class="col-sm-3">
	                    <input type="text" class="form-control" id="jurusan" placeholder="" name="jurusan" value="<?= $query['jurusan']; ?>" required>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" value="submit">Edit</button>
                </div>
              </form>
      		</div>
      	</div>
    </div>
  </section>
</div>


	
<?php  
$this->load->view('template/footer');

?>	