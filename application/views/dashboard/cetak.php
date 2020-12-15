<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <?php
                            foreach ($data_bukutamu as $hasil) {
                                $id_bukutamu = $hasil->id_bukutamu;
                                $nama = $hasil->nama;
                                $email = $hasil->email;
                                $telp = $hasil->telp;
                                $alamat = $hasil->alamat;
                                $jenis_kelamin = $hasil->jenis_kelamin;
                                $jam_masuk = $hasil->jam_masuk;
                                $jam_keluar = $hasil->jam_keluar;
                                $keperluan = $hasil->keperluan;
                                $tanggal = $hasil->tanggal;
                            }
                            ?>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td colspan="10" align="center" style="font-size: 20px; font-weight: bold;">PT. SUTRAKABEL</td>
                                </tr>
                                <tr>
                                    <td colspan="10" align="center" style="font-size: 20px; font-weight: bold;">DATA PENGUNJUNG </td>
                                </tr>
                            </table>
                            <br>
                            <br>
                            <table width="100%">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td style="font-size: 16px; font-weight: bold;">: <?= $nama ?></td>
                                    <td>Tanggal</td>
                                    <td style="font-size: 16px; font-weight: bold;">: <?php $tgl = date("d M Y", strtotime($tanggal));
                                                                                        echo $tgl ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td style="font-size: 16px; font-weight: bold;">: <?= $email ?></td>
                                    <td>Jam Keluar</td>
                                    <td style="font-size: 16px; font-weight: bold;">: <?= date("H:i", strtotime($jam_keluar)) ?></td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td style="font-size: 16px; font-weight: bold;">: <?= $telp ?></td>
                                    <td>Jam Masuk</td>
                                    <td style="font-size: 16px; font-weight: bold;">: <?= date("H:i", strtotime($jam_masuk)) ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td style="font-size: 16px; font-weight: bold;">: <?= $alamat ?></td>
                                    <td>Keperluan</td>
                                    <td style="font-size: 16px; font-weight: bold;">: <?= $keperluan ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td style="font-size: 16px; font-weight: bold;">: <?php if ($jenis_kelamin == 1) {
                                                                                            echo "Laki-Laki";
                                                                                        } else {
                                                                                            echo "Perempuan";
                                                                                        } ?></td>

                            </table>
                            <br>
                            <br>

                            <table width="50%">
                                <tr>
                                    <td> <img width="200px" src="<?= base_url('uploads/') . $hasil->image ?>" alt="Foto">
                                    </td>
                                </tr>

                            </table>
                            <br>
                            <br>
                            <br>
                            <table width="100%">
                                <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="20" align="right" style="font-size: 16px; font-weight: bold; padding-right: 140px;">Bogor, <?= date("d F Y") ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20" align="center" width="50%" style="font-size: 16px; font-weight: bold;">&nbsp;</td>
                                    <td colspan="20" align="center" style="font-size: 16px; font-weight: bold;">Satpam Jaga,</td>
                                </tr>
                                <tr>
                                    <td colspan="20" align="center"><br><br><br><br></td>
                                    <td colspan="20" align="center"><br><br><br><br></td>
                                </tr>

                                <tr>
                                    <td colspan="20" align="center" style="font-size: 16px; font-weight: bold;">&nbsp;</td>
                                    <td colspan="20" align="center" style="font-size: 16px; font-weight: bold;"><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></td>
                                </tr>
                                <tr>
                                    <td colspan="20" align="center" style="font-size: 16px; font-weight: bold;">&nbsp;</td>
                                    <td colspan="20" align="center" style="font-size: 16px; font-weight: bold;">&nbsp;</td>
                                </tr>
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
<script type="text/javascript">
    window.print();
</script>