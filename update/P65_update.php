<?php
	include "../library/koneksi.php";

	//Grade ID point P65 
	$P65C	= $_POST['P65C'];
	$P65T	= $_POST['P65T'];
	$P65B	= $_POST['P65B'];
	$P65R	= $_POST['P65R'];
	$P65L	= $_POST['P65L'];
	
	
	mysql_query("update odontogram set P65C='$P65C',
									   P65T='$P65T',
									   P65B='$P65B',
									   P65R='$P65R',
									   P65L='$P65L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>