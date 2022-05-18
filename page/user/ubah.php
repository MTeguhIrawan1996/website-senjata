<?php

	require '../senjata/function.php';

	$id = $_GET["id"];

	$in = query ("SELECT * FROM tb_user WHERE id= $id")[0];

	$tampil = $in ['level'];


	if (isset ($_POST["ubah"])){

		if( ubahu($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di ubah') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=user'>";			
		}else{
				echo "<script> alert ('Data gagal Di ubah') </script>";
				echo "<meta http-equiv='refresh'; url=?page=user&aksi=ubah'>";
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
                                    	
                                        <input type="hidden" name="id" value="<?php echo $in["id"];?>">
                                        
										
										<div class="form-group">
                                            <label for ="nama">nama</label>
                                            <input class="form-control" name="nama" id="nama"  required  value="<?php echo $in['nama']; ?>"/>
                                            
                                        </div>
									

                                        <div class="form-group">
                                            <label for ="pangkat">Username</label>
                                            <input class="form-control" name="username" id="pangkat" required value="<?php echo $in['username']; ?>"   />
                                            
                                        </div>  
                                  				
										
										<div class="form-group">
                                            <label for= "kesatuan">Email</label>
                                            <input class="form-control" name="email" id="kesatuan" required value="<?php echo $in['email']; ?>"/>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for= "tanggal">Password Baru</label>
                                            <input class="form-control" name="password" type="password" id="tanggal" required />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for= "tanggal">Konfirmasi Password</label>
                                            <input class="form-control" name="password1" type="password" id="tanggal" required />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for = "kondisi">Level</label>
                                            <select class="form-control" name="level" id="kondisi">
                                                <option value="1" <?php if ($tampil=='1'){echo "selected";}?>>Admin</option>
                                                <option value="2" <?php if ($tampil=='2'){echo "selected";}?>>Gudang</option>
                                            </select>
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


