<?php

	require '../senjata/function.php';

	$id = $_GET["nomor_seri"];

	$in = query ("SELECT * FROM tb_senjata WHERE nomor_seri= $id")[0];

	$kondisi = $in ['kondisi'];

	$tahun1 = $in ['tahun_perolehan'];
	
	if (isset ($_POST["ubah"])){

		if( ubah($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di ubah') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=senjata'>";			
		}else{
				echo "<script> alert ('Data gagal Di ubah') </script>";
				echo "<meta http-equiv='refresh'; url=?page=senjata&aksi=ubah'>";
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
                                            <label for ="nomor">Nomor Senpi</label>
                                            <input class="form-control" name="nomor" id="nomor"  readonly  value="<?php echo $in['nomor_seri']; ?>"/>
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for ="jenis">Jenis</label>
                                            <input class="form-control" name="jenis" id="jenis"  required  value="<?php echo $in['jenis_senpi']; ?>"/>
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for = "kondisi">Kondisi</label>
                                            <select class="form-control" name="kondisi" id="kondisi">
                                                <option value="LP" <?php if ($kondisi=='LP'){echo "selected";}?>>Layak Pakai</option>
                                                <option value="TLP" <?php if ($kondisi=='TLP'){echo "selected";}?>>Tidak Layak Pakai</option>
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label for = "tahun">Tahun Perolehan</label>
                                            <select class="form-control" name="tahun" id="tahun">
                                                <?php
													$tahun = date("Y");
													for ($i=$tahun-30; $i <= $tahun; $i++) {
														if ($i==$tahun1){
															
														echo'<option value="',$i,'" selected >',$i,'</option>';
															
														}else{
														
														echo'<option value="' ,$i,'">',$i,'</option>';
														}
													
													}
												?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for ="jumlah">Juamlah</label>
                                            <input class="form-control" name="jumlah" id="jumlah" value="<?php echo $in['jumlah_senpi']; ?>" required readonly />
                                            
                                        </div>  

                                        <div class="form-group">
                                            <label for ="kaliber">Kaliber</label>
                                            <input class="form-control" name="kaliber" id="kaliber" value="<?php echo $in['kaliber']; ?>"/>
                                            
                                        </div>                                      				
										
										<div class="form-group">
                                            <label for= "tanggal">Tanggal Input</label>
                                            <input class="form-control" name="tanggal" type="date" id="tanggal" value="<?php echo $in['tgl_input']; ?>"/>
                                            
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


