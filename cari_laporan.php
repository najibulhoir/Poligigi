<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="style/data.css" type="text/css">
<style type="text/css">
td
{
	padding:2px 2px;
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
    <td width="10" id="namaField">No.RM</td>
    <td width="156" id="namaField">Pasien Lama</td>
    <td width="169" id="namaField">Pasien Baru</td>
    <td width="179" id="namaField">Pencabutan Gigi Permanen</td>
    <td width="151" id="namaField">Pencabutan Gigi Susu</td>
    <td width="69" id="namaField">Scalling</td>
    <td width="76" id="namaField">Root Planning</td>
    <td width="83" id="namaField">Restorasi</td>
    <td width="98" id="namaField">Perawatan Saluran Akar</td>
    <td width="117" id="namaField">Pembersihan Jamur</td>
    <td width="104" id="namaField">Pemberian AntiBiotik</td>
  </tr>
  <?php 
  		$total_piutang=0;
  		$pesan="SELECT * FROM medis, pasien WHERE medis.pasien_nama=pasien.pasien_nama AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]' ORDER BY medis_id DESC";
		
		$query=mysql_query($pesan);
		
		while($row=mysql_fetch_array($query)){
 $pasien_lama = mysql_query("SELECT count(medis.pasien_nama) as jml from medis WHERE kategoris='lama' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $l = mysql_fetch_array($pasien_lama);
  
$pasien_baru = mysql_query("SELECT count(medis.pasien_nama) as jml from medis WHERE kategoris='baru' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $b = mysql_fetch_array($pasien_baru); 

$cabut_tetap = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Tetap' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ct = mysql_fetch_array($cabut_tetap); 

  $cabut_susu = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Susu' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $cs = mysql_fetch_array($cabut_susu);  
  
  $scalling = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Melakukan Scalling' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $sc = mysql_fetch_array($scalling);  
  
  $root = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Root Planning' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ro = mysql_fetch_array($root);  

  $restorasi = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Restorasi' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $rs = mysql_fetch_array($restorasi);  
 
  $akar = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Perawatan Saluran Akar' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ar = mysql_fetch_array($akar);  
 
  $jamur = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Pembersihan Jamur Pada Daerah yang Terserang' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $jr = mysql_fetch_array($jamur);  
  
  $anti = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Pemberian AntiBiotik' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $an = mysql_fetch_array($anti);  
  

  
		?>
  <tr bgcolor=<?php echo $warna; ?>>
    <td><?php echo $row['medis_id']; ?></td>
    <td><?php if ($row['kategoris']=='Lama'){echo $row['pasien_nama'];} else{echo"-";} ?></td>
    <td><?php if ($row['kategoris']=='Baru'){echo $row['pasien_nama'];} else{echo"-";} ?></td>
    <td><?php if ($row['tindakan']=='Cabut Gigit Tetap'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row['tindakan']=='Cabut Gigit Susu'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row['tindakan']=='Melakukan Scalling'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row['tindakan']=='Root Planning'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row['tindakan']=='Restorasi'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row['tindakan']=='Perawatan Saluran Akar'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row['tindakan']=='Pembersihan Jamur Pada Daerah yang Terserang'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row['tindakan']=='Pemberian AntiBiotik'){echo "Ya";} else{echo"-";} ?></td>
  </tr>
  <?php } 

 $pasien_lama = mysql_query("SELECT count(medis.pasien_nama) as jml from medis WHERE kategoris='lama' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $l = mysql_fetch_array($pasien_lama);
  
$pasien_baru = mysql_query("SELECT count(medis.pasien_nama) as jml from medis WHERE kategoris='baru' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $b = mysql_fetch_array($pasien_baru); 

$cabut_tetap = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Tetap' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ct = mysql_fetch_array($cabut_tetap); 

  $cabut_susu = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Susu' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $cs = mysql_fetch_array($cabut_susu);  
  
  $scalling = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Melakukan Scalling' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $sc = mysql_fetch_array($scalling);  
  
  $root = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Root Planning' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ro = mysql_fetch_array($root);  

  $restorasi = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Restorasi' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $rs = mysql_fetch_array($restorasi);  
 
  $akar = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Perawatan Saluran Akar' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ar = mysql_fetch_array($akar);  
 
  $jamur = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Pembersihan Jamur Pada Daerah yang Terserang' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $jr = mysql_fetch_array($jamur);  
  
  $anti = mysql_query("SELECT count(medis.tindakan) as jml from medis WHERE tindakan='Pemberian AntiBiotik' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $an = mysql_fetch_array($anti);  
  ?>
  <tr>
    <td style="color:#FFF; background-color:#333; border:none;" align="right" id="tabel_judul">Total :</td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $l['jml']; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $b['jml']; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $ct['jml']; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $cs['jml']; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $sc['jml']; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $ro['jml']; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $rs['jml']; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $ar['jml']; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $jr['jml']; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo $an['jml']; ?></td>

  </tr>
</table>
<p><a href="laporankun.php?tgla=<? echo $tglAwal;?>&tglb=<? echo $tglAkhir;?>"></a></p>
</body>
</html>