<!DOCTYPE html>
<html>

<body bgcolor="red">


	<?php 
	if(isset($_GET['namadpn'])){
		if($_GET['namadpn'] == "kosong"){
			echo "<h4 style='color:red'>Nama depan Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['namablkg'])){
		if($_GET['namablkg'] == "kosong"){
			echo "<h4 style='color:red'>Nama belakang Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['email'])){
		if($_GET['email'] == "kosong"){
			echo "<h4 style='color:red'>email Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['wa'])){
		if($_GET['wa'] == "kosong"){
			echo "<h4 style='color:red'>no.wa Belum Di Masukkan !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['jk'])){
		if($_GET['jk'] == "kosong"){
			echo "<h4 style='color:red'>pelatihan belum anda pilih !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['a'])){
		if($_GET['a'] == "kosong"){
			echo "<h4 style='color:red'>anda belum memilih !</h4>";
		}
	}?>
	<?php 
	if(isset($_GET['b'])){
		if($_GET['b'] == "kosong"){
			echo "<h4 style='color:red'>anda belum memilih !</h4>";
		}
	}?>

	<form action="periksa.php" method="post">
		<table>
			<tr>
				<td>Nama Depan</td>
				<td><input type="text" name="namadpn"></td>				
			</tr>
			<tr>
				<td>Nama belakang</td>
				<td><input type="text" name="namablkg"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" id="email" name="Email"></td>
			</tr>
			<tr>
				<td>No. whatsapp</td>
				<td><input type="text" id="wa" name="wa"></td>
			</tr>	
			<tr>
				<td>Pelatihan apa yang anda ingin daftar?</td>
				<td><input type="radio" name="jk" value="1"/>Meraih penghasilan 10 juta pertama di instagram</td>
				<td><input type="radio" name="jk" value="2"/>Meraih penghasilan 10 juta pertama di tokopedia & shopee</td>
				<td><input type="radio" name="jk" value="3"/>Google Ads & Google Analytics</td>
				<td><input type="radio" name="jk" value="4"/>Basic facebook &instagram Ads</td>
				<td><input type="radio" name="jk" value="5"/>Basic seo untuk pemula</td>
				<td><input type="radio" name="jk" value="6"/>Digital marketing strategi</td>
				<td><input type="radio" name="jk" value="7"/>Pembuatan website E-comerce menggunakan worpress</td>
				<td><input type="radio" name="jk" value="8"/>memulai bisnis fotografi dari 0</td>
				<td><input type="radio" name="jk" value="9"/>Pembuatan CV & sukses berkarir</td>
				<td><input type="radio" name="jk" value="10"/>Sukses berkarir sebagai seles</td>
				<td><input type="radio" name="jk" value="11"/>Manajemen keuangan untuk profesional / pekerja kantoran </td>
				<td><input type="radio" name="jk" value="12"/>manajemen keuangan untuk pekerja informal / harian / driver online</td>
			</tr>
			<tr>
				<td>Apakah anda sudah berhasil mendaftar kertu prakerja?</td>
				<td><input type="radio" name="a" value="sudah"/>sudah</td>
				<td><input type="radio" name="a" value="belum"/>belum</td>
			</tr>
			<tr>
				<td>Apakah anda sudah berhasil mendaftar gelombang kartu prakerja dan mendapatkan saldo pelatihan?</td>
				<td><input type="radio" name="b" value="sudah"/>sudah</td>
				<td><input type="radio" name="b" value="belum"/>belum</td>
			</tr>
			<tr><td><input type="submit" value="Cek"></td></tr>					
		</table>
	</form>
 
</body>
</html>