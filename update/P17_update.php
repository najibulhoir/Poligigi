<?php
	include "../library/koneksi.php";

	//Grade ID point P17 
	$P17C	= $_POST['P17C'];
	$P17T	= $_POST['P17T'];
	$P17B	= $_POST['P17B'];
	$P17R	= $_POST['P17R'];
	$P17L	= $_POST['P17L'];
	
	
	mysql_query("update odontogram set P17C='$P17C',
									   P17T='$P17T',
									   P17B='$P17B',
									   P17R='$P17R',
									   P17L='$P17L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>