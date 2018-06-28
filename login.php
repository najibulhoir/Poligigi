<?php
session_start();
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

$username = md5($_POST["username"]);
$password = md5($_POST["password"]);
$query = "SELECT * FROM account WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

if (($username == $data['username'])and($password == $data['password']))
{

	
	$_SESSION['level'] = $data['level'];
	$_SESSION['username'] = $data['username'];
	$_SESSION['nama'] = $data['nama'];
	
	// tampilkan menu
	lompat_ke("index.php");

}
else
{
	lompat_ke("form_login.php");
}

?>