  <?php
  include("general/header.php");
  ?>
<link rel="stylesheet" href="/css/list_kerjaan.css">
<div class="container">
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
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah_kerjaan">
                        <i class="fas fa-briefcase"></i>
                        Buat Pekerjaan
                      </button>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            &nbsp;
        </div>
            <div class="col-sm-2" class="center">
                <img class="rounded mx-auto d-block" id="profile" src="/img/profile.jpg" alt="Profile Picture"/>
            </div>

            <div class="col-sm-7">
                <a class="title-project" href="#">Menanam Padi di Desa Malahayu</a>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium officia veniam adipisci, officiis totam odio praesentium. Animi culpa labore repellendus, odit velit illo, aut nam quidem delectus ad, similique maiores. </p>
            
            </div>
        </div>

      

    
    <div style="text-align: center">
    <h5 class="title">&nbsp;</h5>    
    <ul class="pagination pagination-sm justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
    </div>
</div>
<?php
include("general/footer.php");
?>