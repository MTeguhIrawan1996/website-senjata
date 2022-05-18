<?php

	require '../senjata/function.php';


	
	if (isset ($_POST["simpan"])){

		if(tambah($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=senjata'>";			
		}else{
				echo "<script> alert ('Data gagal Di Simpan') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=senjata&aksi=tambah'>";
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
                                            <label for ="nomor">Nomor Seri</label>
                                            <input class="form-control" name="nomor" id="nomor" required />
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for ="jenis">Jenis</label>
                                            <input class="form-control" name="jenis" id="jenis" required />
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for = "kondisi">Kondisi</label>
                                            <select class="form-control" name="kondisi" id="kondisi">
                                                <option value="LP">Layak Pakai</option>
                                                <option value="TLP">Tidak Layak Pakai</option>
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label for = "tahun">Tahun Perolehan</label>
                                            <select class="form-control" name="tahun" id="tahun">
                                                <?php
													$tahun = date("Y");
													for ($i=$tahun-30; $i <= $tahun; $i++) {
														echo'
														<option value="' ,$i,'">',$i,'</option>';
													}
												?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for ="jumlah">Juamlah</label>
                                            <input class="form-control" name="jumlah" id="jumlah"  value="<?php echo 1 ?>" readonly />
                                            
                                        </div>   

                                         <div class="form-group">
                                            <label for= "kaliber">Kaliber</label>
                                            <input class="form-control" name="kaliber" id="kaliber"/>
                                            
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


