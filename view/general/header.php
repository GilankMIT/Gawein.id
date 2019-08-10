<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gawein.id</title>

    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css">

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
              <a href="/"><img src="/asset/images/gawein-logo.png" style="width: 290px; height: 95px; margin: 10px 0px;" class="img-responsive"></a>
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
            <a href="#" style="color: #a1dba0" data-toggle="modal" data-target="#login">Login</a> <span style="color: #a1dba0"> | </span> <a style="color: #a1dba0" href="#" data-toggle="modal" data-target="#daftar">Daftar</a>
          </div>
        </div>
      </div>

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


      <div class="modal fade" id="tambah_kerjaan" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Daftar</h4>
            </div>
            <div class="modal-body">
              <form class = "container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                    <label for="">Nama Lengkap<span style = "color:red">*</span> </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama lengkap anda..">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Nomor Telepon<span style = "color:red">*</span></label>
                <input type="text" class="form-control" id="" placeholder="Masukkan nomor handphone/telepon anda..">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <label for="">Jenis Pekerjaan<span style = "color:red">*</span></label>
            <select class="form-control input-sm">
            <option value="Ledeng">Ledeng</option>
            <option value="Listrik">Listrik</option>
            <option value="Bangunan">Bangunan</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="">E-mail</label>
            <input type="email" class="form-control" id="" placeholder="Masukkan e-mail anda(Optional)...">
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <label for="">Alamat<span style = "color:red">*</span></label>
            <input type="text" class="form-control" id="" placeholder="Masukkan alamat anda...">   
        </div>
        <div class="col-md-4">
            <label for="">Daerah Domisili<span style = "color:red">*</span></label>
                <select class="form-control input-sm">
                <option value="jakbar">Desa 1</option>
                <option value="jakpus">Desa 2</option>
                <option value="jakut">Desa 3</option>
                <option value="jaktim">Desa 4</option>
                <option value="jaksel">Desa 5</option>
                </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi Pekerjaan<span style = "color: red">*</span></label>
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="5" placeholder = "Masukan deskripsi pekerjaan disini..."></textarea>
            </div>
        </div>
    </div>  

    <div class="row">
        <div class="col-md-12">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Estimasi Upah<span style = "color: red">*</span></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Rupiah" placeholder = "Rp.  ">
                        <div class="input-group-append">
                        </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
                <p style = "font-size: 15px" class = "ps">
                    Perhatian: Yang diberi tanda <span style = "color: red">*</span> harus diisi.     
                </p>
        </div>
    </div>

    <button type="submit" class="btn btn-default">Request Pekerjaan</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</form>
            </div>
          </div>
        </div>
      </div>

