<?php
	$nim = "A22.2020.02814";
	$nama = 'Yuma Mahdi Andika';
	$umur = 19;
	$nilai = 85.55;
	$status = TRUE;
		echo "NIM : " . $nim . "<br>";
		echo "Nama : $nama<br>";
			print "Umur : " . $umur; print "<br>";
			printf ("Nilai : %.3f<br>", $nilai);
	if ($status)
		echo "Status : Aktif";
	else
		echo "Status : Tidak Aktif";
?>