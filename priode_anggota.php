<?php

require_once __DIR__ . '/vendor/autoload.php';

    require 'function.php';
    
    if (isset($_POST['proses'])){
   $tgl_a = $_POST['tanggal_a'];
	 $tgl_b = $_POST['tanggal_b'];
	 $senjata = query("SELECT * FROM tb_pemohon WHERE tgl_input BETWEEN '$tgl_a' AND '$tgl_b'");
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
      <h1>Laporan Data Pemohon</h1>';
      
      $html .=
      '<div id="company" class="clearfix">
      <div>Dari Tanggal '.$tgl_a.' Sampai '.$tgl_b.'</div>
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
            <th>NRP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Satker</th>
            <th>Tanggal</th>
                                        </tr>';

                                        $i =1;
                                        foreach ($senjata as $data){
                                        
                                        	$html .= '<tr>


                                        	<td align="center">'.$i++.'</td>
                                        	<td align="center">'.$data["nrp"].'</td>
                                        	<td align="center">'.$data["nama_anggota"].'</td>
                                        	<td align="center">'.$data["pangkat"].'</td>
                                        	<td align="center">'.$data["kesatuan"].'</td>
                                            <td align="center">'.$data["tgl_input"].'</td>
                                            

                                        	</tr>';
                                        }

   $html.='</table>

</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-anggota.pdf', \Mpdf\Output\Destination::INLINE);
?>