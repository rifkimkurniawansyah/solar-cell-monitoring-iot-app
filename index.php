<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link rel = "stylesheet" type = "text/css" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <title>Monitoring Sel Surya</title>
      <script type = "text/javascript" src = "assets/js/jquery-3.4.0.min.js"></script>
      <script type = "text/javascript" src = "assets/js/mdb.min.js"></script>
      <script type = "text/javascript" src = "jquery-latest.js"></script>
      <script type = "text/javascript" src = "assets/css/bootstrap.min.js"></script>
      <!-- load otomatis database ke website/ realtime -->


      <!-- css -->
      <style type = "text/css">
                .gambar{
                    float: right;
                    width: 130px;
                    height: 130px;
                    position: relative;
                    right: 5%;
                }

                .judul{
                    font-size: 60px;
                    padding-left: 5%;
                    font-weight: bold;
                    margin-top: 40px;
                    padding-bottom: 5%;
                }

                .grafiktegangan{
                    text-align: center;
                    width: 40%;
                    color: white;
                    font-size: 15px;
                    font-weight: bold;
                }

                .grafikarus{
                    text-align: center;
                    width: 40%;
                    color: white;
                    font-size: 15px;
                    font-weight: bold;
                    padding-left : 15px;
                }

                .grafikkemiringan{
                    text-align: center;
                    width: 40%;
                    color: white;
                    font-size: 15px;
                    font-weight: bold;
                }

                .grafikdaya{
                    text-align: center;
                    width: 40%;
                    color: white;
                    font-size: 15px;
                    font-weight: bold;
                    padding-left : 15px;
                }
                
                .container-fluid1{
                    display: flex;
                    justify-content: center;
                    padding-top: 35px;
                }

                .container-fluid2{
                    display: flex;
                    justify-content: center;
                    padding-top: 15px;
                }

                .card-tegangan{
                    width: 25%; 
                }

                .card-arus{
                    width: 25%;
                    padding-left: 15px;
                }

                .card-kemiringan{
                    width: 25%; 
                    padding-left: 15px;
                }

                .card-daya{
                    width: 25%;
                    padding-left: 15px;
                }

                .card-header{
                    font-size: 15px;
                    font-weight: bold; 
                    background-color: blue; 
                    color: white;  
                    text-align: center;
                }

                .card-body-tegangan{
                    background-color: lightgray;  
                    text-align: center;
                    color: black;
                    font-size: 40px;
                }
                .card-body-arus{
                    background-color: lightgray;  
                    text-align: center;
                    color: black;
                    font-size: 40px;
                }
                .card-body-kemiringan{
                    background-color: lightgray;  
                    text-align: center;
                    color: black;
                    font-size: 40px;
                }
                .card-body-daya{
                    background-color: lightgray;  
                    text-align: center;
                    color: black;
                    font-size: 40px;
                }
                </style> 

      <!-- Koneksi database -->
      <script type = "text/javascript" >
                // kirim nilai data ke website secara realtime
                $(document).ready(function() {

                    setInterval(function() {
                        $("#cektegangan").load('cektegangan.php');
                        $("#cekarus").load('cekarus.php');
                        $("#cekkemiringan").load('cekkemiringan.php');
                        $("#cekdaya").load('cekdaya.php');

                    }, 2000);
                } );
                //akhir perintah load data

                //Memanggil Data Grafik
                var refreshid = setInterval(function() {
                        $("#responsgrafiktegangan").load('grafiktegangan.php');
                        $("#responsgrafikarus").load('grafikarus.php');
                        $("#responsgrafikkemiringan").load('grafikkemiringan.php');
                        $("#responsgrafikdaya").load('grafikdaya.php');
                }, 2000);
        </script>
    
</head>
<body>
        <!--Menampilkan Gambar -->
        <img class = "gambar" src = "images/unila.jpg">

        <!-- Menampilkan Heading judul -->
        <div class = "judul"> Monitoring Output Sel Surya </div>
        
        <!-- Elemen Website Menghadap Ke Samping -->
        <div class = "container" style = "display : flex">

        <!-- menampilkan nilai tegangan -->
        <div class = "card-tegangan">
              <div class = "card-header">
                  Tegangan (Volt)
              </div>
              <div class = "card-body-tegangan">
                  <span id = "cektegangan"> 0 </span> 
              </div>
        </div>
        <!-- akhir menampilkan nilai tegangan -->
        

        <!-- menampilkan nilai arus -->
        <div class="card-arus">
              <div class="card-header">
                  Arus (Ampere)
              </div>
              <div class="card-body-arus">
                  <span id = "cekarus"> 0 </span> 
              </div>
        </div>
        <!-- akhir menampilkan nilai arus -->

        <!-- menampilkan nilai kemiringan -->
        <div class="card-kemiringan">
            <div class="card-header">
                Sudut Kemiringan  (<sup>o</sup>) 
            </div>
            <div class="card-body-kemiringan">
                <span id = "cekkemiringan"> 0 </span>
            </div>
        </div>
        <!-- akhir menampilkan nilai kemiringan -->

    
        <!-- menampilkan nilai daya -->
        <div class="card-arus">
              <div class="card-header">
                  Daya Output (Watt)
              </div>
              <div class= "card-body-daya">
                  <span id = "cekdaya"> 0 </span>
              </div>
        </div>
        <!-- akhir menampilkan nilai daya -->
        </div>

        <!-- Menampilkan Grafik -->
        <div class = "container-fluid1">
                <div class = "grafiktegangan" id = "responsgrafiktegangan"></div>
                <div class = "grafikarus" id = "responsgrafikarus"></div>
        </div>

        <div class = "container-fluid2">
                <div class = "grafikkemiringan" id = "responsgrafikkemiringan"></div>
                <div class = "grafikdaya" id = "responsgrafikdaya"></div>
        </div>
        
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>