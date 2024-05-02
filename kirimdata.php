<?php
    
    $konek = mysqli_connect("localhost", "root", "", "dbmonitoringselsurya");

    //baca data yang dikirim esp32
    $tegangan = $_GET['tegangan'];
    $arus = $_GET['arus'];
    $daya = $_GET['daya'];
    $kemiringan = $_GET['kemiringan'];

    //simpan ke tabel tb_monitoringselsurya
    //auto increment = 1 / mengembalikan ID menjadi 1 apabila dikosongkan
    mysqli_query($konek, "ALTER TABLE tb_monitoringselsurya AUTO_INCREMENT=1");
    //simpan data sensor ke tabel tb_monitoringselsurya 
    /*$simpan = mysqli_query($konek, "insert into tb_monitoringselsurya (
        arus, kemiringan) values('$tegangan', '$arus', '$ldr')");*/

    $simpan = mysqli_query($konek, "insert into tb_monitoringselsurya (tegangan, arus, daya, kemiringan) 
        values('$tegangan','$arus','$daya','$kemiringan')");
    

    //uji simpa untuk memberikan respon yang ditampilkan pada serial monitor
    if($simpan)
        echo "Berhasil dikirim" ;
    else
        echo "Gagal Terkirim";

?>