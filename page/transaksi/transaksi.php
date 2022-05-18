<?php

    require '../senjata/function.php';

    $senjata = query("select * from tb_transaksi where status ='pinjam'");
    

?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Transaksi</th>
                                            <th>Nomor Senpi</th>
                                            <th>Nomor Amunisi</th>
                                            <th>jumlah Amunisi</th>
											<th>NRP</th>
                                            <th>Nama</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
											<th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    
									
									<?php
										$no = 1;
										foreach ($senjata as $data) :											
																			
									?>
                                        <tr>
                                        	<td><?php echo $no++; ?></td>
                                            <td><?php echo $data['no_transaksi'];?></td>
											<td><?php echo $data['nomor_seri'];?></td>
                                            <td><?php echo $data['no_amunisi'];?></td>
                                            <td><?php echo $data['jumlah'];?></td>
                                            <td><?php echo $data['nrp'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['tgl_pinjam'];?></td>
                                            <td><?php echo $data['tgl_kembali'];?></td>
											<td><?php echo $data['status'];?></td>
											<td>
                                            
												<a href ="?page=transaksi&aksi=kembali&id=<?php echo $data ['id']; ?>&nomor_seri=<?php echo $data['nomor_seri'] ?>&no_amunisi=<?php echo $data['no_amunisi']?>" class="btn btn-info">Kembali</a>
                                                
                                            </td>
                                        </tr>
                                        
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                                   
									
                                </div>

                                    <a href="?page=transaksi&aksi=tambah" class="btn btn-primary" style= "margin-top: 5px;">Tambah Data</a>

                                    

                                </div>
                                    </div>
                                    </div>
                                    </div>
																	