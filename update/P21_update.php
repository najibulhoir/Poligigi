<?php
	include "../library/koneksi.php";

	//Grade ID point P21 
	$P21C	= $_POST['P21C'];
	$P21T	= $_POST['P21T'];
	$P21B	= $_POST['P21B'];
	$P21R	= $_POST['P21R'];
	$P21L	= $_POST['P21L'];
	
	
	mysql_query("update odontogram set P21C='$P21C',
									   P21T='$P21T',
									   P21B='$P21B',
									   P21R='$P21R',
									   P21L='$P21L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>