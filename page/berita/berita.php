<?php

    require '../senjata/function.php';

    $senjata = query("select * from tb_ba");
    

?>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Berita Acara
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
											<th>Nomor Berita Acara</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>Pangkat</th>
                                            <th>Jabatan</th>
                                            <th>Kesatuan</th>
                                            <th>No Senjata Api</th>
                                            <th>No Amunisi</th>
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
                                            <td><?php echo $data['no_berita'];?></td>
                                            <td><?php echo $data['nrp'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['pangkat'];?></td>
                                            <td><?php echo $data['jabatan'];?></td>
                                            <td><?php echo $data['kesatuan'];?></td>
                                            <td><?php echo $data['no_senpi'];?></td>
                                            <td><?php echo $data['no_amunisi'];?></td>
                                            <td>

                                                
                                                <a href ="?page=berita&aksi=ubah&id=<?php echo $data ['id'] ?>" class="btn btn-info" ><i class="fa fa-edit"></i>Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini....???')"
                                                href ="?page=berita&aksi=hapus&id=<?php echo $data ['id'] ?>" class="btn btn-danger" ><i class="fa fa-trash"></i>hapus</a>
                                             </td>   
                                        </tr>
                                        <?php endforeach?>
                                       
                                    </tbody>
                                    </table>
									
                                </div>

                                    <a href="?page=berita&aksi=tambah" class="btn btn-primary" style= "margin-top: 5px;">Tambah Data</a>

                                    <a href="../senjata/cetak_berita.php" target="_blank" class="btn btn-default" style="margin-top: 5px;"><i class="fa fa-print"></i>ExportToPDF<a/>

								</div>

									</div>
									</div>
									</div>									