<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title></title>
	<script src="odontograma_archivos/jquery-1.js" type="text/javascript"></script>
	<script src="odontograma_archivos/jquery.js" type="text/javascript"></script>
	<script src="odontograma_archivos/jquery_002.js" type="text/javascript"></script>
	<script src="odontograma_archivos/jquery_004.js" type="text/javascript"></script>
	<script src="odontograma_archivos/jquery_003.js" type="text/javascript"></script>
	<style type="text/css">
td
{
	padding:0px 25px;
	border:1px solid BLACK;
}
body {
	color:#315567;
	background-color:#99CCFF;
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
</style>
</head>
<body>
<?php
			  
	$pesan="SELECT * FROM odontogram WHERE nama_pasien='$_GET[id]'";
		$query=mysql_query($pesan);
		$d=mysql_fetch_array($query);
		
		$m=mysql_fetch_array(mysql_query("SELECT * FROM medis WHERE medis.pasien_nama='$_GET[id]'"));
			?>
<table border="1">
	<tbody><tr>
	  <td colspan="2">&nbsp;</td>
	</tr>
<tr>
		<td>
			<div style="line-height:30px;height:30px;">Nama Pasien  :<b><?php echo"$_GET[id]"; ?></b>
			</div>
			<div style="line-height:30px;height:30px;">dokter  :<b><?php echo"$m[dokter_nama]"; ?></b>
			</div>
			<div style="line-height:30px;height:30px;">Tgl Periksa :<b><?php echo"$m[tgl_medis]"; ?></b>
			</div>
			<div id="svgselect" style="width: 610px; height: 230px;"> <!-- background-color:red -->
			
							
			<svg version="1.1" height="100%" width="100%">
					<g transform="scale(1.5)" id="gmain">
						<g id="P18">
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P18T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P18B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P18R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P18L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P18C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">18</text>
						</g>
						<g id="P17" transform="translate(25,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P17C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P17T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P17B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P17R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P17L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">17</text>
						</g>
						<g id="P16" transform="translate(50,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P16C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P16T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P16B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P16R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P16L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">16</text>
						</g>
						<g id="P15" transform="translate(75,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P15C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P15T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P15B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P15R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P15L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">15</text>
						</g>
						<g id="P14" transform="translate(100,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P14C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P14T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P14B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P14R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P14L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">14</text>
						</g>
						<g id="P13" transform="translate(125,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P13C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P13T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P13B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P13R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P13L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">13</text>
						</g>
						<g id="P12" transform="translate(150,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P12C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P12T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P12B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P12R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P12L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">12</text>
						</g>
						<g id="P11" transform="translate(175,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P11C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P11T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P11B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P11R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P11L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">11</text>
						</g>
						
						<!-- Izquierda segunda fila -->
				
						<g id="P55" transform="translate(75,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P55C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P55T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P55B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P55R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P55L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">55</text>
						</g>
						<g id="P54" transform="translate(100,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P54C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P54T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P54B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P54R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P54L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">54</text>
						</g>
						<g id="P53" transform="translate(125,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P53C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P53T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P53B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P53R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P53L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">53</text>
						</g>
						<g id="P52" transform="translate(150,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P52C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P52T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P52B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P52R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P52L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">52</text>
						</g>
						<g id="P51" transform="translate(175,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P51C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P51T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P51B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P51R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P51L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">51</text>
						</g>
				
						<!-- Izquierda tercer fila -->
				
						<g id="P85" transform="translate(75,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P85C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P85T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P85B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P85R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P85L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">85</text>
						</g>
						<g id="P84" transform="translate(100,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P84C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P84T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P84B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P84R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P84L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">84</text>
						</g>
						<g id="P83" transform="translate(125,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P83C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P83T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P83B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P83R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P83L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">83</text>
						</g>
						<g id="P82" transform="translate(150,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P82C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P82T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P82B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P82R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P82L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">82</text>
						</g>
						<g id="P81" transform="translate(175,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P81C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P81T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P81B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P81R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P81L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">81</text>
						</g>
				
						<!-- Izquierda cuarta fila -->
				
						<g id="P48" transform="translate(0,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P48C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P48T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P48B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P48R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P48L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">48</text>
						</g>
						<g id="P47" transform="translate(25,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P47C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P47T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P47B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P47R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P47L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">47</text>
						</g>
						<g id="P46" transform="translate(50,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P46C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P46T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P46B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P46R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P46L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">46</text>
						</g>
						<g id="P45" transform="translate(75,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P45C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P45T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P45B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P45R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P45L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">45</text>
						</g>
						<g id="P44" transform="translate(100,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P44C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P44T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P44B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P44R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P44L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">44</text>
						</g>
						<g id="P43" transform="translate(125,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P43C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P43T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P43B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P43R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P43L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">43</text>
						</g>
						<g id="P42" transform="translate(150,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P42C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P42T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P42B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P42R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P42L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">42</text>
						</g>
						<g id="P41" transform="translate(175,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P41C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P41T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P41B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P41R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P41L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">41</text>
						</g>
						
						<!-- Derecha primer fila -->
						
						<g id="P21" transform="translate(210,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P21C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P21T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P21B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P21R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P21L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">21</text>
						</g>
						<g id="P22" transform="translate(235,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P22C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P22T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P22B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P22R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P22L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">22</text>
						</g>
						<g id="P23" transform="translate(260,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P23C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P23T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P23B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P23R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P23L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">23</text>
						</g>
						<g id="P24" transform="translate(285,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P24C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P24T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P24B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P24R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P24L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">24</text>
						</g>
						<g id="P25" transform="translate(310,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P25C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P25T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P25B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P25R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P25L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">25</text>
						</g>
						<g id="P26" transform="translate(335,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P26C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P26T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P26B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P26R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P26L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">26</text>
						</g>
						<g id="P27" transform="translate(360,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P27C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P27T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P27B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P27R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P27L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">27</text>
						</g>
						<g id="P28" transform="translate(385,0)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P28C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P28T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P28B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P28R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P28L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">28</text>
						</g>
						
						<!-- Derecha segunda fila -->
						
						<g id="P61" transform="translate(210,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P61C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P61T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P61B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P61R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P61L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">61</text>
						</g>
						<g id="P62" transform="translate(235,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P62C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P62T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P62B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P62R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P62L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">62</text>
						</g>
						<g id="P63" transform="translate(260,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P63C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P63T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P63B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P63R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P63L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">63</text>
						</g>
						<g id="P64" transform="translate(285,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P64C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P64T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P64B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P64R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P64L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">64</text>
						</g>
						<g id="P65" transform="translate(310,40)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P65C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P65T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P65B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P65R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P65L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">65</text>
						</g>
						
						<!-- Derecha tercer fila -->
						
						<g id="P71" transform="translate(210,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P71C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P71T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P71B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P71R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P71L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">71</text>
						</g>
						<g id="P72" transform="translate(235,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P72C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P72T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P72B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P72R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P72L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">72</text>
						</g>
						<g id="P73" transform="translate(260,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P73C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P73T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P73B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P73R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P73L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">73</text>
						</g>
						<g id="P74" transform="translate(285,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P74C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P74T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P74B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P74R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P74L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">74</text>
						</g>
						<g id="P75" transform="translate(310,80)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P75C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P75T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P75B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P75R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P75L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">75</text>
						</g>
						
						<!-- Derecha cuarta fila -->
						
						<g id="P31" transform="translate(210,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P31C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P31T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P31B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P31R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P31L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">31</text>
						</g>
						<g id="P32" transform="translate(235,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P32C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P32T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P32B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P32R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P32L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">32</text>
						</g>
						<g id="P33" transform="translate(260,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P33C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P33T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P33B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P33R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P33L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">33</text>
						</g>
						<g id="P34" transform="translate(285,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P34C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P34T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P34B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P34R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P34L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">34</text>
						</g>
						<g id="P35" transform="translate(310,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P35C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P35T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P35B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P35R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P35L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">35</text>
						</g>
						<g id="P36" transform="translate(335,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P36C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P36T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P36B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P36R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P36L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>
							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">36</text>
						</g>
						<g id="P37" transform="translate(360,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P37C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P37T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P37B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P37R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P37L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>

							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">37</text>
						</g>
						<g id="P38" transform="translate(385,120)">
							<polygon points="5,5 	15,5 	15,15 	5,15" fill="<?php echo"$d[P38C]"; ?>" stroke="navy" stroke-width="0.5" id="C" opacity="1"></polygon>
							<polygon points="0,0 	20,0 	15,5 	5,5" fill="<?php echo"$d[P38T]"; ?>" stroke="navy" stroke-width="0.5" id="T" opacity="1"></polygon>
							<polygon points="5,15 	15,15 	20,20 	0,20" fill="<?php echo"$d[P38B]"; ?>" stroke="navy" stroke-width="0.5" id="B" opacity="1"></polygon>
							<polygon points="15,5 	20,0 	20,20 	15,15" fill="<?php echo"$d[P38R]"; ?>" stroke="navy" stroke-width="0.5" id="R" opacity="1"></polygon>
							<polygon points="0,0 	5,5 	5,15 	0,20" fill="<?php echo"$d[P38L]"; ?>" stroke="navy" stroke-width="0.5" id="L" opacity="1"></polygon>

							<text x="6" y="30" stroke="navy" fill="navy" stroke-width="0.1" style="font-size: 6pt;font-weight:normal">38</text>
						</g>
					</g>
				</svg>
			</div>
			 <td>
			  <li>biru : belum erupsi</li> 
			  <li>pink : sudah dicabut</li>
			  <li>hijau : goyah</li>
			  <li>merah : tambalan</li>
<li>			  ungu : karies</li>
<li>			  gold : gigi tiruan</li>
<li>			  putih : gigi sehat</li>
			  </td>
			  </div>
		</td>
		
</body>
</html>
