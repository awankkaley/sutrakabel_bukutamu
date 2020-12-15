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
        $bulan_nih = date("m",strtotime($data_nih->tanggal));
        $bln = $bulan[$bulan_nih];
    }
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=DataBukuTamu_".$bln.".xls");
?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
    <thead>
        <tr style="font-weight: bold;">
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
                <td style="padding-left: 10px;"><?php echo $hasil->nama ?></td>
                <td style="padding-left: 10px;"><?php echo $hasil->email ?></td>
                <td style="padding-left: 10px;"><?php if($hasil->jenis_kelamin == 1){echo"Laki-Laki";}else{echo"Perempuan";} ?></td>
                <td style="padding-left: 10px;"><?php echo $hasil->alamat ?></td>
                <td style="padding-left: 10px;"><?php echo $hasil->telp ?></td>
                <td style="padding-left: 10px;"><?php $tgl = date("d M Y",strtotime($hasil->tanggal)); echo $tgl ?></td>
                <td style="padding-left: 10px;"><?php echo $hasil->jam_masuk ?></td>
                <td style="padding-left: 10px;"><?php echo $hasil->jam_keluar ?></td>
                <td style="padding-left: 10px;"><?php echo $hasil->keperluan ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>