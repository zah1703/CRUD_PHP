<!DOCTYPE html>
<html>
<head>

	<title>DATA MAHASISWA</title>
	<style>
		.container {
			margin: auto;
			width: 50%;
			padding: 10px;
			border: 1px solid #ccc;
			background-color: #BFDCE5;
			border-radius: 5px;
		}

		.input-group {
			margin-bottom: 10px;
		}

		.input-group label {
			display: inline-block;
			width: 150px;
			font-weight: bold;
		}

		.input-group input {
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 3px;
			width: 100%;
			box-sizing: border-box;
		}

		.btn-submit {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}

	</style>

	
</head>
<body>

<div class="container">
		<form method="post" action="tambah_aksi.php">
 
	<h2>INPUT DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>INPUT DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>NRP</td>
				<td><input type="text" name="NRP"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
				
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>	
				<input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin">Laki-Laki
            	<input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin">Perempuan </td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><select name="Jurusan">
				<option value="-">- Pilih Jurusan -
                    <option value="Teknik Komputer">Teknik Komputer
                    <option value="Teknik Informatika">Teknik Informatika
                    <option value="Teknik Elektro">Teknik Elektro
                    <option value="Teknik Elektro Industri">Teknik Elektro Industri
                    <option value="Teknik Rekayasa Multimedia">Teknik Rekayasa Multimedia
			</select></td>
			</tr>
            <tr>
                <td>Email Student</td>
				<td><input type="text" name="Email_Student"></td>
			</tr>
			<tr>
                <td>Alamat</td>
				<td><input type="text" name="Alamat"></td>
			</tr>
			<tr>
                <td>No Hp</td>
				<td><input type="text" name="No_Hp"></td>
			</tr>
			<tr>
                <td>Asal SMA</td>
				<td><input type="text" name="Asal_SMA"></td>
			</tr>
			<tr>
                <td>Matkul Favorit</td>
				<td><input type="text" name="Matkul_Favorit"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>