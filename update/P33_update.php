<?php
	include "../library/koneksi.php";

	//Grade ID point P33 
	$P33C	= $_POST['P33C'];
	$P33T	= $_POST['P33T'];
	$P33B	= $_POST['P33B'];
	$P33R	= $_POST['P33R'];
	$P33L	= $_POST['P33L'];
	
	
	mysql_query("update odontogram set P33C='$P33C',
									   P33T='$P33T',
									   P33B='$P33B',
									   P33R='$P33R',
									   P33L='$P33L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>