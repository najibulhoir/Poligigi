<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="style/data.css" type="text/css">
<link rel="stylesheet" href="style/style_index.css" type="text/css"  />
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
</style></head>
<body>  
<div id="judulHalaman"><strong>Laporan rekam medis pasien </strong></div>
<form id="form1" name="form1" method="post" action="index.php?halaman=laporanrm">
    <input name="proses" type="hidden" value="form1" />
      <table border="0">
        <tr>
          <td>tanggal awal</td>
          
          <td>tanggal akhir</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><input name="tgl_awal" type="text" id="datepicker" /></td>
          <td><input name="tgl_akhir" type="text" id="datepicker1" /></td>
          <td><input name="tampil" id="tombol" type="submit" value="tampilkan" /></td>
        </tr>
      </table>
    </form>
</body>
</html>
