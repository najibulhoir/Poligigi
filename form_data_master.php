<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/development-bundle/demos/demos.css">
<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/development-bundle/themes/ui-lightness/jquery.ui.all.css">
<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/validationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" href="JQuery-UI-1.8.17.custom/validationEngine/css/template.css" type="text/css"/>
	<script src="JQuery-UI-1.8.17.custom/validationEngine/js/jquery-1.4.4.min.js" type="text/javascript"></script>
    <script src="JQuery-UI-1.8.17.custom/validationEngine/js/jquery.validationEngine-id.js" type="text/javascript" charset="utf-8"></script>
	<script src="JQuery-UI-1.8.17.custom/validationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
    </script> 
    <script>
            jQuery(document).ready( function()
			                jQuery("#formID").validationEngine();
            });
    </script> 
<style type="text/css">

#formID
{
	border:none;
	margin:0px;
	padding:0px;
}
td
{
	padding:5px 9px;
	border:none;
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
</style>
<?php

require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

	echo "
	<form id=formID name=formInput method=post action=proses.php>
	  <input type=hidden name=proses id=proses value=$_GET[kode] />";
//form data obat
		
	if($_GET['kode']=="pasien_insert"){ 
//form data pasien
	//pemanggilan fungsi penambahan
		$a="SELECT * FROM pasien";
		$b="SELECT inc FROM pasien ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($a, $b);
	echo "
        <div id=judulHalaman><strong>Form input data pasien</strong></div>
        <table border=0 cellspacing=2 cellpadding=0>
          <tr>
            <td>pasien ID <input type=hidden name=pasien_inc id=pasien_inc value=$inc /></td>
            <td>:</td>
            <td><input type=text name=pasien_id id=input class=validate[required] value='Medis-$inc' /></td>
          </tr>
          <tr>
            <td>Nama pasien</td>
            <td>:</td>
            <td><label>
              <input name=nmpasien type=text id=input class=validate[required] size=70 maxlength=70 />
            </label></td>
          </tr>
          <tr>
            <td>Alamat pasien</td>
            <td>:</td>
            <td><label>
              <input name=alamat type=text id=input class=validate[required] size=70 maxlength=100 />
            </label></td>
          </tr>
          <tr>
            <td>Usia Pasien</td>
            <td>:</td>
            <td><label>
              <input name=usia type=text id=input class=validate[required] size=70 maxlength=70 />
            </label></td>
          </tr>
          <tr>
            <td>Pekerjaan pasien</td>
            <td>:</td>
            <td><label>
              <input name=pekerjaan type=text id=input class=validate[required] size=70 maxlength=70 />
            </label></td>
          </tr>
		  <tr>
            <td>Kategori pasien</td>
            <td>:</td>
            <td><label>
              <select name='kategori' id='s2_1' style='width: 100%;'>
			  <option value=0 selected>- Pilih Kategori -</option>
			  <option value='Lama'>Pasien Lama</option>
			  <option value='Baru'>Pasien Baru</option>
			  </select>
            </label></td>
          </tr>
           <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label>
              <input type=submit name=SimpanPel id=tombol value=Simpan />
            </label>
              <label>
                <input type=reset name=BatalPel id=tombol value=Batal />
              </label></td>
          </tr>
        </table>";
	}
	elseif($_GET['kode']=="dokter_insert"){
//form data dokter
	//pemanggilan fungsi penambahan
		$a="SELECT * FROM dokter";
		$b="SELECT inc FROM dokter ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($a, $b);
	echo "
        <div id=judulHalaman><strong>Form input data dokter</strong></div>
        <table border=0 cellspacing=2 cellpadding=0>
          <tr>
            <td>dokter ID <input type=hidden name=dokter_inc id=dokter_inc value=$inc /></td>
            <td>:</td>
            <td><input type=text name=dokter_id id=input class=validate[required] value='DOKTER-$inc' /></td>
          </tr>
          <tr>
            <td>Nama dokter</td>
            <td>:</td>
            <td><label>
              <input name=nmdokter type=text id=input class=validate[required] size=70 maxlength=70 />
            </label></td>
          </tr>
          <tr>
            <td>Alamat dokter</td>
            <td>:</td>
            <td><label>
              <input name=alamatPel type=text id=input class=validate[required] size=70 maxlength=100 />
            </label></td>
          </tr>
          <tr>
            <td>Kota dokter</td>
            <td>:</td>
            <td><label>
              <input name=kotaPel type=text id=input class=validate[required] size=70 maxlength=70 />
            </label></td>
          </tr>
          <tr>
            <td>Email dokter</td>
            <td>:</td>
            <td><label>
              <input name=emailPel type=text id=input class=validate[required] size=70 maxlength=70 />
            </label></td>
          </tr>
          <tr>
            <td>Kontak dokter</td>
            <td>:</td>
            <td><label>
              <input name=kontakPel type=text id=input class=validate[required] size=70 />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label>
              <input type=submit name=SimpanPel id=tombol value=Simpan />
            </label>
              <label>
                <input type=reset name=BatalPel id=tombol value=Batal />
              </label></td>
          </tr>
        </table>";
	}
	
	
     echo " </form>";

?>