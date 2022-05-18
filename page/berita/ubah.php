<?php

	require '../senjata/function.php';

	$id = $_GET["id"];

	$in = query ("SELECT * FROM tb_ba WHERE id= $id")[0];


	if (isset ($_POST["ubah"])){

		if( ubahba($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di ubah') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=berita'>";			
		}else{
				echo "<script> alert ('Data gagal Di ubah') </script>";
				echo "<meta http-equiv='refresh'; url=?page=berita&aksi=ubah'>";
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
                                            <label for ="no">Nomor Berita Acara</label>
                                            <input class="form-control" name="no" id="no" readonly value="<?php echo $in['no_berita']; ?>"/>
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for ="nrp">NRP</label>
                                            <input class="form-control" name="nrp" id="nrp"  readonly  value="<?php echo $in['nrp']; ?>"/>
                                            
                                        </div>

                                    	<div class="form-group">
                                            <label for ="nama">Nama</label>
                                            <input class="form-control" name="nama" id="nama" value="<?php echo $in['nama']; ?>" required  />
                                            
                                        </div>      
									

                                        <div class="form-group">
                                            <label for ="pangkat">Pangkat</label>
                                            <input class="form-control" name="pangkat" id="pangkat" value="<?php echo $in['pangkat']; ?>" required  />
                                            
                                        </div>  

                                        <div class="form-group">
                                            <label for ="jabatan">Jabatan</label>
                                            <input class="form-control" name="jabatan" id="jabatan" value="<?php echo $in['jabatan']; ?>"/>
                                            
                                        </div>                                      				
										
										<div class="form-group">
                                            <label for= "kesatuan">Kesatuan</label>
                                            <input class="form-control" name="kesatuan" id="kesatuan" value="<?php echo $in['kesatuan']; ?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for= "nosen">Nomor Senpi</label>
                                            <input class="form-control" name="nosen" id="nosen" value="<?php echo $in['no_senpi']; ?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for= "noam">Nomor Amunisi</label>
                                            <input class="form-control" name="noam" id="noam" value="<?php echo $in['no_amunisi']; ?>"/>
                                            
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


