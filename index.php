<!DOCTYPE html>
<html>

<body>
	<?php 
	if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['ttl'])){
		if($_GET['ttl'] == "kosong"){
			echo "<h4 style='color:red'>Tempat tanggal Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['almt'])){
		if($_GET['almt'] == "kosong"){
			echo "<h4 style='color:red'>Alamat Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['tlp'])){
		if($_GET['tlp'] == "kosong"){
			echo "<h4 style='color:red'>Telepon Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['jk'])){
		if($_GET['jk'] == "kosong"){
			echo "<h4 style='color:red'>jenis kelamin Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['agama'])){
		if($_GET['agama'] == "kosong"){
			echo "<h4 style='color:red'>Agama Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['prts'])){
		if($_GET['prts'] == "kosong"){
			echo "<h4 style='color:red'>Prestasi Belum Di Masukkan !</h4>";
		}
	}?>

	<form action="cek.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>				
			</tr>
			<tr>
				<td>tempat tanggal lahir</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" id="almt" name="almt"></td>
			</tr>
			<tr>
				<td>Nomor telepon</td>
				<td><input type="text" id="tlp" name="tlp"></td>
			</tr>	
			<tr>
				<td>jenis kelamin</td>
				<td><input type="radio" name="jk" value="pria"/>Pria</td>
				<td><input type="radio" name="jk" value="perempuan"/>perempuan</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><select id="agama" name="agama">
	  			<option value="islam">Islam</option>
	  			<option value="kristen protestan">Kristen protestan</option>
	  			<option value="katolik">Katolik</option>
 	 			<option value="hindu">Hindu</option>
 	 			<option value="buddha">Buddha</option>
 	 			<option value="kong hu cu">Kong hu cu</option>
				</select></td>
			</tr>
			<tr>
				<td>prestasi</td>
				<td><input type="textarea" id="prts" name="prts"></td>
			</tr>
			<tr><td><input type="submit" value="Cek"></td></tr>					
		</table>
	</form>
 
</body>
</html>
