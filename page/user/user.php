<?php

    require '../senjata/function.php';

    $senjata = query("select * from tb_user");
    

?>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Admin
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
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
											<td><?php echo $data['nama'];?></td>
                                        	<td><?php echo $data['username'];?></td>
                                            <td><?php echo $data['email'];?></td>
                                                                                      
                                            <td>

                                                
												<a href ="?page=user&aksi=ubah&id=<?php echo $data ['id'] ?>" class="btn btn-info" ><i class="fa fa-edit"></i>Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini....???')"
												href ="?page=user&aksi=hapus&id=<?php echo $data ['id'] ?>" class="btn btn-danger" ><i class="fa fa-trash"></i>hapus</a>
                                             </td>   
                                        </tr>
                                        <?php endforeach?>
                                       
                                    <tbody>
									</table>

                                </div>
                                <a href="?page=user&aksi=tambah" class="btn btn-primary" style= "margin-top: 5px;"><i class="fa fa-plus"></i>Tambah Data</a>


                                
								</div>
									</div>
									</div>
									</div>									