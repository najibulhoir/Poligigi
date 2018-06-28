<?php
include_once "library/koneksi.php";
include_once "library/fungsi_standar.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h2> LAPORAN  KUNJUNGAN PASIEN GIGI </h2>
<table width="600" border="0" cellspacing="1" cellpadding="4" class="table-print">
  <tr>
    <td>nama petugas </td>
    <td>:</td>
    <td valign="top"><?php echo $nama; ?></td>
  </tr>
  <tr>
    <td width="268"><b>Tgl. Kunjungan Periode </b></td>
    <td width="10"><b>:</b></td>
    <td width="294" valign="top"><?php echo $tglawal; ?> s/d <?php echo $tglakhir; ?></td>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td> <img src="../images/kembali.gif" height="20" onClick="javascript:history.go(-1)" /></td>
  </tr>
</table>
<tr>
    <td id="namaField">No.RM</td>
    <td id="namaField">Pasien Lama</td>
    <td id="namaField">Pasien Baru</td>
	<td id="namaField">Pencabutan Gigi Permanen</td>
	<td id="namaField">Pencabutan Gigi Susu</td>
    
  </tr>
  <?php 
  		$total_piutang=0;
  		$pesan="SELECT * FROM medis, pasien WHERE medis.pasien_nama=pasien.pasien_nama AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]' ORDER BY medis_id DESC";
		
		$query=mysql_query($pesan);
		
		while($row=mysql_fetch_array($query)){
 $pasien_lama = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='lama' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $l = mysql_fetch_array($pasien_lama);
  
$pasien_baru = mysql_query("select count(medis.pasien_nama) as jml from medis WHERE kategoris='baru' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $b = mysql_fetch_array($pasien_baru); 

$cabut_tetap = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Tetap' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $ct = mysql_fetch_array($cabut_tetap); 

  $cabut_susu = mysql_query("select count(medis.tindakan) as jml from medis WHERE tindakan='Cabut Gigit Susu' AND tgl_medis BETWEEN '$_POST[tgl_awal]' AND '$_POST[tgl_akhir]'");
  $cs = mysql_fetch_array($cabut_susu);  
		?>
  <tr bgcolor=<?php echo $warna; ?>>
   
    <td><?php echo "$row[medis_id]"; ?></td>
    <td><?php if ($row[kategoris]=='Lama'){echo "$row[pasien_nama]";} else{echo"-";} ?></td>
    <td><?php if ($row[kategoris]=='Baru'){echo "$row[pasien_nama]";} else{echo"-";} ?></td>
	<td><?php if ($row[tindakan]=='Cabut Gigit Tetap'){echo "Ya";} else{echo"Tidak";} ?></td>
	<td><?php if ($row[tindakan]=='Cabut Gigit Susu'){echo "Ya";} else{echo"Tidak";} ?></td>    
  </tr>
  
  
  <?php } ?>
   <tr>
    <td style="color:#FFF; background-color:#333; border:none;" align="right" id="tabel_judul">Total :</td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo"$l[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo"$b[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo"$ct[jml]"; ?></td>
    <td style="color:#FFF; background-color:#333; border:none;" align="right"><?php echo"$cs[jml]"; ?></td>
    
  </tr>
</body>
</html>
