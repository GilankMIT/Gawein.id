    <?php

        include_once("../function/helper.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css">
        <title>Cari Kerja Di Kampung</title>
    </head>
    <body>
        <div class="container">
            <div id="header">
                <a href="<?php echo BASE_URL."index.php";?>">
                    <img src="<?php echo BASE_URL."img/logo.png"; ?> " alt="Gawein.id Logo"/>
                </a>

                <!--Navbar-->
                <nav class="navbar navbar-expand-lg navbar-dark primary-color" style="background-color: #5cdb95;">
                    <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="dropdown active">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                            <span class="title">Projects</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>

                </ul>
                <!-- Links -->

                <form class="form-inline">
                    <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
                </div>
                <!-- Collapsible content -->

                </nav>
                <!--/.Navbar-->

            </div> <!-- Header -->

        <div class="row">  
                <div class="col-sm-3">    
                    <div id="side-bar">
                            <a data-toggle="collapse" href="#bangunRumah" role="button" aria-expanded="false" aria-controls="collapseExample">
                                > Bangun Rumah <br>
                            </a>
                        <!--- Data Toggle Bangun Rumah -->
                        <div class="collapse" id="bangunRumah">
                                <ul>
                                    <li><a href="#">Pemasangan Listrik</a></li>
                                    <li><a href="#">Pemasangan Batu Bata</a></li>
                                    <li><a href="#">Pemasangan Jet Pump</a></li>
                                </ul>
                        </div>
                        <!--- Data Toggle Pertanian-->
                        <a data-toggle="collapse" href="#pertanian" role="button" aria-controls="pertanian">
                                > Pertanian
                            </a> <br>

                        <div class="collapse" id="pertanian">
                                <ul>
                                    <li><a href="#">Panen</a></li>
                                    <li><a href="#">Penanaman</a></li>
                                    <li><a href="#">Penjualan</a></li>
                                </ul>
                        </div>
                        <!--- Data Toggle Servis Elektronik -->
                        <a data-toggle="collapse" href="#servisElektronik" role="button" aria-expanded="false" aria-controls="collapseExample">
                                > Servis Elektronik
                            </a><br>
                        <div class="collapse" id="servisElektronik">
                                <ul>
                                    <li><a href="#">Servis Kulkas</a></li>
                                    <li><a href="#">Servis TV</a></li>
                                    <li><a href="#">Servis HP</a></li>
                                </ul>
                        </div>
                        
                    </div>
                    <br>
                <div id="side-bar">
                    <a href="#">
                        > Buat Pekerjaan
                    </a><br>

                    <a href="#">
                        > Menjadi Pekerja
                    </a><br>
                    
                    <a href="#">
                        > FAQ
                    </a><br>

                </div>

                </div>    

            <div class="col-sm-9">
                <div class="content-page">
                    <h1 class="title">Cari Pekerjaan</h1>
                    <div class="pull-left">
                        <a href="#" class="btn btn-primary btn-rounded">
                            <i class="fas fa-briefcase"></i>
                            Buat Pekerjaan
                        </a>
                    </div>
                    <!-- sengaja buat border -->
                    <h5 class="title">&nbsp;</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                &nbsp;
            </div>
                <div class="col-sm-2">
                    <img class="profile" src="<?php echo BASE_URL."img/profile.jpg"; ?>" alt="Profile Picture"/>
                </div>

                <div class="col-sm-7">
                    <a class="title-project" href="#">Menanam Padi di Desa Malahayu</a>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium officia veniam adipisci, officiis totam odio praesentium. Animi culpa labore repellendus, odit velit illo, aut nam quidem delectus ad, similique maiores. </p>
                </div>
            </div>

            <div class="row">
            <div class="col-sm-3">
                &nbsp;
            </div>
                <div class="col-sm-2">
                    <img class="profile" src="<?php echo BASE_URL."img/profile.jpg"; ?>" alt="Profile Picture"/>
                </div>

                <div class="col-sm-7">
                    <a class="title-project" href="#">Panen Kebun Kacang di Desa Sukoharjo</a>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium officia veniam adipisci, officiis totam odio praesentium. Animi culpa labore repellendus, odit velit illo, aut nam quidem delectus ad, similique maiores. </p>
                </div>
            </div>

            <div class="row">
            <div class="col-sm-3">
                &nbsp;
            </div>
                <div class="col-sm-2">
                    <img class="profile" src="<?php echo BASE_URL."img/profile.jpg"; ?>" alt="Profile Picture"/>
                </div>

                <div class="col-sm-7">
                    <a class="title-project" href="#">Panen Kebun Jeruk di Desa Sumbarejo</a>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium officia veniam adipisci, officiis totam odio praesentium. Animi culpa labore repellendus, odit velit illo, aut nam quidem delectus ad, similique maiores. </p>
                </div>
            </div>

         <!-- sengaja buat border -->
         <h5 class="title">&nbsp;</h5>    
         <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>

    </body>
    </html>