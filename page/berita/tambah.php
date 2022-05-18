<?php

	require '../senjata/function.php';

	
	if (isset ($_POST["simpan"])){

		if(tambahbrt($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=berita'>";			
		}else{
				echo "<script> alert ('Data gagal Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=berita&aksi=tambah'>";
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
                                            <label for ="no">No Berita Acara</label>
                                            <input class="form-control" name="no" id="no" required />
                                            
                                        </div>
										
										<div class="form-group">

                                        <label>Nama</label>	
                                        <select class="form-control" name="nama">
                                        	<?php 

                                        		$sql = $conn->query("select * from tb_pemohon order by nrp");

                                        	while ($data=$sql->fetch_assoc()) {
                                        		echo "<option value='$data[nrp].$data[nama_anggota]'>$data[nrp].$data[nama_anggota]</option>";
                                        	}
                                   
                                        	?>
                                        </select>
                                     
                                        </div>
										
									    <div class="form-group">
                                            <label for ="pangkat">Pangkat</label>
                                            <input class="form-control" name="pangkat" id="pangkat" required />
                                            
                                        </div>   

                                         <div class="form-group">
                                            <label for= "jabatan">Jabatan</label>
                                            <input class="form-control" name="jabatan" id="jabatan"/>
                                            
                                        </div>                                     				
										
										<div class="form-group">
                                            <label for= "kesatuan">Kesatuan</label>
                                            <input class="form-control" name="kesatuan"  id="kesatuan"/>
                                            
                                        </div>

                                        <div class="form-group">

                                        <label>Nomor Senpi</label>    
                                        <select class="form-control" name="nosen">
                                            <?php 

                                            $sql = $conn->query("select * from tb_senjata order by id");

                                            while ($data=$sql->fetch_assoc()) {
                                                echo "<option value='$data[nomor_senpi]'>$data[nomor_senpi]</option>";
                                            }
                                            ?>
                                        </select>
                                     
                                        </div>

                                        <div class="form-group">

                                        <label>Nomor Amunisi</label>    
                                        <select class="form-control" name="noam">
                                            <?php 

                                            $sql = $conn->query("select * from tb_amunisi order by id");

                                            while ($data=$sql->fetch_assoc()) {
                                                echo "<option value='$data[no_amunisi]'>$data[no_amunisi]</option>";
                                            }
                                            ?>
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


