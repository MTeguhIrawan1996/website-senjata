<?php


	require '../senjata/function.php';
	
	if (isset ($_POST["simpan"])){

		if(tambahu($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=user'>";			
		}else{
				echo "<script> alert ('Data gagal Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=user&aksi=tambah'>";
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
                                            <label for ="Nama">Nama</label>
                                            <input class="form-control" name="nama" id="Nama" required />
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for ="nama">Username</label>
                                            <input class="form-control" name="username" id="nama" required />
                                            
                                        </div>
										
									    <div class="form-group">
                                            <label for ="pangkat">Email</label>
                                            <input class="form-control" name="email" id="pangkat" required />
                                            
                                        </div>   

                                        <div class="form-group">
                                            <label for= "tanggal">Password</label>
                                            <input class="form-control" name="password" type="password" id="tanggal"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for= "tanggal">Konfirmasi Password</label>
                                            <input class="form-control" name="password1" type="password" id="tanggal"/>
                                            
                                        </div>
                                   				
										
										<div class="form-group">
                                            <label for= "kesatuan">Level</label>
                                            <select class="form-control" name="level"  id="kesatuan" required >

                                            	<option value="1">Admin</option>
                                                <option value="2">Gudang</option>
                                                

                                                
                                            </select>
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


