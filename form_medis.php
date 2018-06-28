<?php
session_start();
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";
$a="SELECT * FROM medis";
$b="SELECT inc FROM medis ORDER BY inc DESC LIMIT 1";
$inc=penambahan($a, $b);
?>
<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="style/style_form_transaksi.css" type="text/css"  />
<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/development-bundle/themes/ui-lightness/jquery.ui.all.css">
<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/development-bundle/demos/demos.css">
<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/validationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/validationEngine/css/template.css" type="text/css"/>
	<script src="JQuery-UI-1.8.17.custom/validationEngine/js/jquery-1.4.4.min.js" type="text/javascript"></script>
    <script src="JQuery-UI-1.8.17.custom/validationEngine/js/jquery.validationEngine-id.js" type="text/javascript" charset="utf-8"></script>
	<script src="JQuery-UI-1.8.17.custom/validationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	jQuery(document).ready( function() {
                // binds form submission and fields to the validation engine
                jQuery("#formID").validationEngine();

            });
    </script>  

	<script src="JQuery-UI-1.8.17.custom/development-bundle/jquery-1.7.1.js"></script>
	<script src="JQuery-UI-1.8.17.custom/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="JQuery-UI-1.8.17.custom/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="JQuery-UI-1.8.17.custom/development-bundle/ui/jquery.ui.datepicker.js"></script>
    <script src="JQuery-UI-1.8.17.custom/development-bundle/ui/i18n/jquery.ui.datepicker-id.js"></script>
	<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
	$(function() {
		$( "#datepicker1" ).datepicker();
	});
	</script>
<style type="text/css">
#formID
{
	border:none;
	margin:0px;
	padding:0px;
}
#formID1
{
	border:none;
	margin:0px;
	padding:0px;
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
body {
	color:#315567;
	background-color:#e9e9e9;
	font-size:11px;
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
#noborder
{
	border:none;
}
</style>
</head>

<body>
<div id="page"> 
<a href="index.php?halaman=rekam_medis"><div id="keluar">close</div></a>
<div class="header">
  <h1>REKAM MEDIS</h1>
</div>
<div class="halaman">
  
	
    <div class="isi">
<table border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td>
      <form id="form1" name="form1" method="post" action="proses.php">
            <input type="hidden" name="proses" id="proses" value="medis_insert" />
          <table border="0" cellspacing="1" cellpadding="0">
		  <tr>
              <td id="noborder">Nama Pasien</td>
              <td id="noborder">:</td>
              <td id="noborder">
			   <input type="text" style="width:50px" name="medis_id" value="<?php echo "Medis"; ?>" readonly="true"/> -
<?php     
$result = mysql_query("select * from pasien");  
$jsArray = "var pasienName = new Array();\n";  
$jsArray2 = "var incR = new Array();\n";  
$jsArray3 = "var namaPasien = new Array();\n";  
echo '<select style="width:50px" id="input" name="pasien_nama" onchange="document.getElementById(\'kategori\').value = pasienName[this.value], document.getElementById(\'no_medis\').value = incR[this.value], document.getElementById(\'nama\').value = namaPasien[this.value]">';  
echo '<option>-</option>';  
while ($row = mysql_fetch_array($result)) { 
    echo '<option value="' . $row['pasien_nama'] . '">' . $row['inc'] . '</option>'; 	
    $jsArray .= "pasienName['" . $row['pasien_nama'] . "'] = '" . addslashes($row['kategori']) . "';\n";    
    $jsArray2 .= "incR['" . $row['pasien_nama'] . "'] = '" . addslashes($row['inc']) . "';\n";    
    $jsArray3 .= "namaPasien['" . $row['pasien_nama'] . "'] = '" . addslashes($row['pasien_nama']) . "';\n";    
}
echo '</select>';  
?>  
				  
			  </td>
            </tr>
			
			
			
            <tr><input name="inc" type="hidden" value="<?php echo "$inc"; ?>" />
              <td id="noborder">No. Medis </td>
              <td id="noborder">:</td>
              <td id="noborder">
			  <label>
	
	<input type="text" style="width:200px" name="nama" id="nama" readonly="true"/>
	<script type='text/javascript'>    
    <?php echo $jsArray3; ?>  
    </script> 
	
	<select name="kategori" id="kategori">
                <option>--</option>
                <option>Baru</option>
                <option>Lama</option>
	</select>
			  
			  
	<script type='text/javascript'>    
    <?php echo $jsArray; ?>  
    </script> 
  	</label>
	
	
 <input type="hidden" style="width:25px" name="no_medis" id="no_medis" readonly="true"/>
   <script type='text/javascript'>    
    <?php echo $jsArray2; ?>  
    </script> 
			</td>
            </tr>
            <tr>
              <td id="noborder">Tgl. Kunjungan </td>
              <td id="noborder">:</td>
              <td id="noborder">
                <input type="text" name="tgl_medis" id="datepicker" value="<?php echo date('d')."/".date('m')."/".date('Y');?>" />              </td><input type="hidden" name="username" id="username" value="<?php echo $_SESSION['username']; ?>" />
            </tr>
           
			<tr>
              <td id="noborder">Nama Dokter</td>
              <td id="noborder">:</td>
              <td id="noborder"><select name="dokter_nama" id="input">
                <option>umum</option>
                <?php
                $pel="SELECT * FROM dokter ORDER BY inc ASC";
                $qpel=mysql_query($pel);
                while ($dtpel=mysql_fetch_array($qpel)){
              echo "
                <option>$dtpel[dokter_nama]</option>";
                }
                ?>
              </select></td>
            </tr>
			 <tr>
              <td id="noborder">Diagnosa</td>
              <td id="noborder">:</td>
              <td id="noborder">
                <input type='text' name='diagnosa' id='input' style='width: 100%;'>

            </tr>
			<tr>
              <td id="noborder">Penanganan</td>
              <td id="noborder">:</td>
              <td id="noborder">
               
				<input type='text' name='tindakan' id='input' style='width: 100%;'>
				</td>
            </tr>
            	<tr>
              <td id="noborder">Biaya</td>
              <td id="noborder">:</td>
              <td id="noborder">
               
				<input type='text' name='biaya' id='input' style='width: 100%;'>
				</td>
            </tr>
            	<tr>
              <td id="noborder">Note</td>
              <td id="noborder">:</td>
              <td id="noborder">
               
				<input type='textarea' name='note' id='input' style='width: 100%;'>
				</td>
            </tr>
          </table>
       
              <table border="0" cellspacing="1" cellpadding="0">
          
          <tr>
             <td id="noborder">
              <input type="submit" name="simpan" id="tombol" value="simpan" />
              </form>
              <a href="index.php?halaman=rekam_medis"><input type="submit" name="batal" id="tombol" value="batal" /></a> </td>
          </tr>
        </table>
    </td>
    </tr>
</table>
		</div>
    </div>
    </div>  
  </div>
</div>
</body>
</html>