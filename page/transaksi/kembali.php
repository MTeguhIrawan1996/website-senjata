<?php

require '../senjata/function.php';

?>

<div class="panel panel-primary">
<div class="panel-heading">
    Jumlah Amunisi Yang di Kembalikan
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form action="" method="POST">
                                    <div class="form-group">
                                            <label for ="jumlah">Masukkan Jumlah Amunisi</label>
                                            <input class="form-control" style="width: 150px"  name="jumlah" id="jumlah" required />
                                            
                                        </div>  

                                     <div>
                                        
                                            <input type="submit" name="simpan" value="Proses" style="margin-top: 5px" class="btn btn-primary">
                                        </div> 


<?php

if (isset($_POST['simpan'])) {

$id =$_GET['id'];
$nosen =$_GET['nomor_seri'];
$noam=$_GET['no_amunisi'];
$jumlah=$_POST['jumlah'];

$sql = $conn->query("UPDATE tb_transaksi SET status='kembali' WHERE id='$id'");

$sql = $conn->query("UPDATE tb_senjata SET jumlah_senpi= (jumlah_senpi+1) WHERE nomor_seri='$nosen'");

$sql = $conn->query("UPDATE tb_amunisi SET jumlah_amunisi= (jumlah_amunisi+$jumlah) WHERE no_amunisi='$noam'");

if($sql) {
				echo "<script> alert ('Proses kembali senjata berhasil') </script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";			
		}

}
?>