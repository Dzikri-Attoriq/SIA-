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
            <h1 class="m-0">Profil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('Profil'); ?>">Profil</a></li>
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
                <h3 class="card-title">Edit Profil</h3>
              </div>
              <!-- /.card-header -->
               <form action="<?= base_url('Profil'); ?>" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="username" class="col-sm-1">Username</label>
                    <div class="col-sm-4">
	                    <input type="text" class="form-control" id="username" placeholder="" name="username" readonly value="<?= $query["username"]; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-sm-1">password</label>
                    <div class="col-sm-4">
	                    <input type="password" class="form-control" id="password" placeholder="" name="password">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama" class="col-sm-1">Nama</label>
                    <div class="col-sm-4">
	                    <input type="text" class="form-control" id="nama" placeholder="" name="nama" required value="<?= $query["nama"]; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jenisKelamin" class="col-sm-1">Jenis Kelamin</label>
                    <div class="col-sm-4">
	                    <div class="form-check">
                        <input type="radio" name="jenisKelamin" id="Laki-Laki" value="Laki-Laki" class="form-check-input" <?php if($query["jenisKelamin"] =="Laki-Laki") {echo "checked";} ?>> 
                        <label for="Laki-Laki" class="form-check-label">Laki-Laki</label>
                      </div>
                      <div class="form-check">
                        <input type="radio" name="jenisKelamin" id="Perempuan" value="Perempuan" class="form-check-input" <?php if($query["jenisKelamin"] =="Perempuan") {echo "checked";} ?>> 
                        <label for="Perempuan" class="form-check-label">Perempuan</label>
                      </div>
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