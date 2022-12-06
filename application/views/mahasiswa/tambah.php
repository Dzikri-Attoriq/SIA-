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
            <h1 class="m-0">Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('Mahasiswa'); ?>">Mahasiswa</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('Mahasiswa/tambah'); ?>">Tambah</a></li>
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
                <h3 class="card-title">Tambah Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
               <form action="<?= base_url('Mahasiswa/tambah'); ?>" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nim" class="col-sm-1">NIM</label>
                    <div class="col-sm-4">
	                    <input type="text" class="form-control" id="nim" placeholder="" name="nim" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="nama" class="col-sm-1">Nama</label>
                    <div class="col-sm-4">
	                    <input type="text" class="form-control" id="nama" placeholder="" name="nama" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="jenisKelamin" class="col-sm-1">Jenis Kelamin</label>
                    <div class="col-sm-4">
	                    <div class="form-check">
                        <input type="radio" name="jenisKelamin" id="Laki-Laki" value="Laki-Laki" class="form-check-input"> 
                        <label for="Laki-Laki" class="form-check-label">Laki-Laki</label>
                      </div>
                      <div class="form-check">
                        <input type="radio" name="jenisKelamin" id="Perempuan" value="Perempuan" class="form-check-input"> 
                        <label for="Perempuan" class="form-check-label">Perempuan</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tempatLahir" class="col-sm-1">Tempat Lahir</label>
                    <div class="col-sm-4">
	                    <input type="text" class="form-control" id="tempatLahir" placeholder="" name="tempatLahir" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggalLahir" class="col-sm-1">Tanggal Lahir</label>
                    <div class="col-sm-2">
	                    <input type="date" class="form-control" id="tanggalLahir" placeholder="" name="tanggalLahir" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="agama" class="col-sm-1">Agama</label>
                    <div class="col-sm-2">
	                    <select name="agama" id="agama" class="form-control">
                        <?php foreach ( $agama as $a ) : ?>
                          <option value="<?= $a['kd_agama']; ?>"><?= $a['agama']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat" class="col-sm-1">Alamat</label>
                    <div class="col-sm-4">
	                    <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="foto" class="col-sm-1">Foto</label>
                    <div class="col-sm-4">
	                    <input type="file" class="form-control-file" id="foto" placeholder="" name="foto" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="kd_jurusan" class="col-sm-1">Jurusan</label>
                    <div class="col-sm-4">
	                    <select name="kd_jurusan" id="kd_jurusan" class="form-control">
                        <?php foreach ( $jurusan as $j ) : ?>
                          <option value="<?= $j['kd_jurusan']; ?>"><?= $j['jurusan']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" value="submit">Tambah</button>
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