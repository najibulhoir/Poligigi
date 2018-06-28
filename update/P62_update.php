<?php
	include "../library/koneksi.php";

	//Grade ID point P62 
	$P62C	= $_POST['P62C'];
	$P62T	= $_POST['P62T'];
	$P62B	= $_POST['P62B'];
	$P62R	= $_POST['P62R'];
	$P62L	= $_POST['P62L'];
	
	
	mysql_query("update odontogram set P62C='$P62C',
									   P62T='$P62T',
									   P62B='$P62B',
									   P62R='$P62R',
									   P62L='$P62L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>