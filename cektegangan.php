<?php
    //koneksi dengan database  
    $konek = mysqli_connect("localhost", "root", "", "dbmonitoringselsurya");

    //baca data dari tabel tb_monitoringselsurya
    $sql = mysqli_query($konek, "select * from tb_monitoringselsurya order by id
        desc"); //data terakhir akan berada diatas

    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    $tegangan = $data['tegangan'];

    //uji apabila nilai tegangan belum ada, maka anggap tegangan = 0
    if($tegangan == "") $tegangan = 0;

    //cetak nilai tegangan
    echo $tegangan ;
    

?>