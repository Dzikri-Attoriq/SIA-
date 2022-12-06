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
	<h1 class="text-center">Data Jurusan</h1>

	<table border="" cellpadding="3" class="table table-bordered">
		
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Jurusan</th>
				<th>Jurusan</th>
			</tr>
		</thead>

		<tbody>
			<?php $no=1; ?>
			<?php foreach($query as $rows) : ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $rows["kd_jurusan"]; ?></td>
				<td><?= $rows["jurusan"]; ?></td>
			</tr>			
			<?php $no++; ?>
			<?php endforeach; ?>
		</tbody>

	</table>
	
<?php  
$this->load->view('template/footer_print');

?>	