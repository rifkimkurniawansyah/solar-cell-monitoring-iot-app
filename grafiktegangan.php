<?php
    //Koneksi database
    $konek = mysqli_connect("localhost", "root", "", "dbmonitoringselsurya");

    //ambil 19 data terakhir
    $sql_ID = mysqli_query($konek, "SELECT MAX(ID) FROM tb_monitoringselsurya");
    $data_ID = mysqli_fetch_array($sql_ID);
    $ID_akhir = $data_ID['MAX(ID)'];
    $ID_awal = $ID_akhir - 18;

    //baca infromasi waktu dari tabel tb_monitoringselsurya sumbu x 19 data terakhir
    $waktu = mysqli_query($konek, "SELECT waktu FROM tb_monitoringselsurya WHERE ID>= '$ID_awal'
        and ID<= '$ID_akhir' ORDER BY id ASC");

    //baca informasi tegangan sumbu y pada grafik 19 data terakhir
    $tegangan = mysqli_query($konek, "SELECT tegangan FROM tb_monitoringselsurya WHERE ID>= '$ID_awal'
    and ID<= '$ID_akhir' ORDER BY id ASC");
?>

<!-- Tampilan Grafik -->
<div class="panel panel-primary">
    <div class="panel-heading">
        Grafik Tegangan
    </div>
    <div class = "panel-body">
        <!-- Siapkan Canvas untuk grafik -->
        <canvas id = "ChartTegangan"> </canvas>
        <!-- Gambar Grafik -->
        <script type = "text/javascript">
            //baca ID canvas tempat grafik akan diletakkan
            var canvas = document.getElementById('ChartTegangan');
            //letakkan data waktu dan tegangan untuk grafik
            var data ={
                labels : [
                    <?php

                       while($data_waktu = mysqli_fetch_array($waktu))
                       {
                        echo '"'.$data_waktu['waktu'].'",' ;
                       }    
                    ?>
                ],

                datasets : [
                    {
                    label : "Tegangan",
                    fill : true,
                    backgroundColor : "rgba(255, 255, 255, .2)",
                    borderColor : "rgba(0, 0, 255)",
                    pointRadius : 3.5,
                    data : [
                        <?php
                           while($data_tegangan = mysqli_fetch_array($tegangan))
                           {
                            echo $data_tegangan['tegangan'].',' ;
                           }
                        ?>
                    ]

                }
            ]
            };

            //option grafik
            var option = {
                showLines : true,
                animation : {duration : 0}
            };

            //cetak kedalam canvas 
            var myLineChart = Chart.Line(canvas, {
                data : data,
                options : option
            }) ;
        </script>
    </div>
</div>