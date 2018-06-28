<?php
	include "../library/koneksi.php";

	//Grade ID point P38 
	$P38C	= $_POST['P38C'];
	$P38T	= $_POST['P38T'];
	$P38B	= $_POST['P38B'];
	$P38R	= $_POST['P38R'];
	$P38L	= $_POST['P38L'];
	
	
	mysql_query("update odontogram set P38C='$P38C',
									   P38T='$P38T',
									   P38B='$P38B',
									   P38R='$P38R',
									   P38L='$P38L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>