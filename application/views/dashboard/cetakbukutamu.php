<?php 
    date_default_timezone_set('Asia/Jakarta');
    $bulan = array (
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    );
    foreach($data_bukutamu as $data_nih){
        $sekarang = date("m",strtotime($data_nih->tanggal));
        $bln = $bulan[$sekarang];
        $bln_sekarang = strtoupper($bulan[$sekarang]);
        $tahun = date("Y");
    }
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan="10" align="center" style="font-size: 25px; font-weight: bold;">PT. SUTRAKABEL</td>
    </tr>
    <tr>
        <td colspan="10" align="center" style="font-size: 25px; font-weight: bold;">DATA PENGUNJUNG BULAN <?= $bln_sekarang ?></td>
    </tr>
    <tr>
        <td colspan="10" align="center" style="font-size: 25px; font-weight: bold;"><?= $tahun; ?></td>
    </tr>
</table>
<br>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
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
                <td style="padding: 10px;"><?php echo $hasil->jam_masuk ?></td>
                <td style="padding: 10px;"><?php echo $hasil->jam_keluar ?></td>
                <td style="padding: 10px;"><?php echo $hasil->keperluan ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<table width="100%">
    <tr>
        <td>&nbsp;</td>
        <td colspan="20" align="right" style="font-size: 16px; font-weight: bold; padding-right: 140px;">Bogor, <?= date("d F Y")?>
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
<script type="text/javascript">
    window.print();
</script>