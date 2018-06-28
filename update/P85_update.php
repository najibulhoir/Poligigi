<?php
	include "../library/koneksi.php";

	//Grade ID point P85 
	$P85C	= $_POST['P85C'];
	$P85T	= $_POST['P85T'];
	$P85B	= $_POST['P85B'];
	$P85R	= $_POST['P85R'];
	$P85L	= $_POST['P85L'];
	
	
	mysql_query("update odontogram set P85C='$P85C',
									   P85T='$P85T',
									   P85B='$P85B',
									   P85R='$P85R',
									   P85L='$P85L'
	where nama_pasien  = '$_POST[id]'");
	
	echo "<script>window.alert('Data berhasil disimpan')</script>";			 
	echo "<meta http-equiv='refresh' content='0; url=../index.php?halaman=odontogram&id=$_POST[id]'>";
?>