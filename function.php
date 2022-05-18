<?php

$conn = mysqli_connect("localhost","root","","db_senjata");


function query($query){
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){

		$rows[] = $row;
	}

	return $rows;

}



function tambah($data){

	global $conn;

	$nomor = htmlspecialchars($data['nomor']);
	$jenis = htmlspecialchars($data ['jenis']);
	$kondisi =htmlspecialchars($data ['kondisi']);
	$tahun = htmlspecialchars($data ['tahun']);
	$jumlah = htmlspecialchars($data ['jumlah']);
	$kaliber = htmlspecialchars($data ['kaliber']);
	$tanggal =htmlspecialchars($data ['tanggal']);



	$query= "insert into tb_senjata values ('$nomor','$jenis','$kondisi','$tahun','$jumlah','$kaliber','$tanggal')";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}



function hapus($id){

	global $conn;

	mysqli_query($conn, "delete from tb_senjata where nomor_seri = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data){

	global $conn;

	
	$nomor = htmlspecialchars($data["nomor"]);
	$jenis = htmlspecialchars($data ["jenis"]);
	$kondisi =htmlspecialchars($data ["kondisi"]);
	$tahun = htmlspecialchars($data ["tahun"]);
	$jumlah = htmlspecialchars($data ["jumlah"]);
	$kaliber = htmlspecialchars($data ["kaliber"]);
	$tanggal =htmlspecialchars($data ["tanggal"]);



	$query = "UPDATE tb_senjata SET 
					nomor_seri='$nomor', 
					jenis_senpi='$jenis', 
					kondisi='$kondisi', 
					tahun_perolehan='$tahun', 
					jumlah_senpi='$jumlah',
					kaliber='$kaliber',
					tgl_input= '$tanggal' 
				WHERE nomor_seri = $nomor";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

//amunisi

function tambaha($data){

	global $conn;

	$nomor = htmlspecialchars($data['nomor']);
	$merk = htmlspecialchars($data ['jenis']);
	$kaliber =htmlspecialchars($data ['kaliber']);
	$jumlah =htmlspecialchars($data['jumlah']);
	$tanggal =htmlspecialchars($data['tanggal']);
	
	



	$query= "insert into tb_amunisi values ('','$nomor','$merk','$kaliber','$jumlah','$tanggal')";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);


}

function ubaha($data){

	global $conn;

	$id = $data["id"];
	$nomor = htmlspecialchars($data["nomor"]);
	$merk = htmlspecialchars($data ["jenis"]);
	$kaliber =htmlspecialchars($data ["kaliber"]);
	$jumlah =htmlspecialchars($data ["jumlah"]);
	$tanggal =htmlspecialchars($data ["tanggal"]);
	



	$query = "UPDATE tb_amunisi SET 
					no_amunisi='$nomor', 
					jenis='$merk', 
					kaliber='$kaliber', 
					jumlah_amunisi='$jumlah',
					tgl_input= '$tanggal'

					
				WHERE id = $id";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapusa($id){

	global $conn;

	mysqli_query($conn, "delete from tb_amunisi where id = $id");

	return mysqli_affected_rows($conn);
}

//anggota/pemohon

function tambahag($data){

	global $conn;

	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data ['nama']);
	$pangkat =htmlspecialchars($data ['pangkat']);
	$kesatuan = htmlspecialchars($data ['kesatuan']);
	$tanggal =htmlspecialchars($data ['tanggal']);
	



	$query= "insert into tb_pemohon values ('$nrp','$nama','$pangkat','$kesatuan','$tanggal')";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function ubahag($data){

	global $conn;

	
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data ["nama"]);
	$pangkat =htmlspecialchars($data ["pangkat"]);
	$kesatuan = htmlspecialchars($data ["kesatuan"]);
	$tanggal =htmlspecialchars($data ["tanggal"]);

	



	$query = "UPDATE tb_pemohon SET 
					nrp='$nrp', 
					nama_anggota='$nama', 
					pangkat='$pangkat', 
					kesatuan='$kesatuan',
					tgl_input= '$tanggal' 
				WHERE nrp = $nrp";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function hapusag($id){

	global $conn;

	mysqli_query($conn, "delete from tb_pemohon where nrp = $id");

	return mysqli_affected_rows($conn);
}

//berita

function tambahbrt($data){

	global $conn;



	$no = htmlspecialchars($data['no']);
	
	$nama = ($data['nama']);
	$pecah_nama = explode(".", $nama);
	$nrp = $pecah_nama[0];
	$nama = $pecah_nama[1];


	$pangkat = htmlspecialchars($data ['pangkat']);
	$jabatan =htmlspecialchars($data ['jabatan']);
	$kesatuan = htmlspecialchars($data ['kesatuan']);
	$nosen = htmlspecialchars($data ['nosen']);
	$noam = htmlspecialchars($data ['noam']);
	



	$query= "insert into tb_ba values ('','$no','$nrp','$nama','$pangkat','$jabatan','$kesatuan','$nosen','$noam')";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function hapusba($id){

	global $conn;

	mysqli_query($conn, "delete from tb_ba where id = $id");

	return mysqli_affected_rows($conn);
}

function ubahba($data){

	global $conn;

	$id = $data["id"];
	
	$no = htmlspecialchars($data['no']);
	$nrp = htmlspecialchars($data ['nrp']);
	$nama =htmlspecialchars($data ['nama']);
	$pangkat = htmlspecialchars($data ['pangkat']);
	$jabatan =htmlspecialchars($data ['jabatan']);
	$kesatuan = htmlspecialchars($data ['kesatuan']);
	$nosen = htmlspecialchars($data ['nosen']);
	$noam = htmlspecialchars($data ['noam']);
	



	$query = "UPDATE tb_ba SET 
					no_berita='$no', 
					nrp='$nrp', 
					nama='$nama', 
					pangkat='$pangkat', 
					jabatan='$jabatan',
					kesatuan='$kesatuan',
					no_senpi='$nosen',
					no_amunisi='$noam'
				WHERE id = $id";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

//user

function tambahu($data){

	global $conn;



	$nama = strtolower(stripslashes($data['nama']));
	$username = strtolower(stripslashes($data['username']));
	$email = strtolower(stripslashes($data['email']));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password1 = mysqli_real_escape_string($conn, $data['password1']);
	$level = strtolower(stripslashes($data['level']));
	
	
	if ($password !== $password1){

		echo "<script>
				alert('konfirmasi password tidak sesuai');
				</script>";
			return false;
	}

	

	$query= "insert into tb_user values ('','$nama','$username','$email','$password','$level')";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubahu($data){

	global $conn;

	$id = $data["id"];
	$nama = strtolower(stripslashes($data["nama"]));
	$username = strtolower(stripslashes($data ["username"]));
	$email =strtolower(stripslashes($data ["email"]));
	$password =mysqli_real_escape_string($conn, $data ["password"]);
	$password1 =mysqli_real_escape_string($conn, $data ["password1"]);
	$level = strtolower(stripslashes($data["level"]));
	
if ($password !== $password1){

		echo "<script>
				alert('konfirmasi password tidak sesuai');
				</script>";
			return false;
	}


	$query = "UPDATE tb_user SET 
					nama='$nama', 
					username='$username', 
					email='$email', 
					password='$password',
					level= '$level'
				WHERE id = $id";
		
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapusu($id){

	global $conn;

	mysqli_query($conn, "delete from tb_user where id = $id");

	return mysqli_affected_rows($conn);
}
?>