<?php
	include "../library/koneksi.php";

	//Grade ID point P81 
	$P81C	= $_POST['P81C'];
	$P81T	= $_POST['P81T'];
	$P81B	= $_POST['P81B'];
	$P81R	= $_POST['P81R'];
	$P81L	= $_POST['P81L'];
	
	
	mysql_query("update odontogram set P81C='$P81C',
									   P81T='$P81T',
									   P81B='$P81B',
									   P81R='$P81R',
									   P81L='$P81L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>