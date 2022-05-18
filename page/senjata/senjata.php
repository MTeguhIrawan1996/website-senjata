<?php

    require '../senjata/function.php';

    $senjata = query("select * from tb_senjata where jumlah_senpi='1'");
    

?>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Senjata
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Nomor Seri</th>
                                            <th>Jenis</th>
                                            <th>Kondisi</th>
                                            <th>Tahun Perolehan</th>
                                            <th>Jumlah</th>
                                            <th>Kaliber</th>
                                            <th>Tanggal Input</th>
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
											<td><?php echo $data['nomor_seri'];?></td>
                                        	<td><?php echo $data['jenis_senpi'];?></td>
                                            <td><?php echo $data['kondisi'];?></td>
                                            <td><?php echo $data['tahun_perolehan'];?></td>
                                            <td><?php echo $data['jumlah_senpi'];?></td>
                                            <td><?php echo $data['kaliber'];?></td>
                                            <td><?php echo $data['tgl_input'];?></td>
                                            
                                            <td>

                                                
												<a href ="?page=senjata&aksi=ubah&nomor_seri=<?php echo $data ['nomor_seri'] ?>" class="btn btn-info" ><i class="fa fa-edit"></i>Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini....???')"
												href ="?page=senjata&aksi=hapus&nomor_seri=<?php echo $data ['nomor_seri'] ?>" class="btn btn-danger" ><i class="fa fa-trash"></i>hapus</a>
                                             </td>   
                                        </tr>
                                        <?php endforeach?>
                                       
                                    </tbody>
                                    </table>
									
                                </div>

                                    <a href="?page=senjata&aksi=tambah" class="btn btn-primary" style= "margin-top: 5px;">Tambah Data</a>

                                    


								</div>
									</div>
									</div>
									</div>
