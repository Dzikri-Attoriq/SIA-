<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('template/header_print');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?></title>
</head>
<body>
	<h1 class="text-center">Data Mahasiswa</h1>

	<table border="1" cellpadding="3" class="table table-bordered">
		
		<thead>
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Agama</th>
				<th>Alamat</th>
				<th>Jurusan</th>
			</tr>
		</thead>

		<tbody>
			<?php $no=1; ?>
			<?php foreach($query as $rows) : ?>
			<tr>
				<td><?= $no; ?></td>
				<td><img src="<?= base_url('assets/').$rows["foto"]; ?>" alt="" width="100" height="100"></td>
				<td><?= $rows["nim"]; ?></td>
				<td><?= $rows["nama"]; ?></td>
				<td><?= $rows["jenisKelamin"]; ?></td>
				<td><?= $rows["tempatLahir"]; ?></td>
				<td><?= $rows["tanggalLahir"]; ?></td>
				<td><?= $rows["agama"]; ?></td>
				<td><?= $rows["alamat"]; ?></td>
				<td><?= $rows["kd_jurusan"]; ?></td>
			</tr>			
			<?php $no++; ?>
			<?php endforeach; ?>
		</tbody>

	</table>
	
<?php  
$this->load->view('template/footer_print');

?>	