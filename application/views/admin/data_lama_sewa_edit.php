
  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Edit Lama Sewa</h5>

              <?php
              echo form_open('C_admin/lama_sewa_edit_up');
              foreach ($cari_lama_sewa as $row) {
              ?>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Lama Sewa</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id_lama_sewa" value="<?= $row->id_lama_sewa ?>">
                  <input type="text" name="lama_sewa" class="form-control" value="<?= $row->lama_sewa ?>">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-10">
                  <input type="text" name="nominal"  class="form-control" value="<?= $row->nominal ?>" >
                </div>
              </div>

            <?php }  ?>
              <center>
              <input value="simpan" type="submit" class="btn btn-primary btn-sm rounded-pill"></input>
              <a class="btn btn-danger btn-sm rounded-pill" href="<?= base_url() ?>C_admin/fasilitas">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
