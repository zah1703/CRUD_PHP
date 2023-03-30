<!DOCTYPE html>
<html>
<head>

	<title>DATA MAHASISWA KELAS 1 D3 IT A</title>
	<style>

		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: center; 
			padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}
		th {
			background-color: #84D2C5;
			color: #301E67;
		}
		body{
			background-color: #ECF9FF;
		}
		h2{
			text-align: center
		}

		a{
			display: inline-block;
			padding: 8px 16px;
			margin-top: 10px;
			background-color: #61876E;
			color: #E3F6FF;
			text-decoration: none;
			border-radius:5px;
			transition: background-color 0.3s;

		}

	</style>
</head>
<body>
		<h2>DATA MAHASISWA KELAS 1 D3 IT A</h2>
	<br/>
	<a href="tambah.php">+ INPUT DATA MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th>Email Student</th>
			<th>Alamat</th>
			<th>No Hp</th>
			<th>Asal SMA</th>
			<th>Matkul Favorit</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM `baru` WHERE 1");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NRP']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Jenis_Kelamin']; ?></td>
				<td><?php echo $d['Jurusan']; ?></td>
				<td><?php echo $d['Email_Student']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td><?php echo $d['No_Hp']; ?></td>
				<td><?php echo $d['Asal_SMA']; ?></td>
				<td><?php echo $d['Matkul_Favorit']; ?></td>
				<td>
				<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>









