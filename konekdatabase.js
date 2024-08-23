// kirim nilai data ke website secara realtime
      $(document).ready(function() {

          setInterval(function() {
            $("#cektegangan").load('cektegangan.php');
            $("#cekarus").load('cekarus.php');
            $("#cekkemiringan").load('cekkemiringan.php');
            $("#cekdaya").load('cekdaya.php');

          }, 1000);
      } );
    //akhir perintah load data

    //Memanggil Data Grafik
      var refreshid = setInterval(function() {
            $("#responsgrafiktegangan").load('grafiktegangan.php');
            $("#responsgrafikarus").load('grafikarus.php');
            $("#responsgrafikkemiringan").load('grafikkemiringan.php');
            $("#responsgrafikdaya").load('grafikdaya.php');
      }, 1000);
