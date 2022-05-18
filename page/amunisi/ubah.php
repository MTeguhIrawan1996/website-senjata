<?php

	require '../senjata/function.php';

	$id = $_GET['id'];

	$in = query ("SELECT * FROM tb_amunisi WHERE id= $id")[0];

	$kondisi = $in ['kondisi'];
	
	if (isset ($_POST["ubah"])){

		if( ubaha($_POST) > 0 ){

				echo "<script> alert ('Data Berhasil Di ubah') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=amunisi'>";			
		}else{
				echo "<script> alert ('Data gagal Di ubah') </script>";
				echo "<meta http-equiv='refresh'; url=?page=amunisi&aksi=ubah'>";
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
                                            <label for ="nomor">Kode Amunisi</label>
                                            <input class="form-control" name="nomor" id="nomor"  readonly value="<?php echo $in['no_amunisi']; ?>"/>
                                            
                                        </div>
										
										<div class="form-group">
                                            <label for ="merk">Jenis</label>
                                            <input class="form-control" name="jenis" id="merk"  required  value="<?php echo $in['jenis']; ?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for ="kalibr">Kaliber</label>
                                            <input class="form-control" name="kaliber" id="kaliber"  required  value="<?php echo $in['kaliber']; ?>"/>
                                            
                                        </div>

                                         <div class="form-group">
                                            <label for ="jumlah">Juamlah</label>
                                            <input class="form-control" name="jumlah" id="jumlah" value="<?php echo $in['jumlah_amunisi']; ?>" required />
                                            
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


