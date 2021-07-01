<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="<?php echo base_url().'welcome'?>"><img src="<?php echo base_url().'assets/img/logo.png'?>" style="width:200px"></a>
                </li>
                <?php $h=$this->session->userdata('akses'); ?>
                <?php $u=$this->session->userdata('user'); ?>
                <hr>
                <?php if($h=='1'){ ?>
                <li style="color:red">MASTER DATA</li>
                </li>
                <li><a href="<?php echo base_url().'admin/kategori'?>">Kategori</a>
                </li>
                <li><a href="<?php echo base_url().'admin/barang'?>">Barang</a>
                </li>
                <li><a href="<?php echo base_url().'admin/suplier'?>">Suplier</a>
                </li>
                <li><a href="<?php echo base_url().'admin/pengguna'?>">Pengguna</a>
                </li>
               
                <li><a href="<?php echo base_url().'admin/satuan'?>">Satuan</a>
                </li>
                <hr>
                <li style="color:red">TRANSAKSI</li>
                <li><a href="<?php echo base_url().'admin/pembelian'?>">Pemesanan</a>
                </li>
                <li><a href="<?php echo base_url().'admin/pembelian/pemesanan'?>">Pembelian</a>
                </li>
                <li><a href="<?php echo base_url().'admin/jurnal'?>">Jurnal</a>
                <hr>
               <!--  <li style="color:red">LAPORAN</li>
                <li><a href="<?php echo base_url().'admin/laporan'?>">Laporan</a>
                </li> -->
                </li>
                <!-- <li><a href="<?php echo base_url().'admin/grafik'?>">Grafik</a>
                </li> -->
                
                <li><a href="<?php echo base_url().'administrator/logout'?>">Keluar</a>
                </li>
                <?php }?>
                <?php if($h=='2'){ ?>
                <li><a href="<?php echo base_url().'welcome'?>">LAPORAN</a>
                <li><a href="<?php echo base_url().'administrator/logout'?>">Keluar</a>
                </li>
                <?php }?>
            </ul>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="content-header">
                <h1>
                    <a id="menu-toggle" href="#" class="btn btn-default"><i class="fa fa-list"></i></a>
                    <img src="<?php echo base_url().'assets/img/logonewrmk.jpg'?>" style="width:90px"> <small>Aplikasi Pembelian Material Atap</small>
                </h1>
            </div>
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                    <!-- <div class="col-md-12">
                        <p class="lead">This simple sidebar template has a hint of JavaScript to make the template responsive. It also includes Font Awesome icon fonts.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="well">The template still uses the default Bootstrap rows and columns.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="well">But the full-width layout means that you wont be using containers.</p>
                    </div>
                    <div class="col-md-4">
                        <p class="well">Three Column Example</p>
                    </div>
                    <div class="col-md-4">
                        <p class="well">Three Column Example</p>
                    </div>
                    <div class="col-md-4">
                        <p class="well">You get the idea! Do whatever you want in the page content area!</p>
                    </div>
                </div>
            </div>
        </div>

    </div> -->