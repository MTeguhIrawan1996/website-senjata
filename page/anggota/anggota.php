<?php

    require '../senjata/function.php';

    $senjata = query("select * from tb_pemohon");
    

?>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Pemohon
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>NRP</th>
                                            <th>Nama</th>
                                            <th>Pangkat</th>
                                            <th>Satker</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no=1;
                                            foreach ($senjata as $data):

                                        ?>
   			
                                        <tr>
                                        	
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['nrp'];?></td>
                                        	<td><?php echo $data['nama_anggota'];?></td>
                                            <td><?php echo $data['pangkat'];?></td>
                                            <td><?php echo $data['kesatuan'];?></td>
                                            <td><?php echo $data['tgl_input'];?></td>                                          
                                            <td>

                                                
												<a href ="?page=anggota&aksi=ubah&nrp=<?php echo $data ['nrp'] ?>" class="btn btn-info" ><i class="fa fa-edit"></i>Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini....???')"
												href ="?page=anggota&aksi=hapus&nrp=<?php echo $data ['nrp'] ?>" class="btn btn-danger" ><i class="fa fa-trash"></i>hapus</a>
                                             </td>   
                                        </tr>
                                        <?php endforeach?>
                                       
                                    <tbody>
									</table>

                                </div>
                                <a href="?page=anggota&aksi=tambah" class="btn btn-primary" style= "margin-top: 5px;"><i class="fa fa-plus"></i>Tambah Data</a>


                                
								</div>
									</div>
									</div>
									</div>									