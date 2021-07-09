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
                    <th style="width:300px;padding-bottom:5px;"><input type="text" name="no_trans"  class="form-control input-sm" style="width:200px;" required></th>
                    
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>
                        <div class='input-group date' id='datepicker' style="width:200px;">
                            <input type='text' name="tgl" class="form-control" placeholder="Tanggal..." required/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </td>
                </tr>
            </table><hr/>
            <table>
                <tr>
                    <th>Akun</th>
                </tr>
                <tr>
                    <th><input type="text" name="akun" id="akun" class="form-control input-sm"></th>                     
                </tr>
                    <div id="detail_barang" style="position:absolute;">
                        <table>
                        <tr>
                           
                            <th>Deskripsi</th>
                            <th>Debit (IDR)</th>
                            <th>Kredit (IDR)</th>
                            
                        </tr>
                        <tr>
                           
                                <td><input type="text" name="deskripsi" style="width:400px;margin-right:5px;" class="form-control input-sm" ></td>
                            <td><input type="text" name="debit" value="0" style="width:300px;margin-right:5px;" class="form-control input-sm"></td>
                            <td><input type="text" name="kredit" value="0" style="width:300px;margin-right:5px;" class="form-control input-sm"></td>
                           
                            
                            <td><button type="submit" class="btn btn-sm btn-primary">Ok</button></td>
                        </tr>
                    </table>
                    </div>
            </table>
             </form>
           
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
