<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style type="text/css">
		table.td.label{
			text-align: right;
		}
	</style>
</head>
<body>

	<form method="GET" action="form.php">

		<h1>Form</h1>
		
		<table>
			<tr>
				<td>
					<label>Nama Lengkap : </label>
				</td>
				<td>
					<input type="text" name="nama" placeholder="Nama Lengkap">
				</td>
			</tr>
			<tr>
				<td>
					<label>Mata Kuliah : </label>
				</td>
				<td>
					<select name="matkul">
						<option value="ddp">Dasar - Dasar Pemrograman</option>
						<option value="db">Basis Data I</option>
						<option value="web">Pemrograman Web</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label>Nilai UTS : </label>
				</td>
				<td>
					<input type="text" name="nilai_uts" placeholder="Nilai UTS">
				</td>
			</tr>
			<tr>
				<td>
					<label>Nilai UAS : </label>
				</td>
				<td>
					<input type="text" name="nilai_uas" placeholder="Nilai UAS">
				</td>
			</tr>
			<tr>
				<td>
					<label>Nilai Tugas : </label>
				</td>
				<td>
					<input type="text" name="nilai_tugas" placeholder="Nilai Tugas">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit">Submit</button>
				</td>
			</tr>
		</table>
	</form>

	<?php 

		// Method GET
		$proses = $_GET['proses'];
		$nama_siswa = $_GET['nama'];
		$mata_kuliah = $GET['matkul'];
		$uts = $_GET['nilai_uts'];
		$uas = $_GET['nilai_uas'];
		$tugas = $_GET['nilai_tugas'];

		echo '<br><br><br><br>';
		echo 'Nama siswa : ' . $nama_siswa;
		echo '<br>Mata Kuliah : ' . $mata_kuliah;
		echo '<br>Nilai UTS : ' . $uts;
		echo '<br>Nilai UAS : ' . $uas;
		echo '<br>NIlai tugas : ' . $tugas;

	 ?>

</body>
</html>