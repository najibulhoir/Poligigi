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
	
	
	 
	 
<center>
<div class='content'>
	   <div class='workplace'>
		<div class='dr'><span></span></div>
            <div class='row-fluid'>
                <div class='span12'>                    
                   
                    <div class='block-fluid table-sorting clearfix'>
	<br/>				

	<h2>LAPORAN KUNJUNGAN PASIEN</h2>
    <form method="post" action="report_transaction_view.php">
  	<table width="525" border="0" height="120" class="laporan">
    <tr height="30">
      <td colspan="3" bgcolor="#CCCCCC">
      	&nbsp;&nbsp;&nbsp;<label>
      	  <input name="berdasar" type="radio" value="Semua Data"  checked /><strong>Semua Data</strong>
        </label>
      </td>
      </tr>
    <tr bgcolor="#CCCCCC" height="30">
      <td width="150">
      	&nbsp;&nbsp;&nbsp;<label>
        	<input name="berdasar" type="radio" value="Tanggal" /><strong>Tanggal</strong>
        </label>
      </td>
      <td><input name="tgl_awal" type="text" id='datepicker' value="Dari" size="12" class="textbox" /></td>
      <td><input name="tgl_akhir" type="text" id='datepicker1' class="textbox" value="Ke" /></td>
      </tr>
    <tr bgcolor="#CCCCCC" height="30">
      <td>
      	&nbsp;&nbsp;&nbsp;
        <label>
      	<input name="berdasar" type="radio" value="Pencarian Kata" /><strong>Pencarian Kata</strong>
        </label>
      </td>
      <td><select name="field" id="field">
          <option value="medis_id">medis_id</option>
          <option value="pasien_nama">pasien_nama</option>
         
         
      </select></td>
      <td><input name="kata" type="text" id="kata" class="textbox" /></td>
      </tr>
    <tr bgcolor="#CCCCCC" height="30">
      <td colspan="3" align="center">
        <input type="submit" name="Submit" id="btn_tampilkan" value="Tampilkan" />      </td>
      </tr>
  </table>
  	<p>&nbsp;</p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>


<br/>	
 </div>
                </div>                                
            </div>            
            <div class='dr'><span></span></div>            
        </div>
    </div>
	
	</center>