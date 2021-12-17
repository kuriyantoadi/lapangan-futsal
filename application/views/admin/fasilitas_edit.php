
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Edit fasilitas</h5>

              <?php
              echo form_open('C_admin/fasilitas_edit_up');
              foreach ($cari_fasilitas as $row) {
              ?>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Isi Fasilitas</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id_fasilitas" value="<?= $row->id_fasilitas ?>">
                  <textarea name="isi_fasilitas" class="ckeditor" id="ckeditor"><?= $row->isi_fasilitas ?></textarea>
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
