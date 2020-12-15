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
                            <form id="register">
                                <script language='javascript'>
                                    function validTelp(a) {
                                        if (!/^[0-9.]+$/.test(a.value)) {
                                            a.value = a.value.substring(0, a.value.length - 1000);
                                        }
                                    }
                                </script>

                                <div class="col-lg-7">

                                    <div class="form-group">
                                        <label for="inputNama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="inputNama" name="inputNama" placeholder="Masukan Nama Lengkap" value="<?php echo $this->session->userdata('inputNama'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Masukan Email" value="<?php echo $this->session->userdata('inputEmail'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputTelp">Telepon</label>
                                        <input type="text" class="form-control" id="inputTelp" name="inputTelp" placeholder="Masukan Telepon" maxLength="15" onkeyup="validTelp(this)" value="<?php echo $this->session->userdata('inputTelp'); ?>">
                                    </div>
                                </div>
                                <div class="col-lg-5">

                                    <div id="my_camera"></div>
                                </div>
                                <div class="col-lg-12">

                                    <div class="form-group">
                                        <label for="inputNama">Alamat</label>
                                        <textarea class="form-control" id="inputAlamat" name="inputAlamat" placeholder="Masukan Alamat" rows="3"><?php echo $this->session->userdata('inputAlamat'); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="selectJeniskelamin" id="selectJeniskelamin" value="1" <?php if ($this->session->userdata('selectJeniskelamin') == 1) {
                                                                                                                                echo "checked";
                                                                                                                            } else {
                                                                                                                                echo "unchecked";
                                                                                                                            } ?>>Laki-Laki
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="selectJeniskelamin" id="selectJeniskelamin" value="0" <?php if ($this->session->userdata('selectJeniskelamin') == 0) {
                                                                                                                                echo "checked";
                                                                                                                            } else {
                                                                                                                                echo "unchecked";
                                                                                                                            } ?>>Perempuan
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNama">Jam Masuk</label>
                                        <input readonly type="text" class="form-control" id="inputJammasuk" name="inputJammasuk" placeholder="Masukan Jam Masuk" value="<?php echo $this->session->userdata('inputJammasuk'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNama">Keperluan</label>
                                        <textarea class="form-control" id="inputKeperluan" name="inputKeperluan" placeholder="Masukan Keperluan" rows="3"><?php echo $this->session->userdata('inputKeperluan'); ?></textarea>
                                    </div>
                                    <button type="submit" id="simpan" class="btn btn-success btn-sm">Simpan Buku Tamu</button>
                                </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script language="JavaScript">
    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    Webcam.attach('#my_camera');
</script>

<script type="text/javascript">
    function display_c() {
        var refresh = 1000; // Refresh rate in milli seconds
        mytime = setTimeout('display_ct()', refresh)
    }

    function display_ct() {
        var x = new Date()
        var hour = x.getHours();
        var minute = x.getMinutes();
        var second = x.getSeconds();
        if (hour < 10) {
            hour = '0' + hour;
        }
        if (minute < 10) {
            minute = '0' + minute;
        }
        var x1 = hour + ':' + minute 
        document.getElementById('inputJammasuk').value = x1;
        display_c();
    }
</script>
<!-- Code to handle taking the snapshot and displaying it locally -->
<script type="text/javascript">
    $('#register').on('submit', function(event) {
        event.preventDefault();
        var image = '';
        var inputNama = $('#inputNama').val();
        var inputEmail = $('#inputEmail').val();
        var inputTelp = $('#inputTelp').val();
        var inputAlamat = $('#inputAlamat').val();
        var selectJeniskelamin = $('#selectJeniskelamin').val();
        var inputJammasuk = $('#inputJammasuk').val();
        var inputKeperluan = $('#inputKeperluan').val();
        Webcam.snap(function(data_uri) {
            image = data_uri;
        });
        $.ajax({
                url: '<?php echo base_url('savebukutamu'); ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    inputNama: inputNama,
                    inputEmail: inputEmail,
                    inputTelp: inputTelp,
                    inputAlamat: inputAlamat,
                    selectJeniskelamin: selectJeniskelamin,
                    inputJammasuk: inputJammasuk,
                    inputKeperluan: inputKeperluan,
                    image: image
                },
            })
            .done(function(data) {
                alert(data);
            })

    });
</script>