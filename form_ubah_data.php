<style type="text/css">
td{
	border:none;
}

#input{
	height:20px;
	border:1px solid #c0d3e2;
}
</style>

<?php



require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

	echo "
	<form id=formUbahData name=formUbahData method=post action=proses.php>
	<input type=hidden name=proses id=proses value=$_GET[kode] />";

	if($_GET['kode']=="pasien_update"){  
	$pesan="SELECT * FROM pasien WHERE pasien_id='$_GET[id]'";
		$query=mysql_query($pesan);
		$data=mysql_fetch_array($query);
	echo "	<h1>Ubah data pasien</h1>
        <table border=0 cellspacing=2 cellpadding=0>
          <tr>
            <td>pasien ID<input type=hidden name=pasien_id id=pasien_id value='".$data['pasien_id']."' /></td>
            <td>:</td>
            <td>$data[pasien_id]</td>
          </tr>
          <tr>
            <td>Nama pasien</td>
            <td>:</td>
            <td><label>
              <input name=nmpasien type=text id=input size=70 maxlength=70 value='".$data['pasien_nama']."' />
            </label></td>
          </tr>
          <tr>
            <td>Alamat pasien</td>
            <td>:</td>
            <td><label>
              <input name=alamat type=text id=input size=70 maxlength=100 value='".$data['pasien_alamat']."' />
            </label></td>
          </tr>
          <tr>
            <td>Usia pasien</td>
            <td>:</td>
            <td><label>
              <input name=usia type=text id=input size=70 maxlength=70 value='".$data['usia']."' />
            </label></td>
          </tr>
          <tr>
            <td>Pekerjaan pasien</td>
            <td>:</td>
            <td><label>
              <input name=pekerjaan type=text id=input size=70 maxlength=70 value='".$data['pekerjaan']."' />
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
	
	elseif($_GET['kode']=="dokter_update"){  
	$pesan="SELECT * FROM dokter WHERE dokter_id='$_GET[id]'";
		$query=mysql_query($pesan);
		$data=mysql_fetch_array($query);
	echo "	<h1>Ubah data dokter</h1>
        <table border=0 cellspacing=2 cellpadding=0>
          <tr>
            <td>dokter ID<input type=hidden name=dokter_id id=dokter_id value='".$data['dokter_id']."' /></td>
            <td>:</td>
            <td>$data[dokter_id]</td>
          </tr>
          <tr>
            <td>Nama dokter</td>
            <td>:</td>
            <td><label>
              <input name=nmdokter type=text id=input size=70 maxlength=70 value='".$data['dokter_nama']."' />
            </label></td>
          </tr>
          <tr>
            <td>Alamat dokter</td>
            <td>:</td>
            <td><label>
              <input name=alamatPel type=text id=input size=70 maxlength=100 value='".$data['dokter_alamat']."' />
            </label></td>
          </tr>
          <tr>
            <td>Kota dokter</td>
            <td>:</td>
            <td><label>
              <input name=kotaPel type=text id=input size=70 maxlength=70 value='".$data['dokter_kota']."' />
            </label></td>
          </tr>
          <tr>
            <td>Email dokter</td>
            <td>:</td>
            <td><label>
              <input name=emailPel type=text id=input size=70 maxlength=70 value='".$data['dokter_email']."' />
            </label></td>
          </tr>
          <tr>
            <td>Kontak dokter</td>
            <td>:</td>
            <td><label>
              <input name=kontakPel type=text id=input size=70 value='".$data['dokter_kontak']."' />
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
	echo "</form>";
?>