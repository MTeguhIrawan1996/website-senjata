<?php

	require '../senjata/function.php';

	$id = $_GET ["nrp"];
	
	if( hapusag($id) > 0 ){
		
		echo "<script> alert ('Data Berhasil Di hapus') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";			
		}else{
				echo "<script> alert ('Data gagal Di hapus') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=anggota&aksi=hapus'>";
		}


?>