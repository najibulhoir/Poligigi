<?php

require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";
if (!isset($_POST['proses']))
	{
		$qtmpil_pel="select * from pasien order by inc asc";
	}
	elseif (isset($_POST['proses']) and ($_POST['tcari']==""))
	{
		$qtmpil_pel="select * from pasien order by inc asc";
	}
	else
	{
		$qtmpil_pel="SELECT * FROM pasien WHERE pasien_nama LIKE '%$_POST[tcari]%'";	
	}
?>

<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/development-bundle/themes/ui-lightness/jquery.ui.all.css">
	<script src="JQuery-UI-1.8.17.custom/development-bundle/jquery-1.7.1.js"></script>
	<script src="JQuery-UI-1.8.17.custom/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="JQuery-UI-1.8.17.custom/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="JQuery-UI-1.8.17.custom/development-bundle/ui/jquery.ui.datepicker.js"></script>
    <script src="JQuery-UI-1.8.17.custom/development-bundle/ui/i18n/jquery.ui.datepicker-id.js"></script>
	<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/development-bundle/demos/demos.css">
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	$(function() {
		$( "#datepicker1" ).datepicker();
	});
	</script>
<style type="text/css">
td
{
	padding:5px 9px;
	border:1px solid #c0d3e2;
}
body {
	color:#315567;
	background-color:#e9e9e9;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;
}
#datepicker{
	padding:3px 5px;
	margin:0px 3px;
	border:1px solid #c0d3e2;
	border-radius:3px;
}
#datepicker1{
	padding:3px 5px;
	margin:0px 3px;
	border:1px solid #c0d3e2;
	border-radius:3px;
}
</style>
</head>
<body>
<div id="judulHalaman"><strong>Data pasien</strong></div>
<form id="form1" name="form1" method="post" action="index.php?halaman=data_pasien">
<input name="proses" type="hidden" value="form1" />
<table border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td>Cari pasien</td>
  </tr>
  <tr>
    <td><input name="tcari" id="input" type="text" size="25" />
    <input name="bcari" id="tombol" type="submit" value="cari" /></td>
  </tr>
</table>
</form>
<?php
	$warna1="#c0d3e2";
	$warna2="#cfdde7";
	$warna=$warna1;
?> 
      <table cellspacing="1" cellpadding="0">
        <tr>
          <td id="namaField">Kode Pasien</td>
          <td id="namaField">Nama</td>
          <td id="namaField">Alamat</td>
          <td id="namaField">Usia</td>
          <td id="namaField">Pekerjaanl</td>
		            <td colspan="2" id="namaField">
          <?php echo "<a href=index.php?halaman=form_data_master&kode=pasien_insert>"; ?>
            <div id="tombol">tambah data</div>
          <?php echo "</a>"; ?>  
          </td>
        </tr>
        <?php 
		$qp_pel=mysql_query($qtmpil_pel);
		
		while($row3=mysql_fetch_array($qp_pel)){
			if ($warna==$warna1){
				$warna=$warna2;
			}
			else{
				$warna=$warna1;
			}
		?>
        <tr bgcolor=<?php echo $warna; ?>>
		 <td><a href="<?php echo"index.php?halaman=odontogram&id=$row3[pasien_nama]"; ?>"><?php echo "$row3[pasien_id]"; ?></a></td>
          <td><?php echo "$row3[pasien_nama]"; ?></td>
          <td><?php echo "$row3[pasien_alamat]"; ?></td>
          <td><?php echo "$row3[usia]"; ?></td>
          <td><?php echo "$row3[pekerjaan]"; ?></td>
		  <td><?php echo "<a href=index.php?halaman=form_ubah_data&kode=pasien_update&id=$row3[pasien_id]>"; ?>
          	  <div id="tombol">ubah</div>
			  <?php echo "</a>";?>
          </td>
          <td><?php echo "<a href=proses.php?proses=pasien_delete&id=$row3[pasien_id]>"; ?>
          	  <div id="tombol" onClick="return confirm('Apakah Anda akan menghapus data buah ini ?')">hapus</div>
			  <?php echo "</a>"; ?>
          </td>
        </tr>
        <?php } ?>
      </table>
</body>
</html>