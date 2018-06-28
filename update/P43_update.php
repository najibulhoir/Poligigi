<?php
	include "../library/koneksi.php";

	//Grade ID point P43 
	$P43C	= $_POST['P43C'];
	$P43T	= $_POST['P43T'];
	$P43B	= $_POST['P43B'];
	$P43R	= $_POST['P43R'];
	$P43L	= $_POST['P43L'];
	
	
	mysql_query("update odontogram set P43C='$P43C',
									   P43T='$P43T',
									   P43B='$P43B',
									   P43R='$P43R',
									   P43L='$P43L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>