<?php

session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}


?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Program PKL</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Menu</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">Selamat Datang <?php echo $_SESSION["akun_username"]  ?>, <?php echo date("d-M-Y");?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <?php
                if ($_SESSION['akun_level']=='1'){
                ?>

                <ul class="nav" id="main-menu">				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-home fa-3x"></i> HOME</a>
                    </li>

                    <li>
                        <a  href="?page=user"><i class="fa fa-users fa-3x"></i> User</a>
                    </li>
                    
                     <li>
                        <a  href="?page=anggota"><i class="fa fa-laptop fa-3x"></i> Data Pemohon</a>
                    </li>
                    
                     <li>
                        <a  href="?page=senjata"><i class="fa fa-bar-chart-o fa-3x"></i> Data Senjata</a>
                    </li>

                    <li>
                        <a  href="?page=amunisi"><i class="fa fa-bar-chart-o fa-3x"></i> Data Amunisi</a>
                    </li>

                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-dashboard fa-3x"></i> Transaksi</a>
                    </li>

                    <!--<li>
                        <!-<a  href="?page=berita"><i class="fa fa-dashboard fa-3x"></i> Input Berita Acara</a>
                    </li>-->
                    
                    <li>
                        <a href="#"><i class="fa fa-edit fa-3x"> </i> Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#" target="_blank">Laporan Pemohon<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="?page=laporan_anggota" >Cari Priode</a>
                                    </li>
                                    <li>
                                        <a href="?page=laporan_satker">Cari Satker</a>
                                    </li>
                                    <!--<li>
                                        <a href="/senjata/page/laporan/cetak_anggota_bidpropam.php" target="_blank">BID PROPAM</a>
                                    </li>
                                    <li>
                                        <a href="/senjata/page/laporan/cetak_anggota_diteskrimum.php" target="_blank">DIT RESKRIM UM</a>
                                    </li>
                                    <li>
                                        <a href="/senjata/page/laporan/cetak_anggota_ditreskrimsus.php" target="_blank">DIT RESKRIM SUS</a>
                                    </li>

                                    <li>
                                        <a href="/senjata/page/laporan/cetak_anggota_brimob.php" target="_blank">BRIMOB</a>
                                    </li>-->

                                </ul>
                            </li>

                            <li>
                                <a href="#">Laporan Senjata<span class="fa arrow"></span></a>
                                 <ul class="nav nav-third-level">
                                    <li>
                                        <a href="?page=laporan" >Cari Priode</a>
                                    </li>
                                 </ul>
                            </li>

                            <li>
                                <a href="#">Laporan Amunisi<span class="fa arrow"></span></a>
                                 <ul class="nav nav-third-level">
                                    <li>
                                        <a href="?page=laporan_amunisi" >Cari Priode</a>
                                    </li>
                                 </ul>
                            </li>

                            <li>
                                <a href="#">Laporan Transaksi<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="?page=laporan_transaksi" >Cari Priode</a>
                                    </li>
                                    <li>
                                        <a href="?page=laporan_transaksi_status">Cari Status</a>
                                    </li>
                                    
                                    

                                </ul>
                               
                            </li>
                        </ul>
                      </li>
                                         	
                </ul>
               
               <?php } ?>

               <?php
                if ($_SESSION['akun_level']=='2'){
                ?>
               <ul class="nav" id="main-menu">  

                        
                    
                    <li>
                        <a  href="index.php"><i class="fa fa-home fa-3x"></i> HOME</a>
                    </li>
                    
                     <!--<li>
                        <a  href="?page=anggota"><i class="fa fa-dashboard fa-3x"></i> Input Data Pemohon</a>
                    </li>-->
                    
                     <li>
                        <a  href="?page=senjata"><i class="fa fa-laptop fa-3x"></i> Input Data Senjata</a>
                    </li>

                    <li>
                        <a  href="?page=amunisi"><i class="fa fa-laptop fa-3x"></i> Input Data Amunisi</a>
                    </li>

                    <!--<li>
                        <a  href="?page=transaksi"><i class="fa fa-dashboard fa-3x"></i> Transaksi</a>
                    </li>-->

                    <!--<li>
                        <!-<a  href="?page=berita"><i class="fa fa-dashboard fa-3x"></i> Input Berita Acara</a>
                    </li>-->
                    
                    <!--<li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#" target="_blank">Laporan Pemohon<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="/senjata/page/laporan/cetak_anggota_intelkem.php" target="_blank">DIR INTELKAM</a>
                                    </li>
                                    <li>
                                        <a href="/senjata/page/laporan/cetak_anggota_bidpropam.php" target="_blank">BID PROPAM</a>
                                    </li>
                                    <li>
                                        <a href="/senjata/page/laporan/cetak_anggota_diteskrimum.php" target="_blank">DIT RESKRIM UM</a>
                                    </li>
                                    <li>
                                        <a href="/senjata/page/laporan/cetak_anggota_ditreskrimsus.php" target="_blank">DIT RESKRIM SUS</a>
                                    </li>

                                    <li>
                                        <a href="/senjata/page/laporan/cetak_anggota_brimob.php" target="_blank">BRIMOB</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Laporan Senjata<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="#">Laporan Transaksi<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="../senjata/cetak_transaksi_pinjam.php" target="_blank">Pinjam</a>
                                    </li>
                                    <li>
                                        <a href="../senjata/cetak_transaksi_kembali.php" target="_blank">Kembali</a>
                                    </li>
                                    

                                </ul>
                               
                            </li>
                        </ul>
                      </li>-->
                                            
                </ul>
                <?php } ?>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       
                       <?php

                           error_reporting(E_ALL ^ E_WARNING|| E_NOTICE );
                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];
                            
                            if ($_SESSION['akun_level']=='2'){
                            if ($page == "senjata") {
                                if($aksi == "") {
                                    include "page/senjata/senjata.php";
                            }elseif ($aksi== "tambah"){
                                    include "page/senjata/tambah.php";                                                 
                            }elseif ($aksi== "hapus"){
                                    include "page/senjata/hapus.php";                          
                            }elseif ($aksi== "ubah"){
                                    include "page/senjata/ubah.php";
                            }
                            
                            }elseif ($page == 'amunisi' ) {
                                if ($aksi == "") {
                                    include "page/amunisi/amunisi.php";
                            }elseif ($aksi== "tambah"){
                                    include "page/amunisi/tambah.php";  
                            }elseif ($aksi== "ubah"){
                                    include "page/amunisi/ubah.php";
                            }elseif ($aksi== "hapus"){
                                    include "page/amunisi/hapus.php";                           
                            }

                            }elseif ($page == '' ) {
                                
                                    include "home.php";
                            }
                        }



                        if ($_SESSION['akun_level']=='1'){
                            if ($page == "senjata") {
                                if($aksi == "") {
                                    include "page/senjata/tampil.php";
                            }
                            
                            }elseif ($page == 'amunisi' ) {
                                if ($aksi == "") {
                                    include "page/amunisi/tampil.php";
                            }
                            
                            }elseif ($page == 'anggota' ) {
                                if ($aksi == "") {
                                    include "page/anggota/anggota.php";
                            }elseif ($aksi== "tambah"){
                                    include "page/anggota/tambah.php";  
                            }elseif ($aksi== "ubah"){
                                    include "page/anggota/ubah.php";
                            }elseif ($aksi== "hapus"){
                                    include "page/anggota/hapus.php";                           
                            }
                            
                            }elseif ($page == 'berita' ) {
                                if ($aksi == "") {
                                    include "page/berita/berita.php";
                            }elseif ($aksi== "tambah"){
                                    include "page/berita/tambah.php";  
                            }elseif ($aksi== "ubah"){
                                    include "page/berita/ubah.php";
                            }elseif ($aksi== "hapus"){
                                    include "page/berita/hapus.php";                           
                            }
                            
                            }elseif ($page == 'transaksi' ) {
                                if ($aksi == "") {
                                    include "page/transaksi/transaksi.php";
                            }elseif ($aksi == "tambah") {
                                    include "page/transaksi/tambah.php";   
                            }elseif ($aksi == "kembali") {
                                    include "page/transaksi/kembali.php"; 
                            }
                            
                            }elseif ($page == 'laporan' ) {
                                if ($aksi == "") {
                                    include "page/laporan/cari_priode.php";
                            }
                            
                            }elseif ($page == 'laporan_anggota' ) {
                                if ($aksi == "") {
                                    include "page/laporan/cari_priode_anggota.php";
                            }

                            }elseif ($page == 'laporan_amunisi' ) {
                                if ($aksi == "") {
                                    include "page/laporan/cari_priode_amunisi.php";
                            }

                            }elseif ($page == 'laporan_transaksi' ) {
                                if ($aksi == "") {
                                    include "page/laporan/cari_priode_transaksi.php";
                            }

                            }elseif ($page == 'laporan_transaksi_status' ) {
                                if ($aksi == "") {
                                    include "page/laporan/cari_status.php";
                            }

                            }elseif ($page == 'laporan_satker' ) {
                                if ($aksi == "") {
                                    include "page/laporan/cari_satker.php";
                            }        

                            }elseif ($page == 'user' ) {
                                if ($aksi == "") {
                                    include "page/user/user.php";
                            }elseif ($aksi== "tambah"){
                                    include "page/user/tambah.php";  
                            }elseif ($aksi== "ubah"){
                                    include "page/user/ubah.php";
                            }elseif ($aksi== "hapus"){
                                    include "page/user/hapus.php";                           
                            }

                            }elseif ($page == '' ) {
                                
                                    include "home.php";
                            }
                        
                        
                    }
                       ?>                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             
        </div>
      
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    
	
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>