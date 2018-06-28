<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";
$proses=$_POST['proses'];
$hapus=$_GET['proses'];
$url="";

//fungsi insert
	function insert($nama_tabel,$values)
	{
		$sql="INSERT INTO ".$nama_tabel." VALUES(".$values.")";
		mysql_query($sql);	
	}
//fungsi update
	function update($nama_tabel,$values,$kondisi)
	{
		$sql="UPDATE ".$nama_tabel." SET ".$values." WHERE ".$kondisi;
		mysql_query($sql);
	}
//fungsi delete
	function delete($nama_tabel,$kondisi)
	{
		$sql="DELETE FROM ".$nama_tabel." WHERE ".$kondisi;
		mysql_query($sql);
	}
//pilih fungsi
	switch($proses){
		//pemilihan fungsi insert
		case "akun_insert":
		{
			$nama_tabel="account";
			$username=md5($_POST["username"]);
			$password=md5($_POST["password"]);
			$values="'$username', '$password', '$_POST[nama]', '$_POST[level]'";
			$hal="data_akun";
			insert($nama_tabel,$values);
			break;
		}
		
		case "warna_insert":
		{
			$nama_tabel="kategori";
			$nama=$_POST["nama"];
			$warna=$_POST["warna"];
			$values="'','$nama', '$warna'";
			$hal="data_warna";
			insert($nama_tabel,$values);
			break;
		}
		
		case "pasien_insert":
			{	
				$pelID=str_ireplace(" ",_,$_POST['pasien_id']);
				$nama_tabel="pasien";
				$values="'$_POST[pasien_inc]', '$pelID', '$_POST[nmpasien]', 
				'$_POST[alamat]', '$_POST[usia]','$_POST[pekerjaan]','$_POST[kategori]'";
				insert($nama_tabel,$values);
				
				$od="INSERT INTO odontogram(pasien_id,nama_pasien,P18C,P18L,P18T,P18R,P18B,P17C,P17T,P17B,P17R,P17L,P16C,P16T,P16B,P16R,P16L,P15C,P15T,P15B,P15R,P15L,P14C,P14T,P14B,P14R,P14L,P13C,P13T,P13B,P13R,P13L,P12C,P12T,P12B,P12R,P12L,P11C,P11T,P11B,P11R,P11L,P55C,P55T,P55B,P55R,P55L,P54C,P54T,P54B,P54R,P54L,P53C,P53T,P53B,P53R,P53L,P52C,P52T,P52B,P52R,P52L,P51C,P51T,P51B,P51R,P51L,P85C,P85T,P85B,P85R,P85L,P84C,P84T,P84B,P84R,P84L,P83C,P83T,P83B,P83R,P83L,P82C,P82T,P82B,P82R,P82L,P81C,P81T,P81B,P81R,P81L,P48C,P48T,P48B,P48R,P48L,P47C,P47T,P47B,P47R,P47L,P46C,P46T,P46B,P46R,P46L,P45C,P45T,P45B,P45R,P45L,P44C,P44T,P44B,P44R,P44L,P43C,P43T,P43B,P43R,P43L,P42C,P42T,P42B,P42R,P42L,P41C,P41T,P41B,P41R,P41L,P21C,P21T,P21B,P21R,P21L,P22C,P22T,P22B,P22R,P22L,P23C,P23T,P23B,P23R,P23L,P24C,P24T,P24B,P24R,P24L,P25C,P25T,P25B,P25R,P25L,P26C,P26T,P26B,P26R,P26L,P27C,P27T,P27B,P27R,P27L,P28C,P28T,P28B,P28R,P28L,P61C,P61T,P61B,P61R,P61L,P62C,P62T,P62B,P62R,P62L,P63C,P63T,P63B,P63R,P63L,P64C,P64T,P64B,P64R,P64L,P65C,P65T,P65B,P65R,P65L,P71C,P71T,P71B,P71R,P71L,P72C,P72T,P72B,P72R,P72L,P73C,P73T,P73B,P73R,P73L,P74C,P74T,P74B,P74R,P74L,P75C,P75T,P75B,P75R,P75L,P31C,P31T,P31B,P31R,P31L,P32C,P32T,P32B,P32R,P32L,P33C,P33T,P33B,P33R,P33L,P34C,P34T,P34B,P34R,P34L,P35C,P35T,P35B,P35R,P35L,P36C,P36T,P36B,P36R,P36L,P37C,P37T,P37B,P37R,P37L,P38C,P38T,P38B,P38R,P38L)
				VALUES('$pelID','$_POST[nmpasien]','white','white','white','white','white','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White','White')";
				mysql_query($od);
				
				$hal="data_pasien";
				break;
			}
		case "dokter_insert":
			{
				$pelID=str_ireplace(" ",_,$_POST['dokter_id']);
				$nama_tabel="dokter";
				$values="'$_POST[dokter_inc]', '$pelID', '$_POST[nmdokter]', 
				'$_POST[alamatPel]', '$_POST[kotaPel]', '$_POST[emailPel]', '$_POST[kontakPel]'";
				$hal="data_dokter";
				insert($nama_tabel,$values);
				break;
			}
				
		//insert beli
		
		case "medis_insert":
		{
		
			//insert ke tabel medis
			$nomedis=$_POST[no_medis];
			$medis="INSERT INTO medis(inc, medis_id, tgl_medis, username, pasien_nama,kategoris, dokter_nama, tindakan, diagnosa, Biaya, Note)
			VALUES('$_POST[inc]', 'Medis-$nomedis', '$_POST[tgl_medis]', '$_POST[username]',
			'$_POST[pasien_nama]', '$_POST[kategori]','$_POST[dokter_nama]', '$_POST[tindakan]', '$_POST[diagnosa]','$_POST[biaya]', '$_POST[note]')";
			mysql_query($medis);
			//halaman
			$hal="rekam_medis&id=$_POST[medis_id]";
			break;
		}
		
		
		//pemilihan fungsi update
		
		case "pasien_update":
			{
				$nama_tabel="pasien";
				$values="pasien_nama='$_POST[nmpasien]', pasien_alamat='$_POST[alamat]', 
				usia='$_POST[usia]', pekerjaan='$_POST[pekerjaan]', kategori='$_POST[kategori]'";
				$kondisi="pasien_id='$_POST[pasien_id]'";
				$hal="data_pasien";
				update($nama_tabel,$values,$kondisi);
				break;
			}
		case "dokter_update":
			{
				$nama_tabel="dokter";
				$values="dokter_nama='$_POST[nmdokter]', dokter_alamat='$_POST[alamatPel]', 
				dokter_kota='$_POST[kotaPel]', dokter_email='$_POST[emailPel]', dokter_kontak='$_POST[kontakPel]'";
				$kondisi="dokter_id='$_POST[dokter_id]'";
				$hal="data_dokter";
				update($nama_tabel,$values,$kondisi);
				break;
			}
			
			case "ubah_warna":
			{
				$nama_tabel="kategori";
				$values="nama_kategori='$_POST[nama]', warna='$_POST[warna]'";
				$kondisi="id_kategori='$_POST[id]'";
				$hal="data_warna";
				update($nama_tabel,$values,$kondisi);
				break;
			}
		
		case "ubah_akun":
		{
			$sql="UPDATE account SET password='$_POST[password]', nama='$_POST[nama]', level='$_POST[level]' WHERE username='$_POST[username]'";
			mysql_query($sql);
			$hal="data_akun";
			break;
		}
	}//end switch
	
switch($hapus){
	//pemilihan fungsi delete
	
	case "pasien_delete":
			{
				$nama_tabel="pasien";
				$kondisi="pasien_id='$_GET[id]'";
				$hal="data_pasien";
				delete($nama_tabel,$kondisi);
				break;
			}
			case "dokter_delete":
			{
				$nama_tabel="dokter";
				$kondisi="dokter_id='$_GET[id]'";
				$hal="data_dokter";
				delete($nama_tabel,$kondisi);
				break;
			}
			case "medis_delete":
			{
				$nama_tabel="medis";
				$kondisi="inc='$_GET[id]'";
				$hal="rekam_medis";
				delete($nama_tabel,$kondisi);
				break;
			}


	case "hapus_akun":
	{
		$sql="DELETE FROM account WHERE username='$_GET[id]'";
		mysql_query($sql);
		$hal="data_akun";
		break;
	}
	case "hapus_warna":
	{
		$sql="DELETE FROM kategori WHERE id_kategori='$_GET[id]'";
		mysql_query($sql);
		$hal="data_warna";
		break;
	}
	
}
	if ($url=="transaksi")
	{
		lompat_ke($hal);
	}
	else
	{
		lompat_ke("index.php?halaman=".$hal);
	}
?>