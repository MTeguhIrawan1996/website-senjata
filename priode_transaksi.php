<?php

require_once __DIR__ . '/vendor/autoload.php';

    require 'function.php';
    
    if (isset($_POST['proses'])){
    $tgl_a = $_POST['tanggal_a'];
	 $tgl_b = $_POST['tanggal_b'];
	 $senjata = query("SELECT * FROM tb_transaksi WHERE tgl_pinjam BETWEEN '$tgl_a' AND '$tgl_b'");
    }
    
    

    

$mpdf = new \Mpdf\Mpdf();


$html ='<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Report</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
     <div id="logo">
        <img src="polri.png">
      </div>
      <div id="kop" class="clearfix" >
        <div>KEPOLISIAN NEGARA REPUBLIK INDONESIA
        <div>DAERAH KALIMANTAN SELATAN</div>
        <div>BIRO SARANA DAN PRASARANA</div>
        </div>
      <header class="clearfix">
      <h1>Laporan Data Transaksi</h1>';
      
      $html .=
      '<div id="company" class="clearfix">
      <div>Dari Dari Tanggal '.$tgl_a.' Sampai '.$tgl_b.'</div>
        <div>Biro Sarpras Polda Kalsel</div>
        <div>Jalan DI Panjaitan No.17</div>
        <div>Pos 70114</div>
        
      </div>
    </header>
    <main>
      <table>
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
          </tr>';

                                        $i =1;
                                        foreach ($senjata as $data){
                                        
                                        	$html .= 
                                          '<tr>
                                        	<td align="center">'.$i++.'</td>
                                        	<td align="center">'.$data["no_transaksi"].'</td>
                                        	<td align="center">'.$data["nomor_seri"].'</td>
                                        	<td align="center">'.$data["no_amunisi"].'</td>
                                        	<td align="center">'.$data["jumlah"].'</td>
                                          <td align="center">'.$data["nrp"].'</td>
                                          <td align="center">'.$data["nama"].'</td>
                                          <td align="center">'.$data["tgl_pinjam"].'</td>
                                          <td align="center">'.$data["tgl_kembali"].'</td>
                                          <td align="center">'.$data["status"].'</td>
                                        	</tr>';
                                        }

   $html.=
'</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-anggota.pdf', \Mpdf\Output\Destination::INLINE);
?>