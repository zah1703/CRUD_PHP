<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA MAHASISWA</title>
</head>
<body>
 
	<h2>EDIT DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from baru where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>NRP</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="NRP" value="<?php echo $d['NRP']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="Nama" value="<?php echo $d['Nama']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="Jenis_Kelamin" value="<?php echo $d['Jenis_Kelamin']; ?>"></td>
                </tr>
                <tr>
					<td>Jurusan</td>
					<td><input type="text" name="Jurusan" value="<?php echo $d['Jurusan']; ?>"></td>
				</tr>
				<tr>
					<td>Email Student</td>
					<td><input type="text" name="Email_Student" value="<?php echo $d['Email_Student']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td><input type="text" name="No_Hp" value="<?php echo $d['No_Hp']; ?>"></td>
				</tr>
				<tr>
					<td>Asal SMA</td>
					<td><input type="text" name="Asal_SMA" value="<?php echo $d['Asal_SMA']; ?>"></td>
				</tr>
				<tr>
					<td>Matkul Favorit</td>
					<td><input type="text" name="Matkul_Favorit" value="<?php echo $d['Matkul_Favorit']; ?>"></td>
				</tr>
				<tr>
                </tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
                <tr>
                		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>