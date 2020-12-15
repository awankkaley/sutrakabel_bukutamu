<?php 
    foreach($data_bukutamu as $data_nih){
        $bulan = date("m",strtotime($data_nih->tanggal));
    }
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Buku Tamu</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?php echo base_url('cetakbukutamu/').$bulan ?>" target="_blank" class="btn btn-primary btn-xs"><span class="fa fa-print"></span> Cetak Buku tamu</a>
                        <a href="<?php echo base_url('exportbukutamu/').$bulan ?>" class="btn btn-primary btn-xs"><span class="fa fa-file-excel-o"></span> Eksport ke excel</a>
                        <a href="<?php echo base_url('printPDF/').$bulan ?>" class="btn btn-primary btn-xs"><span class="fa fa-print"></span> PDF</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr style="background-color: grey; color: white;">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>Tanggal</th>
                                        <th>Jam Masuk</th>
                                        <th>Jam Keluar</th>
                                        <th>Keperluan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($data_bukutamu as $hasil) { ?>
                                        <tr>
                                            <td align="center"><?php echo $no++; ?></td>
                                            <td style="padding: 10px;"><?php echo $hasil->nama ?></td>
                                            <td style="padding: 10px;"><?php echo $hasil->email ?></td>
                                            <td style="padding: 10px;"><?php if($hasil->jenis_kelamin == 1){echo"Laki-Laki";}else{echo"Perempuan";} ?></td>
                                            <td style="padding: 10px;"><?php echo $hasil->alamat ?></td>
                                            <td style="padding: 10px;"><?php echo $hasil->telp ?></td>
                                            <td style="padding: 10px;"><?php $tgl = date("d M Y",strtotime($hasil->tanggal)); echo $tgl ?></td>
                                            <td style="padding: 10px;"><?= date("H:i",strtotime($hasil->jam_masuk)) ?></td>
                                            <td style="padding: 10px;"><?= date("H:i",strtotime($hasil->jam_keluar)) ?></td>
                                            <td style="padding: 10px;"><?php echo $hasil->keperluan ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>