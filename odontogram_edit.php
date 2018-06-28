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
<!--=================================================START P18=========================================================-->	
<?php
if($_POST['kode']=="P18"){
?>	
<form name="form" method="post" action="update/P18_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P18C</td>
    <td><?php echo "<select name='P18C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P18C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P18C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P18T</td>
    <td><?php echo "<select name='P18T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P18T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P18T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P18B</td>
     <td><?php echo "<select name='P18B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P18B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P18B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P18R</td>
    <td><?php echo "<select name='P18R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P18R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P18R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P18L</td>
    <td><?php echo "<select name='P18L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P18L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P18L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>


<!--=================================================START P17=========================================================-->	
<?php
if($_POST['kode']=="P17"){
?>	
<form name="form" method="post" action="update/P17_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P17C</td>
    <td><?php echo "<select name='P17C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P17C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P17C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P17T</td>
    <td><?php echo "<select name='P17T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P17T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P17T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P17B</td>
     <td><?php echo "<select name='P17B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P17B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P17B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P17R</td>
    <td><?php echo "<select name='P17R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P17R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P17R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P17L</td>
    <td><?php echo "<select name='P17L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P17L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P17L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>
 
<!--=================================================START P16=========================================================-->	
<?php
if($_POST['kode']=="P16"){
?>	
<form name="form" method="post" action="update/P16_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P16C</td>
    <td><?php echo "<select name='P16C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P16C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P16C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P16T</td>
    <td><?php echo "<select name='P16T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P16T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P16T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P16B</td>
     <td><?php echo "<select name='P16B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P16B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P16B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P16R</td>
    <td><?php echo "<select name='P16R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P16R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P16R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P16L</td>
    <td><?php echo "<select name='P16L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P16L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P16L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P15=========================================================-->	
<?php
if($_POST['kode']=="P15"){
?>	
<form name="form" method="post" action="update/P15_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P15C</td>
    <td><?php echo "<select name='P15C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P15C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P15C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P15T</td>
    <td><?php echo "<select name='P15T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P15T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P15T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P15B</td>
     <td><?php echo "<select name='P15B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P15B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P15B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P15R</td>
    <td><?php echo "<select name='P15R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P15R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P15R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P15L</td>
    <td><?php echo "<select name='P15L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P15L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P15L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 


<!--=================================================START P14=========================================================-->	
<?php
if($_POST['kode']=="P14"){
?>	
<form name="form" method="post" action="update/P14_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P14C</td>
    <td><?php echo "<select name='P14C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P14C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P14C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P14T</td>
    <td><?php echo "<select name='P14T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P14T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P14T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P14B</td>
     <td><?php echo "<select name='P14B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P14B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P14B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P14R</td>
    <td><?php echo "<select name='P14R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P14R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P14R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P14L</td>
    <td><?php echo "<select name='P14L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P14L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P14L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 
 
<!--=================================================START P13=========================================================-->	
<?php
if($_POST['kode']=="P13"){
?>	
<form name="form" method="post" action="update/P13_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P13C</td>
    <td><?php echo "<select name='P13C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P13C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P13C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P13T</td>
    <td><?php echo "<select name='P13T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P13T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P13T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P13B</td>
     <td><?php echo "<select name='P13B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P13B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P13B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P13R</td>
    <td><?php echo "<select name='P13R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P13R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P13R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P13L</td>
    <td><?php echo "<select name='P13L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P13L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P13L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P12=========================================================-->	
<?php
if($_POST['kode']=="P12"){
?>	
<form name="form" method="post" action="update/P12_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P12C</td>
    <td><?php echo "<select name='P12C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P12C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P12C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P12T</td>
    <td><?php echo "<select name='P12T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P12T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P12T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P12B</td>
     <td><?php echo "<select name='P12B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P12B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P12B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P12R</td>
    <td><?php echo "<select name='P12R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P12R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P12R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P12L</td>
    <td><?php echo "<select name='P12L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P12L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P12L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P11=========================================================-->	
<?php
if($_POST['kode']=="P11"){
?>	
<form name="form" method="post" action="update/P11_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P11C</td>
    <td><?php echo "<select name='P11C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P11C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P11C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P11T</td>
    <td><?php echo "<select name='P11T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P11T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P11T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P11B</td>
     <td><?php echo "<select name='P11B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P11B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P11B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P11R</td>
    <td><?php echo "<select name='P11R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P11R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P11R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P11L</td>
    <td><?php echo "<select name='P11L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P11L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P11L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>  


<!--=================================================START P55=========================================================-->	
<?php
if($_POST['kode']=="P55"){
?>	
<form name="form" method="post" action="update/P55_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P55C</td>
    <td><?php echo "<select name='P55C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P55C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P55C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P55T</td>
    <td><?php echo "<select name='P55T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P55T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P55T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P55B</td>
     <td><?php echo "<select name='P55B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P55B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P55B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P55R</td>
    <td><?php echo "<select name='P55R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P55R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P55R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P55L</td>
    <td><?php echo "<select name='P55L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P55L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P55L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P54=========================================================-->	
<?php
if($_POST['kode']=="P54"){
?>	
<form name="form" method="post" action="update/P54_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P54C</td>
    <td><?php echo "<select name='P54C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P54C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P54C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P54T</td>
    <td><?php echo "<select name='P54T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P54T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P54T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P54B</td>
     <td><?php echo "<select name='P54B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P54B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P54B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P54R</td>
    <td><?php echo "<select name='P54R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P54R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P54R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P54L</td>
    <td><?php echo "<select name='P54L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P54L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P54L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P53=========================================================-->	
<?php
if($_POST['kode']=="P53"){
?>	
<form name="form" method="post" action="update/P53_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P53C</td>
    <td><?php echo "<select name='P53C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P53C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P53C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P53T</td>
    <td><?php echo "<select name='P53T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P53T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P53T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P53B</td>
     <td><?php echo "<select name='P53B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P53B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P53B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P53R</td>
    <td><?php echo "<select name='P53R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P53R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P53R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P53L</td>
    <td><?php echo "<select name='P53L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P53L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P53L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P52=========================================================-->	
<?php
if($_POST['kode']=="P52"){
?>	
<form name="form" method="post" action="update/P52_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P52C</td>
    <td><?php echo "<select name='P52C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P52C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P52C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P52T</td>
    <td><?php echo "<select name='P52T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P52T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P52T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P52B</td>
     <td><?php echo "<select name='P52B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P52B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P52B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P52R</td>
    <td><?php echo "<select name='P52R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P52R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P52R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P52L</td>
    <td><?php echo "<select name='P52L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P52L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P52L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P51=========================================================-->	
<?php
if($_POST['kode']=="P51"){
?>	
<form name="form" method="post" action="update/P51_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P51C</td>
    <td><?php echo "<select name='P51C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P51C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P51C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P51T</td>
    <td><?php echo "<select name='P51T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P51T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P51T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P51B</td>
     <td><?php echo "<select name='P51B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P51B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P51B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P51R</td>
    <td><?php echo "<select name='P51R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P51R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P51R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P51L</td>
    <td><?php echo "<select name='P51L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P51L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P51L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P85=========================================================-->	
<?php
if($_POST['kode']=="P85"){
?>	
<form name="form" method="post" action="update/P85_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P85C</td>
    <td><?php echo "<select name='P85C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P85C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P85C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P85T</td>
    <td><?php echo "<select name='P85T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P85T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P85T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P85B</td>
     <td><?php echo "<select name='P85B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P85B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P85B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P85R</td>
    <td><?php echo "<select name='P85R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P85R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P85R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P85L</td>
    <td><?php echo "<select name='P85L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P85L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P85L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P84=========================================================-->	
<?php
if($_POST['kode']=="P84"){
?>	
<form name="form" method="post" action="update/P84_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P84C</td>
    <td><?php echo "<select name='P84C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P84C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P84C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P84T</td>
    <td><?php echo "<select name='P84T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P84T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P84T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P84B</td>
     <td><?php echo "<select name='P84B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P84B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P84B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P84R</td>
    <td><?php echo "<select name='P84R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P84R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P84R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P84L</td>
    <td><?php echo "<select name='P84L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P84L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P84L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P83=========================================================-->	
<?php
if($_POST['kode']=="P83"){
?>	
<form name="form" method="post" action="update/P83_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P83C</td>
    <td><?php echo "<select name='P83C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P83C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P83C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P83T</td>
    <td><?php echo "<select name='P83T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P83T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P83T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P83B</td>
     <td><?php echo "<select name='P83B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P83B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P83B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P83R</td>
    <td><?php echo "<select name='P83R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P83R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P83R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P83L</td>
    <td><?php echo "<select name='P83L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P83L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P83L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P82=========================================================-->	
<?php
if($_POST['kode']=="P82"){
?>	
<form name="form" method="post" action="update/P82_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P82C</td>
    <td><?php echo "<select name='P82C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P82C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P82C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P82T</td>
    <td><?php echo "<select name='P82T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P82T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P82T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P82B</td>
     <td><?php echo "<select name='P82B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P82B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P82B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P82R</td>
    <td><?php echo "<select name='P82R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P82R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P82R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P82L</td>
    <td><?php echo "<select name='P82L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P82L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P82L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 


<!--=================================================START P81=========================================================-->	
<?php
if($_POST['kode']=="P81"){
?>	
<form name="form" method="post" action="update/P81_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P81C</td>
    <td><?php echo "<select name='P81C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P81C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P81C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P81T</td>
    <td><?php echo "<select name='P81T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P81T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P81T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P81B</td>
     <td><?php echo "<select name='P81B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P81B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P81B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P81R</td>
    <td><?php echo "<select name='P81R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P81R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P81R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P81L</td>
    <td><?php echo "<select name='P81L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P81L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P81L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P48=========================================================-->	
<?php
if($_POST['kode']=="P48"){
?>	
<form name="form" method="post" action="update/P48_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P48C</td>
    <td><?php echo "<select name='P48C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P48C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P48C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P48T</td>
    <td><?php echo "<select name='P48T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P48T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P48T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P48B</td>
     <td><?php echo "<select name='P48B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P48B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P48B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P48R</td>
    <td><?php echo "<select name='P48R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P48R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P48R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P48L</td>
    <td><?php echo "<select name='P48L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P48L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P48L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P47=========================================================-->	
<?php
if($_POST['kode']=="P47"){
?>	
<form name="form" method="post" action="update/P47_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P47C</td>
    <td><?php echo "<select name='P47C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P47C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P47C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P47T</td>
    <td><?php echo "<select name='P47T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P47T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P47T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P47B</td>
     <td><?php echo "<select name='P47B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P47B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P47B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P47R</td>
    <td><?php echo "<select name='P47R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P47R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P47R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P47L</td>
    <td><?php echo "<select name='P47L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P47L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P47L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P46=========================================================-->	
<?php
if($_POST['kode']=="P46"){
?>	
<form name="form" method="post" action="update/P46_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P46C</td>
    <td><?php echo "<select name='P46C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P46C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P46C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P46T</td>
    <td><?php echo "<select name='P46T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P46T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P46T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P46B</td>
     <td><?php echo "<select name='P46B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P46B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P46B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P46R</td>
    <td><?php echo "<select name='P46R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P46R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P46R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P46L</td>
    <td><?php echo "<select name='P46L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P46L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P46L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P45=========================================================-->	
<?php
if($_POST['kode']=="P45"){
?>	
<form name="form" method="post" action="update/P45_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P45C</td>
    <td><?php echo "<select name='P45C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P45C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P45C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P45T</td>
    <td><?php echo "<select name='P45T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P45T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P45T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P45B</td>
     <td><?php echo "<select name='P45B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P45B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P45B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P45R</td>
    <td><?php echo "<select name='P45R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P45R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P45R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P45L</td>
    <td><?php echo "<select name='P45L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P45L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P45L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P44=========================================================-->	
<?php
if($_POST['kode']=="P44"){
?>	
<form name="form" method="post" action="update/P44_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P44C</td>
    <td><?php echo "<select name='P44C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P44C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P44C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P44T</td>
    <td><?php echo "<select name='P44T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P44T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P44T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P44B</td>
     <td><?php echo "<select name='P44B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P44B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P44B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P44R</td>
    <td><?php echo "<select name='P44R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P44R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P44R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P44L</td>
    <td><?php echo "<select name='P44L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P44L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P44L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P43=========================================================-->	
<?php
if($_POST['kode']=="P43"){
?>	
<form name="form" method="post" action="update/P43_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P43C</td>
    <td><?php echo "<select name='P43C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P43C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P43C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P43T</td>
    <td><?php echo "<select name='P43T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P43T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P43T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P43B</td>
     <td><?php echo "<select name='P43B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P43B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P43B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P43R</td>
    <td><?php echo "<select name='P43R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P43R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P43R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P43L</td>
    <td><?php echo "<select name='P43L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P43L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P43L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P42=========================================================-->	
<?php
if($_POST['kode']=="P42"){
?>	
<form name="form" method="post" action="update/P42_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P42C</td>
    <td><?php echo "<select name='P42C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P42C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P42C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P42T</td>
    <td><?php echo "<select name='P42T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P42T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P42T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P42B</td>
     <td><?php echo "<select name='P42B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P42B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P42B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P42R</td>
    <td><?php echo "<select name='P42R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P42R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P42R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P42L</td>
    <td><?php echo "<select name='P42L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P42L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P42L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?> 

<!--=================================================START P41=========================================================-->	
<?php
if($_POST['kode']=="P41"){
?>	
<form name="form" method="post" action="update/P41_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P41C</td>
    <td><?php echo "<select name='P41C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P41C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P41C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P41T</td>
    <td><?php echo "<select name='P41T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P41T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P41T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P41B</td>
     <td><?php echo "<select name='P41B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P41B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P41B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P41R</td>
    <td><?php echo "<select name='P41R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P41R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P41R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P41L</td>
    <td><?php echo "<select name='P41L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P41L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P41L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P21=========================================================-->	
<?php
if($_POST['kode']=="P21"){
?>	
<form name="form" method="post" action="update/P21_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P21C</td>
    <td><?php echo "<select name='P21C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P21C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P21C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P21T</td>
    <td><?php echo "<select name='P21T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P21T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P21T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P21B</td>
     <td><?php echo "<select name='P21B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P21B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P21B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P21R</td>
    <td><?php echo "<select name='P21R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P21R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P21R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P21L</td>
    <td><?php echo "<select name='P21L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P21L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P21L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P22=========================================================-->	
<?php
if($_POST['kode']=="P22"){
?>	
<form name="form" method="post" action="update/P22_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P22C</td>
    <td><?php echo "<select name='P22C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P22C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P22C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P22T</td>
    <td><?php echo "<select name='P22T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P22T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P22T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P22B</td>
     <td><?php echo "<select name='P22B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P22B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P22B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P22R</td>
    <td><?php echo "<select name='P22R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P22R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P22R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P22L</td>
    <td><?php echo "<select name='P22L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P22L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P22L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P23=========================================================-->	
<?php
if($_POST['kode']=="P23"){
?>	
<form name="form" method="post" action="update/P23_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P23C</td>
    <td><?php echo "<select name='P23C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P23C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P23C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P23T</td>
    <td><?php echo "<select name='P23T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P23T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P23T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P23B</td>
     <td><?php echo "<select name='P23B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P23B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P23B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P23R</td>
    <td><?php echo "<select name='P23R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P23R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P23R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P23L</td>
    <td><?php echo "<select name='P23L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P23L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P23L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P24=========================================================-->	
<?php
if($_POST['kode']=="P24"){
?>	
<form name="form" method="post" action="update/P24_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P24C</td>
    <td><?php echo "<select name='P24C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P24C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P24C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P24T</td>
    <td><?php echo "<select name='P24T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P24T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P24T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P24B</td>
     <td><?php echo "<select name='P24B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P24B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P24B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P24R</td>
    <td><?php echo "<select name='P24R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P24R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P24R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P24L</td>
    <td><?php echo "<select name='P24L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P24L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P24L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P25=========================================================-->	
<?php
if($_POST['kode']=="P25"){
?>	
<form name="form" method="post" action="update/P25_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P25C</td>
    <td><?php echo "<select name='P25C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P25C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P25C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P25T</td>
    <td><?php echo "<select name='P25T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P25T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P25T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P25B</td>
     <td><?php echo "<select name='P25B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P25B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P25B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P25R</td>
    <td><?php echo "<select name='P25R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P25R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P25R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P25L</td>
    <td><?php echo "<select name='P25L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P25L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P25L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>  

<!--=================================================START P26=========================================================-->	
<?php
if($_POST['kode']=="P26"){
?>	
<form name="form" method="post" action="update/P26_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P26C</td>
    <td><?php echo "<select name='P26C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P26C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P26C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P26T</td>
    <td><?php echo "<select name='P26T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P26T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P26T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P26B</td>
     <td><?php echo "<select name='P26B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P26B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P26B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P26R</td>
    <td><?php echo "<select name='P26R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P26R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P26R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P26L</td>
    <td><?php echo "<select name='P26L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P26L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P26L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P27=========================================================-->	
<?php
if($_POST['kode']=="P27"){
?>	
<form name="form" method="post" action="update/P27_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P27C</td>
    <td><?php echo "<select name='P27C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P27C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P27C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P27T</td>
    <td><?php echo "<select name='P27T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P27T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P27T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P27B</td>
     <td><?php echo "<select name='P27B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P27B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P27B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P27R</td>
    <td><?php echo "<select name='P27R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P27R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P27R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P27L</td>
    <td><?php echo "<select name='P27L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P27L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P27L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P28=========================================================-->	
<?php
if($_POST['kode']=="P28"){
?>	
<form name="form" method="post" action="update/P28_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P28C</td>
    <td><?php echo "<select name='P28C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P28C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P28C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P28T</td>
    <td><?php echo "<select name='P28T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P28T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P28T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P28B</td>
     <td><?php echo "<select name='P28B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P28B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P28B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P28R</td>
    <td><?php echo "<select name='P28R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P28R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P28R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P28L</td>
    <td><?php echo "<select name='P28L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P28L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P28L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P61=========================================================-->	
<?php
if($_POST['kode']=="P61"){
?>	
<form name="form" method="post" action="update/P61_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P61C</td>
    <td><?php echo "<select name='P61C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P61C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P61C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P61T</td>
    <td><?php echo "<select name='P61T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P61T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P61T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P61B</td>
     <td><?php echo "<select name='P61B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P61B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P61B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P61R</td>
    <td><?php echo "<select name='P61R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P61R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P61R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P61L</td>
    <td><?php echo "<select name='P61L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P61L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P61L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P62=========================================================-->	
<?php
if($_POST['kode']=="P62"){
?>	
<form name="form" method="post" action="update/P62_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P62C</td>
    <td><?php echo "<select name='P62C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P62C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P62C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P62T</td>
    <td><?php echo "<select name='P62T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P62T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P62T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P62B</td>
     <td><?php echo "<select name='P62B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P62B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P62B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P62R</td>
    <td><?php echo "<select name='P62R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P62R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P62R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P62L</td>
    <td><?php echo "<select name='P62L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P62L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P62L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P63=========================================================-->	
<?php
if($_POST['kode']=="P63"){
?>	
<form name="form" method="post" action="update/P63_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P63C</td>
    <td><?php echo "<select name='P63C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P63C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P63C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P63T</td>
    <td><?php echo "<select name='P63T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P63T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P63T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P63B</td>
     <td><?php echo "<select name='P63B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P63B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P63B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P63R</td>
    <td><?php echo "<select name='P63R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P63R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P63R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P63L</td>
    <td><?php echo "<select name='P63L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P63L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P63L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P64=========================================================-->	
<?php
if($_POST['kode']=="P64"){
?>	
<form name="form" method="post" action="update/P64_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P64C</td>
    <td><?php echo "<select name='P64C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P64C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P64C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P64T</td>
    <td><?php echo "<select name='P64T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P64T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P64T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P64B</td>
     <td><?php echo "<select name='P64B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P64B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P64B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P64R</td>
    <td><?php echo "<select name='P64R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P64R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P64R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P64L</td>
    <td><?php echo "<select name='P64L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P64L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P64L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P65=========================================================-->	
<?php
if($_POST['kode']=="P65"){
?>	
<form name="form" method="post" action="update/P65_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P65C</td>
    <td><?php echo "<select name='P65C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P65C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P65C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P65T</td>
    <td><?php echo "<select name='P65T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P65T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P65T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P65B</td>
     <td><?php echo "<select name='P65B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P65B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P65B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P65R</td>
    <td><?php echo "<select name='P65R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P65R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P65R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P65L</td>
    <td><?php echo "<select name='P65L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P65L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P65L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P71=========================================================-->	
<?php
if($_POST['kode']=="P71"){
?>	
<form name="form" method="post" action="update/P71_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P71C</td>
    <td><?php echo "<select name='P71C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P71C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P71C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P71T</td>
    <td><?php echo "<select name='P71T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P71T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P71T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P71B</td>
     <td><?php echo "<select name='P71B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P71B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P71B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P71R</td>
    <td><?php echo "<select name='P71R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P71R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P71R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P71L</td>
    <td><?php echo "<select name='P71L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P71L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P71L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P72=========================================================-->	
<?php
if($_POST['kode']=="P72"){
?>	
<form name="form" method="post" action="update/P72_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P72C</td>
    <td><?php echo "<select name='P72C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P72C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P72C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P72T</td>
    <td><?php echo "<select name='P72T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P72T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P72T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P72B</td>
     <td><?php echo "<select name='P72B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P72B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P72B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P72R</td>
    <td><?php echo "<select name='P72R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P72R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P72R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P72L</td>
    <td><?php echo "<select name='P72L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P72L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P72L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P73=========================================================-->	
<?php
if($_POST['kode']=="P73"){
?>	
<form name="form" method="post" action="update/P73_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P73C</td>
    <td><?php echo "<select name='P73C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P73C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P73C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P73T</td>
    <td><?php echo "<select name='P73T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P73T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P73T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P73B</td>
     <td><?php echo "<select name='P73B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P73B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P73B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P73R</td>
    <td><?php echo "<select name='P73R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P73R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P73R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P73L</td>
    <td><?php echo "<select name='P73L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P73L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P73L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P74=========================================================-->	
<?php
if($_POST['kode']=="P74"){
?>	
<form name="form" method="post" action="update/P74_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P74C</td>
    <td><?php echo "<select name='P74C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P74C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P74C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P74T</td>
    <td><?php echo "<select name='P74T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P74T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P74T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P74B</td>
     <td><?php echo "<select name='P74B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P74B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P74B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P74R</td>
    <td><?php echo "<select name='P74R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P74R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P74R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P74L</td>
    <td><?php echo "<select name='P74L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P74L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P74L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P75=========================================================-->	
<?php
if($_POST['kode']=="P75"){
?>	
<form name="form" method="post" action="update/P75_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P75C</td>
    <td><?php echo "<select name='P75C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P75C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P75C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P75T</td>
    <td><?php echo "<select name='P75T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P75T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P75T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P75B</td>
     <td><?php echo "<select name='P75B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P75B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P75B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P75R</td>
    <td><?php echo "<select name='P75R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P75R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P75R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P75L</td>
    <td><?php echo "<select name='P75L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P75L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P75L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P31=========================================================-->	
<?php
if($_POST['kode']=="P31"){
?>	
<form name="form" method="post" action="update/P31_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P31C</td>
    <td><?php echo "<select name='P31C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P31C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P31C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P31T</td>
    <td><?php echo "<select name='P31T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P31T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P31T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P31B</td>
     <td><?php echo "<select name='P31B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P31B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P31B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P31R</td>
    <td><?php echo "<select name='P31R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P31R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P31R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P31L</td>
    <td><?php echo "<select name='P31L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P31L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P31L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P32=========================================================-->	
<?php
if($_POST['kode']=="P32"){
?>	
<form name="form" method="post" action="update/P32_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P32C</td>
    <td><?php echo "<select name='P32C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P32C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P32C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P32T</td>
    <td><?php echo "<select name='P32T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P32T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P32T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P32B</td>
     <td><?php echo "<select name='P32B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P32B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P32B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P32R</td>
    <td><?php echo "<select name='P32R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P32R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P32R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P32L</td>
    <td><?php echo "<select name='P32L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P32L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P32L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>


<!--=================================================START P33=========================================================-->	
<?php
if($_POST['kode']=="P33"){
?>	
<form name="form" method="post" action="update/P33_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P33C</td>
    <td><?php echo "<select name='P33C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P33C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P33C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P33T</td>
    <td><?php echo "<select name='P33T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P33T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P33T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P33B</td>
     <td><?php echo "<select name='P33B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P33B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P33B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P33R</td>
    <td><?php echo "<select name='P33R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P33R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P33R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P33L</td>
    <td><?php echo "<select name='P33L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P33L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P33L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P34=========================================================-->	
<?php
if($_POST['kode']=="P34"){
?>	
<form name="form" method="post" action="update/P34_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P34C</td>
    <td><?php echo "<select name='P34C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P34C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P34C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P34T</td>
    <td><?php echo "<select name='P34T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P34T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P34T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P34B</td>
     <td><?php echo "<select name='P34B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P34B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P34B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P34R</td>
    <td><?php echo "<select name='P34R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P34R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P34R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P34L</td>
    <td><?php echo "<select name='P34L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P34L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P34L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P35=========================================================-->	
<?php
if($_POST['kode']=="P35"){
?>	
<form name="form" method="post" action="update/P35_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P35C</td>
    <td><?php echo "<select name='P35C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P35C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P35C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P35T</td>
    <td><?php echo "<select name='P35T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P35T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P35T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P35B</td>
     <td><?php echo "<select name='P35B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P35B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P35B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P35R</td>
    <td><?php echo "<select name='P35R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P35R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P35R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P35L</td>
    <td><?php echo "<select name='P35L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P35L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P35L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P36=========================================================-->	
<?php
if($_POST['kode']=="P36"){
?>	
<form name="form" method="post" action="update/P36_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P36C</td>
    <td><?php echo "<select name='P36C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P36C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P36C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P36T</td>
    <td><?php echo "<select name='P36T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P36T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P36T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P36B</td>
     <td><?php echo "<select name='P36B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P36B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P36B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P36R</td>
    <td><?php echo "<select name='P36R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P36R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P36R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P36L</td>
    <td><?php echo "<select name='P36L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P36L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P36L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P37=========================================================-->	
<?php
if($_POST['kode']=="P37"){
?>	
<form name="form" method="post" action="update/P37_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P37C</td>
    <td><?php echo "<select name='P37C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P37C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P37C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P37T</td>
    <td><?php echo "<select name='P37T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P37T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P37T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P37B</td>
     <td><?php echo "<select name='P37B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P37B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P37B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P37R</td>
    <td><?php echo "<select name='P37R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P37R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P37R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P37L</td>
    <td><?php echo "<select name='P37L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P37L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P37L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>

<!--=================================================START P38=========================================================-->	
<?php
if($_POST['kode']=="P38"){
?>	
<form name="form" method="post" action="update/P38_update.php">
<input type='hidden' name=id value='<?php echo"$_GET[id]";?>'>
<br/>
<table id="contoh" class="display">
                <thead>
                    <tr>
                       
                        <th>Odontograma</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
  <?php 
  		$pesan="SELECT * FROM  odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		while($row=mysql_fetch_array($query)){
	
		?>
  <tr>
    <td>P38C</td>
    <td><?php echo "<select name='P38C'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P38C]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P38C]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }
    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P38T</td>
    <td><?php echo "<select name='P38T'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P38T]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P38T]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
   <tr>
    <td>P38B</td>
     <td><?php echo "<select name='P38B'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P38B]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P38B]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  <tr>
    <td>P38R</td>
    <td><?php echo "<select name='P38R'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P38R]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P38R]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
  <tr>
    <td>P38L</td>
    <td><?php echo "<select name='P38L'>";
$tampil=mysql_query("SELECT * FROM kategori");
if ($row[P38L]==0){
echo "<option value=0 selected>- Pilih Kategori -</option>";}   
while($w=mysql_fetch_array($tampil)){
            if ($row[P38L]==$w[warna]){
              echo "<option value=$w[warna] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[warna]>$w[nama_kategori]</option>";
            }
          }

    echo "</select>"; ?></td>
  </tr>
  
 
  <?php } ?>
  
  
 
 </tbody>
            </table>
<br/>
 <input type="submit" name="simpan" id="tombol" value="simpan" />
</form>
<?php } ?>
 
    </body>
</html>
