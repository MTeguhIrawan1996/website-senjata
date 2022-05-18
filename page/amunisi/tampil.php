<?php

    require '../senjata/function.php';

    $amunisi = query("select * from tb_amunisi");
    

?>


<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Amunisi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Amunisi</th>
											<th>Jenis</th>
                                            <th>Kaliber</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Input</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no=1;
                                           foreach ($amunisi as $data):

                                        ?>
   			
                                        <tr>
                                        	
                                            <td><?php echo $no++; ?></td>
                                           	<td><?php echo $data['no_amunisi'];?></td>
                                        	<td><?php echo $data['jenis'];?></td>
                                            <td><?php echo $data['kaliber'];?></td>
                                            <td><?php echo $data['jumlah_amunisi'];?></td>
                                            <td><?php echo $data['tgl_input'];?></td>
                                                                                        
                                             
                                        </tr>
                                        <?php endforeach?>
                                       
                                    <tbody>
                                    </table>
									
                                </div>

                                

                                

								</div>
									</div>
									</div>
									</div>									