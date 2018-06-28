<?php

session_start();
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

$hal=$_GET['halaman'];
	if (empty($hal)){
			$hal="data_pasien";
			header("Location: index.php?halaman=data_pasien");
	}

if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
?>
<html>
<head>
<title>Aplikasi Rekam Medis</title>
<link rel="stylesheet" href="style/style_index.css" type="text/css"  />
<style type="text/css">
/*link a*/
a
{
	text-decoration:none;
	color:#09F;
}
a:hover
{
	color:#9C0;
}
/*akhir link a*/
/*judul halaman*/
#judulHalaman
{
	color:#333;
	font-size:18px;
	background-color:#CCC;
	border:1px solid #999;
	padding:7px 14px;
	margin:7px 9px;
	border-radius:5px;
}
/*akhir judul halaman*/
/*style form*/
#input
{
	padding:3px 5px;
	margin:0px 3px;
	border:1px solid #c0d3e2;
	border-radius:3px;
}
#tombol
{
	color:#FFF;
	padding:3px 5px;
	background-color:#09C;
	border:1px solid #069;
	border-radius:3px;
}
#tombol:hover
{
	background-color:#9C0;
	border:1px solid #990;
}

#erupsi
{
	color:#FFF;
	padding:3px 5px;
	background-color:#09C;
	border:0px solid #069;
	border-radius:3px;
}
#erupsi:hover
{
	background-color:#9C0;
	border:0px solid #990;
}

#pink
{
	color:#FFF;
	padding:3px 5px;
	background-color:#FF99CC;
	border:0px solid #069;
	border-radius:3px;
}
#pink:hover
{
	background-color:#9C0;
	border:0px solid #990;
}

#hijau
{
	color:#FFF;
	padding:3px 5px;
	background-color:#66CC00;
	border:0px solid #069;
	border-radius:3px;
}
#hijau:hover
{
	background-color:#9C0;
	border:0px solid #990;
}

#merah
{
	color:#FFF;
	padding:3px 5px;
	background-color:#FF0033;
	border:0px solid #069;
	border-radius:3px;
}
#merah:hover
{
	background-color:#9C0;
	border:0px solid #990;
}

#ungu
{
	color:#FFF;
	padding:3px 5px;
	background-color:#660066;
	border:0px solid #069;
	border-radius:3px;
}
#ungu:hover
{
	background-color:#660066;
	border:0px solid #660066;
}

#gold
{
	color:#FFF;
	padding:3px 5px;
	background-color:#FFCC66;
	border:0px solid #069;
	border-radius:3px;
}
#gold:hover
{
	background-color:#FFFFFF;
	border:0px solid #660066;
}

#putih
{
	color:#FFF;
	padding:3px 5px;
	background-color:#FFFFFF;
	border:0px solid #069;
	border-radius:3px;
}
#putih:hover
{
	background-color:#FFCC66;
	border:0px solid #660066;
}
#tombolAdd
{
	color:#FFF;
	margin:7px 9px;
	width:90px;
	padding:5px 7px;
	background-color:#09C;
	border:1px solid #069;
	border-radius:3px;
}
#tombolAdd:hover
{
	background-color:#9C0;
	border:1px solid #990;
}
/*akhir style form*/
/*style tabel*/
table
{
	margin:5px 9px;
}
td
{
	padding:5px 9px;
	border:1px solid #c0d3e2;
}
#namaField{
	color:#FFF;
	background-color:#333;
	text-align:center;
	padding-top:7px;
	border:none;
}
/*akhir style tabel*/
</style>
</head>

<body>
<div id="page">  
  <div class="header"><center>
    <img width="200px" src="style/LogoImg.png" /><img src="style/Judul.png" />
    <div id="box">
	<div id="tgl"><?php echo tanggal();?></div>
	<div id="akun"><?php echo $_SESSION['nama']; ?></div>
   </div>
  </div>
  <div id="menu-bg">
  <div id="menu">
<?php  
// cek level user apakah admin atau bukan
if ($_SESSION['level'] == "admin")
{ 
	echo 
	"<ul id=main>
	   
	  <li><a href=index.php?halaman=data_pasien>PASIEN</a></li>
	  <li><a href=index.php?halaman=data_dokter>DOKTER</a></li>
      <li><a href=index.php?halaman=rekam_medis>REKAM MEDIS</a></li>
	  <li><a href=index.php?halaman=data_warna>Kategori Gigi</a></li> 
	   <li><a href=index.php?halaman=laporan>Lap. kunjungan</a></li>
	   <li><a href=index.php?halaman=laporangigi>Lap. Rekam Medis</a></li>
	   <li><a href=index.php?halaman=print_lap>Cetak</a></li>
	   <li><a href=index.php?halaman=data_akun>Akun</a></li>
	   <li><a href=logout.php>Keluar</a></li>
    </ul>";
}
else
{
	echo 
	"<ul id=main>
	 <li><a href=index.php?halaman=data_pasien>PASIEN</a></li>
      <li><a href=index.php?halaman=rekam_medis>REKAM MEDIS</a></li>
      <li><a href=logout.php>Keluar</a></li>
    </ul>";
}
?>
  </div>
  </div>
<div class="halaman">
  <div class="tengah">
	<div class="batas_isi">
    <div class="isi">
   	<?php
		require_once $hal.".php";
	?>
    </div>
    </div>
    </div>  
  </div>
 <div class="BatasBawah"></div>
</div>
</body>
</html>
<?php
}
else
{
	lompat_ke("form_login.php");
}
?>