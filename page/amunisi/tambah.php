<?php

	require '../senjata/function.php';

	

	$result = mysqli_query($conn, "SELECT max(no_amunisi) as kode FROM tb_amunisi" );
	$row = mysqli_fetch_array($result);
	$kode = substr($row['kode'], 2, 5);
	$tambah = $kode + 1;

	if($tambah<10){
		$id="AM000".$tambah;
	}else{
		$id="AM00".$tambah;
	}
  
	
	if (isset ($_POST["simpan"])){

		if(tambaha($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=amunisi'>";			
		}else{
				echo "<script> alert ('Data gagal Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=amunisi&aksi=tambah'>";
		}

	}
?>

<div class="panel panel-primary">
<div class="panel-heading">
	Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for ="nomor">Kode Amunisi</label>
                                            <input class="form-control" name="nomor" id="nomor" value="<?php echo $id;?>" readonly />
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for ="merk">Jenis</label>
                                            <input class="form-control" name="jenis" id="merk"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for ="kaliber">Kaliber</label>
                                            <input class="form-control" name="kaliber" id="kaliber"/>
                                            
                                        </div>

                                       <div class="form-group">
                                            <label for ="jumlah">Jumlah</label>
                                            <input class="form-control" name="jumlah" id="jumlah" required />
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for= "tanggal">Tanggal Input</label>
                                            <input class="form-control" name="tanggal" type="date" id="tanggal"/>
                                            
                                        </div>
										                                      									
										<div>
										
											<button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Simpan</button>
										</div>
										
										</div>
											</form>
										</div>
</div>
</div>
</div>


