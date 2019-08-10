<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gawein.id</title>

    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #EDF5E1;">

  <!-- List Pekerja -->
    <!-- List Page -->

      <!-- Header -->
      <div class="container-fluid header-container">
        <div class="row">
          <div class="col-sm-3">
            <center>
              <a href="index.php"><img src="/asset/images/gawein-logo.png" style="width: 290px; height: 95px; margin: 10px 0px;" class="img-responsive"></a>
            </center>
          </div>
          <div class="col-md-6 header-search">
            <form action="">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" id="inputGroupSuccess1" placeholder="Search Pekerja" aria-describedby="inputGroupSuccess1Status">
                  <div class="input-group-addon search" onclick=""><span class="glyphicon glyphicon-search"></span></div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-3 header-login">
            <a href="#" style="color: #A1DBA0" data-toggle="modal" data-target="#login">Login</a> <span style="color: #A1DBA0"> | </span> <a href="#" style="color: #A1DBA0" data-toggle="modal" data-target="#daftar">Daftar</a>
          </div>
        </div>
      </div>
      <!-- End of Header -->

      <!-- Section Pekerja-->
      <section class="container section-container-pekerja">
        <div class="row">

          <div class="col-md-3 section-kriteria-pekerja">
            <h4 style="color: #1E7941">Kriteria Pekerja</h4>
            <form action="">
              <input type="text" class="form-control" placeholder="Cari Kriteria">
              <select class="form-control">
                <option value=""> Pilih... </option>
                <option value=""> Text </option>
                <option value=""> Text </option>
                <option value=""> Text </option>
                <option value=""> Text </option>
              </select>
              <button class="btn btn-default btn-block" type="submit">Cari Pekerja</button>
            </form>
          </div>

          <div class="col-md-8 col-md-offset-1 section-list-pekerja" style="margin-top: 20px;">
            <div class="row section-pekerja">
              <div class="col-md-3">
                <img class="section-foto-pekerja img-responsive img-rounded" src="../asset/images/profile.png" alt="">
              </div>
              <div class="col-md-6">
                <h3>Bejo</h3>
                <p>Jl.Pembangunan 1, Bogor, Jawa Barat.</p>
                <a href="#">Tampilkan...</a>
              </div>
              <div class="col-md-3">
                <h4>Keahlian</h4>
                <p>Ledeng</p>
              </div>
            </div>

            <div class="row section-pekerja">
              <div class="col-md-3">
                <img class="section-foto-pekerja img-responsive img-rounded" src="../asset/images/profile.png" alt="">
              </div>
              <div class="col-md-6">
                <h3>Parto</h3>
                <p>Jl.Pembangunan 2, Bogor, Jawa Barat.</p>
                <a href="#">Tampilkan...</a>
              </div>
              <div class="col-md-3">
                <h4>Keahlian</h4>
                <p>Kuli Bangunan</p>
              </div>
            </div>

            <div class="row section-pekerja">
              <div class="col-md-3">
                <img class="section-foto-pekerja img-responsive img-rounded" src="../asset/images/profile.png" alt="">
              </div>
              <div class="col-md-6">
                <h3>Galuh</h3>
                <p>Jl.Pembangunan , Bogor, Jawa Barat.</p>
                <a href="#">Tampilkan...</a>
              </div>
              <div class="col-md-3">
                <h4>Keahlian</h4>
                <p>kelistrikan</p>
              </div>
            </div>
            
            <!-- Pagination -->
            <nav aria-label="...">
              <ul class="pager">
                <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
                <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
              </ul>
            </nav>
            <!-- Pagination End -->
          </div>
        
        </div>
      </section>
      <!-- End of Section Pekerja-->

      <!-- Modal Login -->
      <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal daftar -->
      <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Daftar</h4>
            </div>
            <div class="modal-body">
              <form>

                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Daftar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
<?php
include("general/footer.php");
?>