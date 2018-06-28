<?php
if ($_SESSION['level'] == "admin")
	{
?>
<html>
<head>
<title>Untitled Document</title>
<style type="text/css">
td
{
	padding:5px 9px;
	border:none;
}
</style>
</head>

<body>
<?php
	$warna="SELECT * FROM kategori WHERE id_kategori='$_GET[id]'";
	$qwarna=mysql_query($warna);
	$dwarna=mysql_fetch_array($qwarna);
?>
<div id="judulHalaman"><strong>Form ubah warna</strong></div>
<form id="form1" name="form1" method="post" action="proses.php">
<input name="proses" type="hidden" value="ubah_warna" />
<table border="0" cellspacing="1" cellpadding="0">
<input type="hidden" name="id" value="<?php echo $dwarna['id_kategori']; ?>" />
  
  <tr>
    <td>Kategori</td>
    <td>:</td>
    <td><label>
      <input type="text" name="nama" id="input" value="<?php echo $dwarna['nama_kategori']; ?>" />
    </label></td>
  </tr>
  <tr>
    <td>Warna</td>
    <td>:</td>
    <td><label>
      <input type="text" name="warna" id="input" value="<?php echo $dwarna['warna']; ?>" />
    </label></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="simpan" id="tombol" value="simpan" />
     
    </td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
	}
	else
	{
		echo "anda tidak berhak meng-akses halaman ini !";
	}
?>