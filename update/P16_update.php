<?php
	include "../library/koneksi.php";

	//Grade ID point P16 
	$P16C	= $_POST['P16C'];
	$P16T	= $_POST['P16T'];
	$P16B	= $_POST['P16B'];
	$P16R	= $_POST['P16R'];
	$P16L	= $_POST['P16L'];
	
	
	mysql_query("update odontogram set P16C='$P16C',
									   P16T='$P16T',
									   P16B='$P16B',
									   P16R='$P16R',
									   P16L='$P16L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>