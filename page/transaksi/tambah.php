<?php

require '../senjata/function.php';

    $result = mysqli_query($conn, "SELECT max(no_transaksi) as kode FROM tb_transaksi" );
    $row = mysqli_fetch_array($result);
    $kode = substr($row['kode'], 2, 5);
    $tambah = $kode + 1;

    if($tambah<10){
        $id="TR000".$tambah;
    }else{
        $id="TR00".$tambah;
    }
    

$tgl_pinjam = date("Y-m-d");
$tujuh_hari = mktime(0,0,0, date("n"), date("j")+365, date("Y"));
$kembali = date("Y-m-d",  $tujuh_hari);

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
                                            <label for ="nomor">Nomor Transaksi</label>
                                            <input class="form-control" name="nomor" id="nomor" value="<?php echo $id;?>" readonly />
                                            
                                        </div>

                                        <div class="form-group">
                                        <label>Nomor Senjata</label>    
                                        <select class="form-control" name="nosen">
                                            <?php 

                                            $sql = $conn->query("SELECT * FROM tb_senjata WHERE jumlah_senpi='1' AND kondisi='LP'");

                                            while ($data=$sql->fetch_assoc()) {
                                                echo "<option value='$data[nomor_seri]'>$data[nomor_seri]</option>";
                                            }
                                            ?>
                                        </select>
                                     
                                        </div>

                                        <div class="form-group">

                                        <label>Kode Amunisi</label>    
                                        <select class="form-control" name="noam">
                                            <?php 

                                            $sql = $conn->query("select * from tb_amunisi order by no_amunisi");

                                            while ($data=$sql->fetch_assoc()) {
                                                echo "<option value='$data[no_amunisi]'>$data[no_amunisi]</option>";
                                            }
                                            ?>
                                        </select>
                                     
                                        </div>

                                        <div class="form-group">
                                            <label for ="jumlah">Juamlah Amunisi</label>
                                            <input class="form-control" name="jumlah" id="jumlah" required />
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>Nama</label> 
                                        <select class="form-control" name="nama">
                                            <?php 

                                            $sql = $conn->query("select * from tb_pemohon order by nrp");

                                            while ($data=$sql->fetch_assoc()) {
                                                echo "<option value='$data[nrp].$data[nama_anggota]'>$data[nrp].$data[nama_anggota]</option>";
                                            }
                                            ?>
                                        </select>
                                     
                                        </div>


                                        <div >
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" name="tgl_pinjam" type="text" 
                                            id="tgl" value="<?php echo$tgl_pinjam;?>" readonly />
                                            
                                        </div>

                                         <div >
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" name="tgl_kembali" type="text" 
                                            id="tgl" value="<?php echo$kembali;?>" readonly />
                                            
                                        </div>
                                        
                                        <div>
                                        
                                            <input type="submit" name="simpan" value="Simpan" style="margin-top: 8px" class="btn btn-primary">
                                        </div>
                                        
                                        </div>
                                            </form>
                                        </div>
</div>
</div>
</div>

<?php


    if (isset($_POST['simpan'])) {

        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tgl_kembali = $_POST['tgl_kembali'];
        
        $nomor = $_POST['nomor'];
        $nosen = $_POST['nosen'];
        

        $noam = $_POST['noam'];
        $jumlah= $_POST['jumlah'];
       

        $nama = $_POST['nama'];
        $pecah_nama = explode(".", $nama);
        $nrp = $pecah_nama[0];
        $nama = $pecah_nama[1];


        

        $sql = $conn->query("SELECT * FROM tb_senjata WHERE nomor_seri = '$nosen'");
        while ($data = $sql->fetch_assoc()) {
        $sisa = $data['jumlah_senpi'];
        
            if($sisa == 0) {
                echo "<script> alert ('Senjata Tidak ada Transaksi gagal') </script>";
                echo "<meta http-equiv='refresh' content='0; url=?page=transaksi&aksi=tambah'>";
            }else{
                $sql = $conn->query("INSERT INTO tb_transaksi (no_transaksi,nomor_seri,no_amunisi,jumlah,nrp,nama,tgl_pinjam,tgl_kembali,status)
                    values ('$nomor','$nosen','$noam','$jumlah','$nrp', '$nama', '$tgl_pinjam', '$tgl_kembali', 'pinjam')");

                
                $sql1 = $conn->query("UPDATE tb_senjata SET jumlah_senpi= (jumlah_senpi-1) WHERE nomor_seri ='$nosen'");
                echo "<script> alert ('transaksi berhasil') </script>";
                echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";

            }
        }




    }
?>

