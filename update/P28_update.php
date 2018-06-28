<?php
	include "../library/koneksi.php";

	//Grade ID point P28 
	$P28C	= $_POST['P28C'];
	$P28T	= $_POST['P28T'];
	$P28B	= $_POST['P28B'];
	$P28R	= $_POST['P28R'];
	$P28L	= $_POST['P28L'];
	
	
	mysql_query("update odontogram set P28C='$P28C',
									   P28T='$P28T',
									   P28B='$P28B',
									   P28R='$P28R',
									   P28L='$P28L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>