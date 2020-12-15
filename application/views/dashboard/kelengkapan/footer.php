        <!-- jQuery -->
        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('assets/js/metisMenu.min.js') ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('assets/js/startmin.js') ?>"></script>
     
        <!-- DataTables JavaScript -->
        <script src="<?php echo base_url('assets/js/dataTables/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.min.js') ?>"></script>

        <script src="<?php echo base_url('assets/js/chart.js/Chart.min.js') ?>"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
        <?php foreach ($data_grafik_01 as $hasil) { $total_01 = $hasil->total_01; } ?>
        <?php foreach ($data_grafik_02 as $hasil) { $total_02 = $hasil->total_02; } ?>
        <?php foreach ($data_grafik_03 as $hasil) { $total_03 = $hasil->total_03; } ?>
        <?php foreach ($data_grafik_04 as $hasil) { $total_04 = $hasil->total_04; } ?>
        <?php foreach ($data_grafik_05 as $hasil) { $total_05 = $hasil->total_05; } ?>
        <?php foreach ($data_grafik_06 as $hasil) { $total_06 = $hasil->total_06; } ?>
        <?php foreach ($data_grafik_07 as $hasil) { $total_07 = $hasil->total_07; } ?>
        <?php foreach ($data_grafik_08 as $hasil) { $total_08 = $hasil->total_08; } ?>
        <?php foreach ($data_grafik_09 as $hasil) { $total_09 = $hasil->total_09; } ?>
        <?php foreach ($data_grafik_10 as $hasil) { $total_10 = $hasil->total_10; } ?>
        <?php foreach ($data_grafik_11 as $hasil) { $total_11 = $hasil->total_11; } ?>
        <?php foreach ($data_grafik_12 as $hasil) { $total_12 = $hasil->total_12; } ?>
        <script type="text/javascript">
            var ctx = document.getElementById("myBarChart");
            var myLineChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember",],
                    datasets: [{
                        label: "Jumlah Pengunjung",
                        backgroundColor: "rgba(2,117,216,1)",
                        borderColor: "rgba(2,117,216,1)",
                        data: [<?= $total_01?>,<?= $total_02?>,<?= $total_03?>,<?= $total_04?>,<?= $total_05?>,<?= $total_06?>,<?= $total_07?>,<?= $total_08?>,<?= $total_09?>,<?= $total_10?>,<?= $total_11?>,<?= $total_12?>],
                    }],
                },
                options: {
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 12
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 100,
                                maxTicksLimit: 5
                            },
                            gridLines: {
                                display: true
                            }
                        }],
                    },
                    legend: {
                        display: false
                    }
                }
            });
        </script>
    </body>
</html>