<?php
	include "../library/koneksi.php";

	//Grade ID point P36 
	$P36C	= $_POST['P36C'];
	$P36T	= $_POST['P36T'];
	$P36B	= $_POST['P36B'];
	$P36R	= $_POST['P36R'];
	$P36L	= $_POST['P36L'];
	
	
	mysql_query("update odontogram set P36C='$P36C',
									   P36T='$P36T',
									   P36B='$P36B',
									   P36R='$P36R',
									   P36L='$P36L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>