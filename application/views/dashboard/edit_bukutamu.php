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
                    <div class="panel-heading">Tambah Data Buku Tamu</div>
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
                                }
                            ?>
                            <form action="<?php echo base_url('updatebukutamu') ?>" method="POST" role="form">
                                <input type="hidden" class="form-control" id="bukutamu_id" name="bukutamu_id" placeholder="Masukan Nama Lengkap" value="<?php echo $id_bukutamu ?>">
                                <script language='javascript'>
                                    function validTelp(a)
                                    {
                                        if(!/^[0-9.]+$/.test(a.value))
                                        {
                                            a.value = a.value.substring(0,a.value.length-1000);
                                        }
                                    }
                                </script>
                                <div class="form-group">
                                    <label for="inputNama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="inputNama" name="inputNama" placeholder="Masukan Nama Lengkap" value="<?php echo $nama; ?>" onfocus="(this.value=='<?php echo $nama; ?>') && (this.value='')" onblur="(this.value=='') && (this.value='<?php echo $nama; ?>')">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Masukan Email" value="<?php echo $email; ?>" onfocus="(this.value=='<?php echo $email; ?>') && (this.value='')" onblur="(this.value=='') && (this.value='<?php echo $email; ?>')">
                                </div>
                                <div class="form-group">
                                    <label for="inputTelp">Telepon</label>
                                    <input type="text" class="form-control" id="inputTelp" name="inputTelp" placeholder="Masukan Telepon" maxLength="15" onkeyup="validTelp(this)" value="<?php echo $telp; ?>" onfocus="(this.value=='<?php echo $telp; ?>') && (this.value='')" onblur="(this.value=='') && (this.value='<?php echo $telp; ?>')">
                                </div>
                                <div class="form-group">
                                    <label for="inputNama">Alamat</label>
                                    <textarea class="form-control" id="inputAlamat" name="inputAlamat" placeholder="Masukan Alamat" rows="3" onfocus="(this.value=='<?php echo $alamat; ?>') && (this.value='')" onblur="(this.value=='') && (this.value='<?php echo $alamat; ?>')"><?php echo $alamat; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="selectJeniskelamin" id="selectJeniskelamin" value="1" <?php if($jenis_kelamin == 1){echo"checked";}else{echo"unchecked";} ?>>Laki-Laki
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="selectJeniskelamin" id="selectJeniskelamin" value="0" <?php if($jenis_kelamin == 0){echo"checked";}else{echo"unchecked";} ?>>Perempuan
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="inputJammasuk">Jam Masuk</label>
                                    <input type="time" class="form-control" id="inputJammasuk" name="inputJammasuk" placeholder="Masukan Jam Masuk" value="<?php echo $jam_masuk; ?>" onfocus="(this.value=='<?php echo $jam_masuk; ?>') && (this.value='')" onblur="(this.value=='') && (this.value='<?php echo $jam_masuk; ?>')">
                                </div>
                                 <div class="form-group">
                                    <label for="inputJamkeluar">Jam Keluar</label>
                                    <input type="time" class="form-control" id="inputJamkeluar" name="inputJamkeluar" placeholder="Masukan Jam Keluar" value="<?php echo $jam_keluar; ?>" onfocus="(this.value=='<?php echo $jam_keluar; ?>') && (this.value='')" onblur="(this.value=='') && (this.value='<?php echo $jam_keluar; ?>')">
                                </div>
                                <div class="form-group">
                                    <label for="inputNama">Keperluan</label>
                                    <textarea class="form-control" id="inputKeperluan" name="inputKeperluan" placeholder="Masukan Keperluan" rows="3" onfocus="(this.value=='<?php echo $keperluan; ?>') && (this.value='')" onblur="(this.value=='') && (this.value='<?php echo $keperluan; ?>')"><?php echo $keperluan; ?></textarea>
                                </div>
                                <button type="submit" name="simpan" id="simpan" class="btn btn-success btn-sm">Ubah Buku Tamu</button>
                            </form>
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