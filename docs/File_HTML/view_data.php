<html>
<head>
	<title>View Data Informasi SPBU</title>
</head>
<body>
	<br><font size="4"><center><b>Informasi SPBU</b></center><font><br>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr bgcolor="#FFA600" height="40">
			<th width="5%">No</th>&nbsp;
			<th width="14%">Kode SPBU</th>&nbsp;
			<th width="12%">Lokasi</th>&nbsp;   
			<th width="25%">Fasilitas</th>&nbsp; 
			<th width="30%">Produk</th>&nbsp; 		
			<th width="14%">Jam Operasional</th>&nbsp;     
		</tr>
	<?php
		include "koneksi.php";
		//view data mahasiswa di dalam database
		$Lihat="SELECT * FROM enkripsi ORDER BY Kode_SPBU";
		$Tampil = mysql_query($Lihat);
		$nomer=0;
		while (	$hasil = mysql_fetch_array ($Tampil)) {
				$Kode_SPBU		= stripslashes ($hasil['Kode_SPBU']);
				$Lokasi			= stripslashes ($hasil['Lokasi']);
				$Fasilitas		= stripslashes ($hasil['Fasilitas']);
				$Produk			= stripslashes ($hasil['Produk']);
				$Jam_Operasional		= stripslashes ($hasil['Jam_Operasional']);
			{
		$nomer++;
	?>
		<tr bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr align="center" height="40">
			<td><?=$nomer?><div align="center"></div></td>
			<td><?=$Kode_SPBU?><div align="center"></div></td>
			<td><?=$Lokasi?><div align="center"></div></td>
			<td><?=$Fasilitas?><div align="center"></div></td>
			<td><?=$Produk?><div align="center"></div></td>
			<td><?=$Jam_Operasional?><div align="center"></div></td>
		</tr>
		<tr bgcolor="#DFE6EF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td> 
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	<?php  
			}
		}
	//Tutup koneksi engine MySQL
		mysql_close($Open);
	?>
	</table>
</body>
</html>