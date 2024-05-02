<?php
    //koneksi dengan database  
   $konek = mysqli_connect("localhost", "root", "", "dbmonitoringselsurya");

    //baca data dari tabel tb_monitoringselsurya
    $sql = mysqli_query($konek, "select * from tb_monitoringselsurya order by id
        desc"); //data terakhir akan berada diatas

    //baca data paling atas
    $data = mysqli_fetch_array($sql);
    $daya = $data['daya'];

    //uji apabila nilai daya belum ada, maka anggap daya = 0
    if($daya == "") $daya = 0;

    //cetak nilai daya
    echo $daya ;
?>