<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Produk For AsahiAPP">
    <meta name="author" content="Harby Anwardi">

    <title>APOTEK WEB</title>
    <?php 
        $this->load->view('admin/backside');
   ?>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	    <link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">

    


</head>

<body>
    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>

    <!-- Page Content -->
    
            
        </div>
        <!-- /.row -->
	<div class="mainbody-section text-center">
     <?php $h=$this->session->userdata('akses'); ?>
     <?php $u=$this->session->userdata('user'); ?>

        <!-- Projects Row -->
        <div class="row">
         <?php if($h=='1'){ ?>
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#fcc;">Selamat datang
                    <small>Administrator</small>
                </h1>
            </div>
            <div class="col-md-4 portfolio-item">
            <div class="thumbnail">
                  <!-- <img src="<?php echo base_url().'assets/img/lap.jpg'?>" alt="..."> -->
                  <div class="caption">
                  <h3>Laporan Barang</h3>
                  <p>APOTEK WEB</p> 
                  <p><a href="<?php echo base_url().'admin/laporan/lap_data_barang'?>" target="_blank" class="btn btn-primary" role="button">LIHAT</a></p>
                  </div>
            </div>
            </div>
            <!-- <div class="col-md-4 portfolio-item">
            <div class="thumbnail"> -->
                  <!-- <img src="<?php echo base_url().'assets/img/gra.jpg'?>" alt="..."> -->
                  <!-- <div class="caption">
                  <h3>Grafik Stok Barang</h3>
                  <p>APOTEK WEB</p> 
                  <p><a href="<?php echo base_url().'admin/grafik/graf_stok_barang'?>" target="_blank" class="btn btn-primary" role="button">LIHAT</a></p>
                  </div> -->
            <!-- </div>
            </div> -->
            <div class="col-md-4 portfolio-item">
            <div class="thumbnail">
                  <!-- <img src="<?php echo base_url().'assets/img/unt.jpg'?>" alt="..."> -->
                  <div class="caption">
                  <h3>Laporan Penjualan</h3>
                  <p>APOTEK WEB</p> 
                  <p><a href="<?php echo base_url().'admin/laporan/lap_data_penjualan'?>" target="_blank" class="btn btn-primary" role="button">LIHAT</a></p>
                  </div>
            </div>
            </div>
            <?php }?>
            <?php if($h=='2'){ ?> 
                  <div class="col-lg-12">
                <h1 class="page-header" style="color:#fcc;">Selamat datang
                    <small>Owner</small>
                </h1>
            </div>
            <div class="col-md-4 portfolio-item">
            <div class="thumbnail">
                  <img src="<?php echo base_url().'assets/img/x.jpg'?>" alt="...">
                  <div class="caption">
                  <h3>Laporan Pembelian</h3>
                  <p>APOTEK WEB</p> 
                  <p><a href="<?php echo base_url().'admin/laporan/lap_data_pembelian'?>" target="_blank" class="btn btn-primary" role="button">LIHAT</a></p>
                  </div>
            </div>
            </div>
            <!-- <div class="col-md-4 portfolio-item">
            <div class="thumbnail">
                  <img src="<?php echo base_url().'assets/img/y.jpg'?>" alt="...">
                  <div class="caption">
                  <h3>Grafik Stok Barang</h3>
                  <p>APOTEK WEB</p> 
                  <p><a href="<?php echo base_url().'admin/grafik/graf_stok_barang'?>" target="_blank" class="btn btn-primary" role="button">LIHAT</a></p>
                  </div>
            </div>
            </div> -->
            <div class="col-md-4 portfolio-item">
            <div class="thumbnail">
                  <img src="<?php echo base_url().'assets/img/z.jpg'?>" alt="...">
                  <div class="caption">
                  <h3>Laporan Stok Barang</h3>
                  <p>APOTEK WEB</p> 
                  <p><a href="<?php echo base_url().'admin/laporan/lap_stok_barang'?>" target="_blank" class="btn btn-primary" role="button">LIHAT</a></p>
                  </div>
            </div>
            </div>
            <?php }?>
        </div>
        
        <!-- /.row -->

        <!-- Projects Row -->
        
		
        <!-- /.row -->
	
    <!-- /.container -->

    <?php 
        $this->load->view('admin/permana');
   ?>
</body>

</html>
