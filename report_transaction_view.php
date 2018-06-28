<?php
error_reporting(0);
include "library/koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Transaksi</title>
<style type="text/css">
#logo {
 width: 300px;
 height: 200px;	
 float:left;
}
#judul {
 margin-left : 90px;
 width:900px;
 text-align:center;
}

</style>
</head>

<body>

<center>

	<?php
if($_POST['berdasar'] == "Semua Data"){
$sql="SELECT * FROM medis, pasien WHERE medis.pasien_nama=pasien.pasien_nama ORDER BY medis_id DESC";

$pasien_lama = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='lama'");
  $l = mysql_fetch_array($pasien_lama);
  
$pasien_baru = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='baru'");
  $b = mysql_fetch_array($pasien_baru); 

$cabut_tetap = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Tetap'");
  $ct = mysql_fetch_array($cabut_tetap); 

  $cabut_susu = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Susu'");
  $cs = mysql_fetch_array($cabut_susu);  
  
  $scalling = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Melakukan Scalling'");
  $sc = mysql_fetch_array($scalling);  
  
  $root = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Root Planning'");
  $ro = mysql_fetch_array($root);  

  $restorasi = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Restorasi'");
  $rs = mysql_fetch_array($restorasi);  
 
  $akar = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Perawatan Saluran Akar'");
  $ar = mysql_fetch_array($akar);  
 
  $jamur = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Pembersihan Jamur Pada Daerah yang Terserang'");
  $jr = mysql_fetch_array($jamur);  
  
  $anti = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Pemberian AntiBiotik'");
  $an = mysql_fetch_array($anti);  						
}
else if ($_POST['berdasar'] == "Tanggal"){
	//modus tanggal
	$sql = "SELECT * FROM medis, pasien WHERE medis.pasien_nama=pasien.pasien_nama AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]' ORDER BY medis_id DESC";						
	$pasien_lama = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='lama' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $l = mysql_fetch_array($pasien_lama);
  
$pasien_baru = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='baru' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $b = mysql_fetch_array($pasien_baru); 

$cabut_tetap = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Tetap' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ct = mysql_fetch_array($cabut_tetap); 

  $cabut_susu = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Susu' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $cs = mysql_fetch_array($cabut_susu);  
  
  $scalling = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Melakukan Scalling' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $sc = mysql_fetch_array($scalling);  
  
  $root = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Root Planning' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ro = mysql_fetch_array($root);  

  $restorasi = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Restorasi' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $rs = mysql_fetch_array($restorasi);  
 
  $akar = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Perawatan Saluran Akar' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ar = mysql_fetch_array($akar);  
 
  $jamur = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Pembersihan Jamur Pada Daerah yang Terserang' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $jr = mysql_fetch_array($jamur);  
  
  $anti = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Pemberian AntiBiotik' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $an = mysql_fetch_array($anti);  
	}
	else if($_POST['berdasar'] == "Pencarian Kata"){
	//modus berdasarkan kata
	$field = $_POST['field'];
	$kata = $_POST['kata'];
	
		if($_POST['field'] == "pasien_nama"){
				
	$sql="SELECT * FROM medis WHERE $field like '%$kata%' ORDER BY medis_id DESC";

$pasien_lama = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='lama' AND $field like '%$kata%'");
  $l = mysql_fetch_array($pasien_lama);
  
$pasien_baru = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='baru' AND $field like '%$kata%'");
  $b = mysql_fetch_array($pasien_baru); 

$cabut_tetap = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Tetap' AND $field like '%$kata%'");
  $ct = mysql_fetch_array($cabut_tetap); 

  $cabut_susu = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Susu' AND $field like '%$kata%'");
  $cs = mysql_fetch_array($cabut_susu);  
  
  $scalling = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Melakukan Scalling' AND $field like '%$kata%'");
  $sc = mysql_fetch_array($scalling);  
  
  $root = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Root Planning' AND $field like '%$kata%'");
  $ro = mysql_fetch_array($root);  

  $restorasi = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Restorasi' AND $field like '%$kata%'");
  $rs = mysql_fetch_array($restorasi);  
 
  $akar = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Perawatan Saluran Akar' AND $field like '%$kata%'");
  $ar = mysql_fetch_array($akar);  
 
  $jamur = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Pembersihan Jamur Pada Daerah yang Terserang' AND $field like '%$kata%'");
  $jr = mysql_fetch_array($jamur);  
  
  $anti = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Pemberian AntiBiotik' AND $field like '%$kata%'");
  $an = mysql_fetch_array($anti);		
			
			}
		else {
	$sql="SELECT * FROM medis, pasien WHERE medis.pasien_nama=pasien.pasien_nama AND $field like '%$kata%' ORDER BY medis_id DESC";	
	$pasien_lama = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='lama' AND $field like '%$kata%'");
  $l = mysql_fetch_array($pasien_lama);
  
$pasien_baru = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='baru' AND $field like '%$kata%'");
  $b = mysql_fetch_array($pasien_baru); 

$cabut_tetap = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Tetap' AND $field like '%$kata%'");
  $ct = mysql_fetch_array($cabut_tetap); 

  $cabut_susu = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Susu' AND $field like '%$kata%'");
  $cs = mysql_fetch_array($cabut_susu);  
  
  $scalling = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Melakukan Scalling' AND $field like '%$kata%'");
  $sc = mysql_fetch_array($scalling);  
  
  $root = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Root Planning' AND $field like '%$kata%'");
  $ro = mysql_fetch_array($root);  

  $restorasi = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Restorasi' AND $field like '%$kata%'");
  $rs = mysql_fetch_array($restorasi);  
 
  $akar = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Perawatan Saluran Akar' AND $field like '%$kata%'");
  $ar = mysql_fetch_array($akar);  
 
  $jamur = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Pembersihan Jamur Pada Daerah yang Terserang' AND $field like '%$kata%'");
  $jr = mysql_fetch_array($jamur);  
  
  $anti = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Pemberian AntiBiotik' AND $field like '%$kata%'");
  $an = mysql_fetch_array($anti);
	}
	
				
	}
$query = mysql_query($sql);
?></center>
<link href="css/style_print.css" rel="stylesheet" type="text/css" />	
    </head>
    <body>
           
<div id="judul">   
    <h2>LAPORAN KUNJUNGAN PASIEN</h2>
</div>
<div id="judulHalaman"><strong>Berdasarkan: <?php echo $_POST['berdasar'] ?></strong></div>
<?php
if ($_POST['berdasar'] == "Tanggal"){
?>             
<div id="judulHalaman"><strong><?php echo "Tangal Periode: tanggal ".$_POST['tgl_awal']." sampai dengan ".$_POST['tgl_akhir'];?></strong></div>
<?php
}
?>

<center>

<table border="1">
                <thead>
                    <tr>
                       
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
                    </tr>
                </thead>
                <tbody>
      <?php
 $i=1;
			  while ($row = mysql_fetch_array($query)){
		?>
  <tr>
    <td><?php echo "$row[medis_id]"; ?></td>
    <td><?php if ($row[kategoris]=='Lama'){echo "$row[pasien_nama]";} else{echo"-";} ?></td>
    <td><?php if ($row[kategoris]=='Baru'){echo "$row[pasien_nama]";} else{echo"-";} ?></td>
    <td><?php if ($row[tindakan]=='Cabut Gigit Tetap'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row[tindakan]=='Cabut Gigit Susu'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row[tindakan]=='Melakukan Scalling'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row[tindakan]=='Root Planning'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row[tindakan]=='Restorasi'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row[tindakan]=='Perawatan Saluran Akar'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row[tindakan]=='Pembersihan Jamur Pada Daerah yang Terserang'){echo "Ya";} else{echo"-";} ?></td>
    <td><?php if ($row[tindakan]=='Pemberian AntiBiotik'){echo "Ya";} else{echo"-";} ?></td>
  </tr>
  <?php } ?>
 <tr>
    <td style="color:#FFF; background-color:#333; border:none;" align="right" id="tabel_judul">Total :</td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$l[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$b[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$ct[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$cs[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$sc[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$ro[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$rs[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$ar[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$jr[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="center"><?php echo"$an[jml]"; ?></td>
  </tr>
</table>
     </tbody>
	 
	
            </table></center>
			
	
<table width='100%' border='0'>
  <tr>
  <th width='201' scope='col'></th>
  <th width='201' scope='col'></th>
  <th width='201' scope='col'>ADMIN</th>
  </tr>
<tr>
<th width='201' scope='col'></th><br/>
<th width='201' scope='col'></th><br/>
<th width='201' scope='col'></th><br/>
</tr>
<tr>
<th width='201' scope='col'></th>
<th width='201' scope='col'></th>
<th width='201' scope='col'></th>
</tr>  
   <tr>
    <th width='201' scope='col'></th>
  <th width='201' scope='col'></th>
    <th width='201' scope='col'>(..............................)</th>
    
    
  </tr>
  
</table>			
	
</body>

<br/>
<br/>
<br/>
<center>
<input type="submit" name="button" class="DTTT_button" value="Print" onclick="print()" /></center>

</html>

