<?php
	include "koneksi.php";
	//Kirimkan Variabel
	$Kode_SPBU	= $_POST['Kode_SPBU'];
	$Lokasi			= $_POST['Lokasi'];
	$Fasilitas		= $_POST['Fasilitas'];
	$Produk			= $_POST['Produk'];
	$Jam_Operasional		= $_POST['Jam_Operasional'];
	//validasi kode SPBU dalam database
	$cek=mysql_num_rows (mysql_query("SELECT Kode_SPBU FROM informasi spbu WHERE Kode_SPBU='$_POST[Kode_SPBU]'"));
	if ($cek > 0) {
	?>
		<script language="JavaScript">
			alert('Kode SPBU sudah dipakai !, silahkan diulang kembali');
			document.location='Posting.php';
		</script>

	<?php
	}
	//input data ke table informasi SPBU dalam database enkripsi
	$input	="INSERT INTO informasi spbu (Kode_SPBU, Lokasi, Fasilitas, Produk, Jam_Operasional)
			VALUES ('$Kode_SPBU','$Lokasi','$Fasilitas','$Produk','$Jam_Operasional')";
	$query_input =mysql_query($input);
		if ($query_input) {
	//Jika Sukses
	?>
		<script language="JavaScript">
			alert('Data Informasi SPBU Berhasil diinput!');
			document.location='Posting.php';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Data informasi SPBU Gagal diinput, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>