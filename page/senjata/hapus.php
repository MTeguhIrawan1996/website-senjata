<?php

	require '../senjata/function.php';

	$id = $_GET ["nomor_seri"];
	
	if( hapus ($id) > 0 ){
		
			echo "<script> alert ('Data Berhasil Di hapus') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=senjata'>";			
		}else{
				echo "<script> alert ('Data gagal Di hapus') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=senjata&aksi=hapus'>";
		}


?>