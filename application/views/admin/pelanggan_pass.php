
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Reset Password Pelanggan</h5>

              <?php
              echo form_open('C_admin/pelanggan_pass_up');
              foreach ($cari_pelanggan as $row) {
              ?>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id_pelanggan" value="<?= $row->id_pelanggan ?>">
                  <input type="text" name="username" value="<?= $row->username ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_lengkap" value="<?= $row->nama_lengkap ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                  <input type="text" name="password" value="" class="form-control" required>
                </div>
              </div>

            <?php }  ?>
              <center>
              <input value="simpan" type="submit" class="btn btn-primary btn-sm rounded-pill"></input>
              <a class="btn btn-danger btn-sm rounded-pill" href="<?= base_url() ?>C_admin/tampil_admin">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
