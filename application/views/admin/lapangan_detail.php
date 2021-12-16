
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Detail Data Lapangan</h5>

              <?php
              foreach ($cari_lapangan as $row) {
              ?>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Lapangan</label>
                <div class="col-sm-10">
                  <input type="text" name="" value="<?= $row->nama_lapangan ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Harga Sewa</label>
                <div class="col-sm-10">
                  <input type="text" name="" value="<?= $row->harga_sewa ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Kondisi</label>
                <div class="col-sm-10">
                  <input type="text" name="" value="<?= $row->kondisi ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                  <img src="<?= base_url() ?>assets/photo_lapangan/<?= $row->photo_file ?>" alt="Photo belum diupload" class="form-control">
                </div>
              </div>

            <?php }  ?>
              <center>
              <!-- <input value="simpan" type="submit" class="btn btn-primary btn-sm rounded-pill"></input> -->
              <a class="btn btn-danger btn-sm rounded-pill" href="<?= base_url() ?>C_admin/data_lapangan">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
