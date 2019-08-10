<?php include("general/header.php");
?>
      <!-- Section Pekerja-->
      <section class="container section-container-pekerja">
        <div class="row">

          <div class="col-md-3 section-kriteria-pekerja">
            <h4 style="color: #1e7941">Kriteria Pekerja</h4>
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
                <a href="detail_pekerja_lokal.php">Tampilkan...</a>
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
<?php include("general/footer.php"); ?>