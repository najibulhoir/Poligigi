<?php
	include "../library/koneksi.php";

	//Grade ID point P22 
	$P22C	= $_POST['P22C'];
	$P22T	= $_POST['P22T'];
	$P22B	= $_POST['P22B'];
	$P22R	= $_POST['P22R'];
	$P22L	= $_POST['P22L'];
	
	
	mysql_query("update odontogram set P22C='$P22C',
									   P22T='$P22T',
									   P22B='$P22B',
									   P22R='$P22R',
									   P22L='$P22L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>