<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="style/data.css" type="text/css">
<style type="text/css">
td
{
	padding:0px 25px;
	border:1px solid BLACK;
}
body {
	color:#315567;
	background-color:#99CCFF;
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
<div id="judulHalaman"><strong><?php echo "Data rekam_medis: tanggal ".$_POST['tgl_awal']." sampai dengan ".$_POST['tgl_akhir'];?></strong></div>
<?php
	$warna1="#c0d3e2";
	$warna2="#cfdde7";
	$warna=$warna1;
?>
<?php echo "<a href=index.php?halaman=rekam_medis>"; ?><div id="tombolAdd">kembali</div><?php echo "</a>"; ?>
<table cellpadding="0" cellspacing="1">
  <tr>
    <td width="48" id="namaField">No.RM</td>
    <td width="128" id="namaField">Tgl Kunjungan </td>
    <td width="103" id="namaField">Nama Pasien </td>
	<td width="186" id="namaField">Diagnosa</td>
  <td width="186" id="namaField">dokter</td>
  <td width="186" id="namaField">odontogram</td>
  
  </tr>
  <?php 
  

  		$pesan="SELECT * FROM medis, pasien WHERE medis.pasien_nama=pasien.pasien_nama AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]' ORDER BY medis_id DESC";
		
		$query=mysql_query($pesan);
				while($row=mysql_fetch_array($query)){
		
		$pasien = mysql_query("SELECT count(medis.pasien_nama) as jml from medis WHERE tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
		$l = mysql_fetch_array($pasien);
  
	
		?>
 
  <tr bgcolor=<?php echo $warna; ?>>
   
    <td><?php echo $row['medis_id']; ?></td>
	<td><?php echo $row['tgl_medis']; ?></td>
    <td><a href="<?php echo"index.php?halaman=odontogram&id=$row[pasien_nama]"; ?>"><?php echo $row['pasien_nama']; ?></a></td>
	<td><?php echo $row['diagnosa']; ?></td>    
  <td><?php echo $row['dokter_nama']; ?></td>
  <td><a id='tombol' href="<?php echo"index.php?halaman=lapodon&id=$row[pasien_nama]"; ?>">Tampilkan</a></td> 
  </tr>
  
  
  <?php } 
		$pasien = mysql_query("SELECT count(medis.pasien_nama) as jml from medis WHERE tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
		$l = mysql_fetch_array($pasien);
  ?>
   <tr>
    <td colspan="2" style="color:#FFF; background-color:#333; border:none;" align="center" id="tabel_judul">Total Pasien :</td>
    <td  colspan="4" style="color:#FFF; background-color:#333; border:none;" align="Center"><?php echo $l['jml']. " orang"; ?></td>
   
    
  </tr>
</table>
</body>
</html>