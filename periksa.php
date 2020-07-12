<!DOCTYPE html>
<!DOCTYPE html>
<html>
<body>
	<form action="cek.php" method="post">
		<?php 
		$namadpn = $_POST['namadpn'];
 
		if($namadpn == ""){
			header("location:prakerja.php?nama=kosong");
		}else{
			echo "Nama depan anda adalah ". $nama;
		}?><br>
		<?php 
		$nama = $_POST['namablkg'];
 
		if($namablkg == ""){
			header("location:prakerja.php?nama=kosong");
		}else{
			echo "Nama belakang anda adalah ". $nama;
		}?><br>
		<?php 
		$email = $_POST['email'];
 
		if($email == ""){
			header("location:prakerja.php?email=kosong");
		}else{
			echo "email Anda adalah: ". $nama;
		}?><br>
		<?php 
		$wa = $_POST['wa'];
 
		if($wa == ""){
			header("location:prakerja.php?wa=kosong");
		}else{
			echo "No whatsapp anda adalah ". $nama;
		}?><br>
		
		<?php 
		$jk = $_POST['jk'];
 
		if($jk == ""){
			header("location:prakerja.php?jk=kosong");
		}else{
			echo "Pelatihan yang anda ingin daftar adalah ". $nama;
		}?><br>
		<?php 
		$jk = $_POST['a'];
 
		if($a == ""){
			header("location:prakerja.php?a=kosong");
		}else{
			echo "AApakah anda sudah berhasil mendaftar kertu prakerja ". $nama;
		}?><br>
		<?php 
		$jk = $_POST['b'];
 
		if($b == ""){
			header("location:prakerja.php?b=kosong");
		}else{
			echo "Apakah anda sudah berhasil mendaftar gelombang kartu prakerja dan mendapatkan saldo pelatihan? ". $nama;
		}?><br>


</html>