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
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">
</head>

<body>

    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>

   
            <div class="col-lg-12">
            <center><?php echo $this->session->flashdata('msg');?></center>
                <h1 class="page-header">Jurnal
                    <small>Umum</small>
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <form action="<?php echo base_url().'admin/jurnal/create'?>" method="post">
            <table>
                <tr>
                    <th style="width:100px;padding-bottom:5px;">No Transaksi</th>
                  
                    <th style="width:300px;padding-bottom:5px;"><input type="text" name="no_trans" value="<?php echo $data_parent->no_trans ?>" class="form-control input-sm" style="width:200px;" required></th>
                    
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>
                        <div class='input-group date' id='datepicker' style="width:200px;">
                            <input type='text' name="tgl" value="<?php echo $data_parent->tanggal ?>" class="form-control" placeholder="Tanggal..." required/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </td>
                </tr>
            </table><hr/>
            
             </form>
            <table class="table table-bordered table-condensed" style="font-size:11px;margin-top:10px;">
                <thead>
                    <tr>
                        <th>Akun</th>
                        <th>Deskripsi</th>
                        <th style="text-align:center;">Debit</th>
                        <th style="text-align:center;">Kredit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                   
                    <?php foreach ($data->result_array() as $items): ?>
                   
                    <tr>
                         <td><?=$items['id_akun'];?></td>
                         <td><?=$items['deskripsi'];?></td>
                         <td style="text-align:right;"><?php echo number_format($items['debit']);?></td>
                         <td style="text-align:right;"><?php echo number_format($items['kredit']);?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" style="text-align:center;">Total</td>
                        <td style="text-align:right;">Rp. <?php echo number_format($total->total_debit);?></td>
                        <td style="text-align:right;">Rp. <?php echo number_format($total->total_kredit);?></td>
                    </tr>
                </tfoot>
            </table>
            <!-- <a href="<?php echo base_url().'admin/pembelian/simpan_pembelian'?>" class="btn btn-info btn-lg"><span class="fa fa-save"></span> Simpan</a> -->
            </div>
        </div>
        <!-- /.row -->
        

        <hr>

        

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
                    format: 'DD MMMM YYYY HH:mm',
                });
                
                $('#datepicker').datetimepicker({
                    format: 'YYYY-MM-DD',
                });
                $('#datepicker2').datetimepicker({
                    format: 'YYYY-MM-DD',
                });

                $('#timepicker').datetimepicker({
                    format: 'HH:mm'
                });
            });
    </script>
    <script type="text/javascript">
        $(function(){
            $('.harpok').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('.harjul').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Ajax kabupaten/kota insert
            // $("#akun").focus();
            // $("#akun").keyup(function(){
            //     var kobar = {akun:$(this).val()};
            //        $.ajax({
            //    type: "POST",
            //    url : "<?php echo base_url().'admin/pembelian/get_barang';?>",
            //    data: kobar,
            //    success: function(msg){
            //    $('#detail_barang').html(msg);
            //    }
            // });
            // }); 

            $("#akun").keypress(function(e){
                if(e.which==13){
                    $("#jumlah").focus();
                }
            });
        });
    </script>
    
</body>

</html>
