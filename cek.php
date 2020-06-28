<!DOCTYPE html>
<!DOCTYPE html>
<html>
<body>
	<form action="cek.php" method="post">
		<?php 
		$nama = $_POST['nama'];
 
		if($nama == ""){
			header("location:index.php?nama=kosong");
		}else{
			echo "Nama anda adalah ". $nama;
		}?><br>
		<?php 
		$ttl = $_POST['ttl'];
 
		if($ttl == ""){
			header("location:index.php?ttl=kosong");
		}else{
			echo "tempat tanggal lahir di: ". $ttl;
		}?><br>
		<?php 
		$almt = $_POST['almt'];
 
		if($almt == ""){
			header("location:index.php?almt=kosong");
		}else{
			echo "Alamat anda adalah ". $nama;
		}?><br>
		<?php 
		$tlp = $_POST['tlp'];
 
		if($tlp == ""){
			header("location:index.php?tlp=kosong");
		}else{
			echo "Telepon anda adalah ". $nama;
		}?><br>
		<?php 
		$jk = $_POST['jk'];
 
		if($jk == ""){
			header("location:index.php?jk=kosong");
		}else{
			echo "Jenis kelamin anda adalah ". $nama;
		}?><br>
		<?php 
		$jk = $_POST['agama'];
 
		if($agama == ""){
			header("location:index.php?agama=kosong");
		}else{
			echo "Agama anda adalah ". $nama;
		}?><br>
		<?php 
		$jk = $_POST['prts'];
 
		if($prts == ""){
			header("location:index.php?prts=kosong");
		}else{
			echo "Prestasi anda adalah ". $nama;
		}?><br>


</html>