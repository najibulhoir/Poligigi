<?php
if ($_SESSION['level'] == "admin")
	{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Plugin dataTables</title>        
        <style type="text/css">                       
            @import "media/css/demo_table_jui.css";
            @import "media/themes/smoothness/jquery-ui-1.8.4.custom.css";
        </style>      

        <script src="media/js/jquery.js"></script>
        <script src="media/js/jquery.dataTables.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
				    oTable = $('#contoh').dataTable({
					     "bJQueryUI": true,
					     "sPaginationType": "full_numbers"
				    });
          })    
        </script>
    </head>
    <body>
<br/>
<br/>	
<a id='tombol' href=index.php?halaman=form_warna>tambah data</a>
<br/>
<br/>
	
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Warna</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
				
  <?php
 
  	$warna="SELECT * FROM kategori ORDER BY id_kategori";
	$qwarna=mysql_query($warna);
	$i=1;
  while($dwarna=mysql_fetch_array($qwarna))
  {
	  echo "
  <tr>
    <td>$i</td>
    <td>$dwarna[nama_kategori]</td>
    <td>$dwarna[warna]</td>
    <td><center><a href=index.php?halaman=form_ubah_warna&id=$dwarna[id_kategori]>Ubah</a> |
	<a href='proses.php?proses=hapus_warna&id=$dwarna[id_kategori]'>Hapus</a></center>
	</td>
	
  </tr>";
  $i++;
  }
  ?>
</table>
</tbody>

<?php
	}
	else
	{
		echo "anda tidak berhak meng-akses halaman ini !";
	}
?>

</body>
</html>
