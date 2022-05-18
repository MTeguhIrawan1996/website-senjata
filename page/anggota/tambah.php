<?php


	require '../senjata/function.php';
	
	if (isset ($_POST["simpan"])){

		if(tambahag($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";			
		}else{
				echo "<script> alert ('Data gagal Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=anggota&aksi=tambah'>";
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
                                            <label for ="nrp">NRP</label>
                                            <input class="form-control" name="nrp" id="nrp" required />
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for ="nama">Nama</label>
                                            <input class="form-control" name="nama" id="nama" required />
                                            
                                        </div>
										
									    <div class="form-group">
                                            <label for ="pangkat">Pangkat</label>
                                            <input class="form-control" name="pangkat" id="pangkat" required />
                                            
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


