<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monitoring Sel Surya</title>

      <link rel = "stylesheet" type = "text/css" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
      <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

      <script type = "text/javascript" src = "assets/js/jquery-3.4.0.min.js"></script>
      <script type = "text/javascript" src = "assets/js/mdb.min.js"></script>
      <script type = "text/javascript" src = "assets/css/bootstrap.min.js"></script>
      <script type = "text/javascript" src = "konekdatabase.js"></script>
      <!-- load otomatis database ke website/ realtime -->

    
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
</body>
</html>