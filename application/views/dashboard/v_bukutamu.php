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
                        <a href="<?php echo base_url('addbukutamu') ?>" class="btn btn-primary btn-xs"><span class="fa fa-plus"></span> Tambah Data</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <form action="<?php echo base_url('lihatbukutamu') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <div class="form-label-group">
                                                <select class="form-control" name="bulan" id="bulan">
                                                    <option value="-">--- Pilih Bulan ---</option>
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-label-group">
                                                <button type="submit" name="btn-register" id="btn-register" class="btn btn-success">Lihat Data Perbulan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br><br><br>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th >No</th>
                                        <th>Nama</th>
                                        <th>Telepon</th>
                                        <th>Tanggal</th>
                                        <th width="10">Jam Masuk</th>
                                        <th width="10">Jam Keluar</th>
                                        <th>Keperluan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach ($data_bukutamu as $hasil) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $hasil->nama ?></td>
                                            <td><?php echo $hasil->telp ?></td>
                                            <td><?php $tgl = date("d M Y",strtotime($hasil->tanggal)); echo $tgl ?></td>
                                            <td><?php echo date("H:i",strtotime($hasil->jam_masuk)) ?></td>
                                            <td><?php echo date("H:i",strtotime($hasil->jam_keluar)) ?></td>
                                            <td><?php echo $hasil->keperluan ?></td>
                                            <td><img width="100px" src="<?= base_url('uploads/').$hasil->image ?>" alt="Foto"></td>
                                            <td class="center">
                                                <?php if($hasil->jam_keluar == "00:00:00"){ ?>
                                                    <a href="<?php echo base_url('editjamkeluar/').$hasil->id_bukutamu ?>" class="btn btn-default btn-xs"><span class="fa fa-edit"></span> Ubah Jam Keluar</a>
                                                <?php } ?>
                                                <a href="<?php echo base_url('editbukutamu/').$hasil->id_bukutamu ?>" class="btn btn-warning btn-xs"><span class="fa fa-edit"></span> Ubah</a>
                                                <a href="<?php echo base_url('deletebukutamu/').$hasil->id_bukutamu ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda ingin menghapus data ini?')"><span class="fa fa-eraser"></span> Hapus</a>
                                                <a href="<?php echo base_url('cetak/').$hasil->id_bukutamu ?>" class="btn btn-primary btn-xs"><span class="fa fa-print"></span> Cetak</a>
                                            </td>
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