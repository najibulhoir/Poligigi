<?php
	include "../library/koneksi.php";

	//Grade ID point P15 
	$P15C	= $_POST['P15C'];
	$P15T	= $_POST['P15T'];
	$P15B	= $_POST['P15B'];
	$P15R	= $_POST['P15R'];
	$P15L	= $_POST['P15L'];
	
	
	mysql_query("update odontogram set P15C='$P15C',
									   P15T='$P15T',
									   P15B='$P15B',
									   P15R='$P15R',
									   P15L='$P15L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>