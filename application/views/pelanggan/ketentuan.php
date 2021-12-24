
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5"><center>Ketentuan Penyewaan Lapangan Futsal</h5>

              <?php
              foreach ($cari_ketentuan as $row) {
              ?>

              <?= $row->isi_ketentuan ?>

              <?php } ?>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
