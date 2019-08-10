<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gawein.id</title>

    <!-- Style -->
    <link rel="stylesheet" href="./css/style-index.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- HOME PAGE -->

    <style>

      .btn-homepage{
        display: block;
        border: 1px solid #fff !important;
        shadow: none;
        background-color: transparent !important;
        box-shadow: none;
        font-size: 24px; width: 100%;
        margin-bottom: 20px;
        color: #fff;
      }

      .btn-homepage:hover{
        text-decoration: none !important;
        background-color: #fff !important;
        transition: background-color 200ms ease;
        color: #5CDB95;
      }

      .btn-homepage a:hover{

      }

      .homepage_desc{
        color: #fff !important;

      }

      .round-border{
        display: inline-block;
        padding-top: 20px;
        font-size: 72px;
        text-align: center;
        width: 150px;
        height: 150px;
        border: 1px solid #909090;
        border-radius: 100%;
        color: #505050;
      }

      .round-border p{
        font-size: 24px;
        background-color: #777;
      }



      .footer-container {
        margin-top: 30px;
        background-color: #31794B;
        box-shadow: 0px 0px 15px #396549;
      }
      .footer-container h3 {
        font-weight: bold;
        color: #154229;
      }
      .footer-container ul {
        list-style: none;
        padding: 0px 0px;
      }
      .footer-container p {
        color: #7fD0A3;
      }
      .footer-container ul li a, .footer-container p a {
        color: #5CDB95;
      }
    </style>

    
    <!-- Landing Page -->
    <section class="container-fluid home">
      <div class="row home-container">
        <div style=" position: absolute; width: 100%; height: 100%; background-color: black; opacity: .4"></div>
        <div class="col-md-4 col-md-offset-1" style="top: 20vh;">
          <img src="/asset/images/gawein-logo.png" width="400px">
          <!-- List Pekerja Lokal -->
          <h4 class="homepage_desc">Cari kerja? Atau butuh tukang? Gak pake ribet, langsung pilih:</h4>
            <a class="btn btn-worker btn-homepage" href="/view/list_pekerja_lokal.php">Cari Pekerja</a>
          <!-- List Project Lokal -->
            <a href="/view/list_kerjaan_lokal.php" class="btn btn-project btn-homepage">Cari Project</a>
        </div>
      </div>
    </section>
    <!-- End of Landing Page -->

    <section class="container-fluid " style="padding-bottom: 60px;">
      <div class="container">
        <div class="row" style="margin-top: 100px;">
          <div class="col-md-4" style="text-align: center;">
            <div class="round-border" style="margin-bottom: 50px;" >
              <i class="fa  fa-address-card-o"></i>
            </div>
            <p style="font-size: 18px;">Pasang profil keahlian anda, pasarkan kemampuan anda</p>
          </div>
          <div class="col-md-4" style="text-align: center;">
            <div class="round-border" style="margin-bottom: 50px;" >
              <i class="fa fa-map"></i>
            </div>
            <p style="font-size: 18px;">Temui pekerja-pekerja lokal terbaik dan terdekat</p>
          </div>
          <div class="col-md-4" style="text-align: center;">
            <div class="round-border" style="margin-bottom: 50px;" >
              <i class="fa fa-handshake-o"></i>
            </div>
            <p style="font-size: 18px;">Mempertemukan antara pencari kerja dan pekerja</p>
          </div>
        </div>
      </div>
    </section>

   <!-- Footer -->
   <footer class="container-fluid footer-container" style="padding-bottom: 40px;">
        <div class="row">
          
          <div class="col-md-4">
            <h3><span class="span">Gawein.</span>id</h3>
            <p>&copy;2019 ALL Right Reserved | Privacy Policy</p>
          </div>
          <div class="col-md-4">
            <h3>Link</h3>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Sitemap</a></li>
              <li><a href="#">Career</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3>Kontak Kami</h3>
            <p>Jl. Arjuna Utara No.9, RT.1/RW.2, Duri Kepa, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11510</p>
            <p>Email : <a href="#"> contact@gawein.id</a></p>
            <p>Lihat di Map <span class="glyphicon glyphicon-screenshot" style="color: #5CDB95"></span></p>
          </div>
        </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>