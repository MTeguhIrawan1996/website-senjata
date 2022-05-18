<?php

	require '../senjata/function.php';

	$id = $_GET ["id"];
	
	if( hapusba($id) > 0 ){
		
		echo "<script> alert ('Data Berhasil Di hapus') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=berita'>";			
		}else{
				echo "<script> alert ('Data gagal Di hapus') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=berita&aksi=hapus'>";
		}


?>