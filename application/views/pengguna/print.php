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
	<h1 class="text-center">Data Pengguna</h1>

	<table border="1" cellpadding="4" class="table table-bordered">
		
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Level</th>
			</tr>
		</thead>

		<tbody>
			<?php $no=1; ?>
			<?php foreach($query as $rows) : ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $rows["username"]; ?></td>
					<td><?= $rows["nama"]; ?></td>
					<td><?= $rows["jenisKelamin"]; ?></td>
					<td><?= $rows["level"]; ?></td>
				</tr>
			<?php $no++; ?>
			<?php endforeach; ?>
		</tbody>

	</table>
	
<?php  
$this->load->view('template/footer_print');

?>	