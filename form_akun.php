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
<div id="judulHalaman"><strong>Form tambah akun</strong></div>
<form id="form1" name="form1" method="post" action="proses.php">
<input name="proses" type="hidden" value="akun_insert" />
<table border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td>username</td>
    <td>:</td>
    <td><label>
      <input type="text" name="username" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>password</td>
    <td>:</td>
    <td><label>
      <input type="text" name="password" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>nama</td>
    <td>:</td>
    <td><label>
      <input type="text" name="nama" id="input" />
    </label></td>
  </tr>
  <tr>
    <td>level</td>
    <td>:</td>
    <td><label>
      <select name="level" id="input">
        <option>admin</option>
        <option>user</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="simpan" id="tombol" value="simpan" />
      <input type="reset" name="batal" id="tombol" value="batal" />
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