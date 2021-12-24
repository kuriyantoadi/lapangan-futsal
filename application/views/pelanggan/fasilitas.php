
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5"><center>Fasilitas Penyewaan Lapangan Futsal</h5>

              <?php
              foreach ($cari_fasilitas as $row) {
              ?>

              <?= $row->isi_fasilitas ?>

              <?php } ?>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
