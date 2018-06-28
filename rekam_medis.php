<html>
<head>
<title>Untitled Document</title>

</head>

<body>
<div id="judulHalaman"><strong>Data Rekam Medis</strong></div>
<?php


	$warna1="#c0d3e2";
	$warna2="#cfdde7";
	$warna=$warna1;
?>
<?php echo "<a href=form_medis.php>"; ?>
<div id="tombolAdd">tambah data</div>
<?php echo "</a>"; ?>
   
<table cellpadding="0" cellspacing="1">
  <tr>
    <td id="namaField">No.RM</td>
    <td id="namaField">Tgl. Kunjungan </td>
    <td id="namaField">Nama Pasien</td>
    <td id="namaField">Nama Dokter</td>
    <td id="namaField">Diagnosa Dokter</td>
 	<td id="namaField">Penanganan</td>
 	<td id="namaField">Biaya</td>
 	<td id="namaField">Note</td>
    <td id="namaField">Odontogram</td>
    <td id="namaField">Action</td>
  </tr>
  <?php 
  		$pesan="SELECT * FROM medis ORDER BY inc DESC LIMIT 25";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
		if ($warna==$warna1){
				$warna=$warna2;
			}
			else{
				$warna=$warna1;
			}
	
		?>
  <tr bgcolor=<?php echo $warna; ?>>
    <td><?php echo "$row[medis_id]"; ?></td>
    <td><?php echo "$row[tgl_medis]"; ?></td>
    <td><a href="<?php echo"index.php?halaman=odontogram&id=$row[pasien_nama]"; ?>"><?php echo "$row[pasien_nama]"; ?></a></td>
    <td><?php echo "$row[dokter_nama]"; ?></td>
    <td><?php echo "$row[diagnosa]"; ?></td>
	<td><?php echo "$row[tindakan]"; ?></td>
	<td>Rp. <?php echo "$row[Biaya]"; ?></td>
	<td><?php echo "$row[Note]"; ?></td>
	<td><a id='tombol' href="<?php echo"index.php?halaman=odontogram&id=$row[pasien_nama]"; ?>">Tampilkan</a></td> 
	<td>  
	 <?php echo "<a href=proses.php?proses=medis_delete&id=$row[inc]>"; ?>
          	  <div id="tombol" onClick="return confirm('Apakah Anda akan menghapus data buah ini ?')">hapus</div>
			  <?php echo "</a>"; ?>
	</td>
  </tr>
  <?php } ?>
  
</table>
</body>
</html>