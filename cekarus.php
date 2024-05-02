<?php
    //koneksi dengan database  
    $konek = mysqli_connect("localhost", "root", "", "dbmonitoringselsurya");

    //baca data dari tabel tb_monitoringselsurya
    $sql = mysqli_query($konek, "select * from tb_monitoringselsurya order by id
        desc"); //data terakhir akan berada diatas

    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    $arus = $data['arus'];

    //uji apabila nilai arus belum ada, maka anggap arus = 0
    if($arus == "") $arus = 0;

    //cetak nilai arus
    echo $arus ;
    

?>