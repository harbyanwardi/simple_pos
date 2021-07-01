<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">

    <title>Aplikasi Pembelian</title>
    <?php 
        $this->load->view('admin/yoga');
   ?>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>

            <div class="col-lg-12">
                <h1 class="page-header">Pembelian
                    <small>Barang</small>
                    <!-- <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Tambah Kategori</a></div> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
                <thead>
                    <tr>
                        <th style="text-align:center;width:40px;">No</th>
                        <th>No. Faktur</th>
                        <th>Tanggal</th>
                        <th>Supplier</th>
                        <th>Kode</th>
                        <th style="width:140px;text-align:center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no=0;
                    foreach ($data->result_array() as $a):
                        $no++;
                        $id=$a['beli_nofak'];
                        $tgl=$a['beli_tanggal'];
                        $suplier=$a['suplier_nama'];
                        $kode=$a['beli_kode'];
                        $state=$a['state'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $id;?></td>
                        <td><?php echo $tgl;?></td>
                        <td><?php echo $suplier;?></td>
                        <td><?php echo $kode;?></td>
                        <?php if($state==0) { ?>
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-warning" href="<?php echo base_url().'admin/pembelian/acc/'.$kode?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Acc</a>
                            <!-- <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $kode?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a> -->
                        </td>
                        <?php } else { ?>
                            <td style="text-align:center;">
                            <a class="btn btn-xs btn-success" href="#" title="Edit" disabled> Paid</a>
                           
                        </td>
                        <?php } ?>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.row -->
      

        <!-- ============ MODAL EDIT =============== -->
      

        <!-- ============ MODAL HAPUS =============== -->
      

        <!--END MODAL-->

        <hr>

        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable({
                "language": {
                    "search":"Cari",
                    "info":"Menampilkan _START_ to _END_ of _TOTAL_ data",
                    "lengthMenu":"Menampilkan _MENU_ baris",
                    "infoEmpty":"Tidak ditemukan",
                    "infoFiltered":"(pencarian dari _MAX_ data)",
                    "zeroRecords":"Data tidak ditemukan",
                    "paginate": {
                        "next":"Selanjutnya",
                        "previous":"Sebelumnya",
                    }
                }
            });
        } );
    </script>
    
</body>

</html>
