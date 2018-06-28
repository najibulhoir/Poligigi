<?php
	include "../library/koneksi.php";

	//Grade ID point P84 
	$P84C	= $_POST['P84C'];
	$P84T	= $_POST['P84T'];
	$P84B	= $_POST['P84B'];
	$P84R	= $_POST['P84R'];
	$P84L	= $_POST['P84L'];
	
	
	mysql_query("update odontogram set P84C='$P84C',
									   P84T='$P84T',
									   P84B='$P84B',
									   P84R='$P84R',
									   P84L='$P84L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>