<?php

	require '../senjata/function.php';

	$id = $_GET["nrp"];

	$in = query ("SELECT * FROM tb_pemohon WHERE nrp= $id")[0];


	if (isset ($_POST["ubah"])){

		if( ubahag($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di ubah') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";			
		}else{
				echo "<script> alert ('Data gagal Di ubah') </script>";
				echo "<meta http-equiv='refresh'; url=?page=anggota&aksi=ubah'>";
		}

	}
?>

<div class="panel panel-primary">
<div class="panel-heading">
	Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form action="" method="POST">
                                    	
                                        
                                        <div class="form-group">
                                            <label for ="nrp">NRP</label>
                                            <input class="form-control" name="nrp" id="nrp" readonly value="<?php echo $in['nrp']; ?>"/>
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for ="nama">nama</label>
                                            <input class="form-control" name="nama" id="nama"  required  value="<?php echo $in['nama_anggota']; ?>"/>
                                            
                                        </div>
									

                                        <div class="form-group">
                                            <label for ="pangkat">Pangkat</label>
                                            <input class="form-control" name="pangkat" id="pangkat" value="<?php echo $in['pangkat']; ?>" required  />
                                            
                                        </div>  
                                  				
										
										<div class="form-group">
                                            <label for= "kesatuan">Satker</label>
                                            <select class="form-control" name="kesatuan"  id="kesatuan" required >

                                            	<option value="DIR INTELKAM">DIR INTELKAM</option>
                                                <option value="BID PROPAM">BID PROPAM</option>
                                                <option value="DIT RESKRIM UM">DIT RESKRIM UM</option>
                                                <option value="DIT RESKRIM SUS">DIT RESKRIM SUS</option>
                                                <option value="BRIMOB">BRIMOB</option>

                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for= "tanggal">Tanggal Input</label>
                                            <input class="form-control" name="tanggal" type="date" id="tanggal" value="<?php echo $in['tgl_input']; ?>" readonly/>
                                            
                                        </div>
										
										<div>
										
											<button type="submit" name="ubah" value="Ubah" class="btn btn-primary">Ubah</button>
										</div>
										
										</div>
											</form>
										</div>
</div>
</div>
</div>


