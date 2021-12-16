
  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Data Akun</h5>

              <?php
              echo form_open('C_admin/data_akun_up');
              foreach ($cari_admin as $row) {
              ?>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id_admin" value="<?= $row->id_admin ?>" class="form-control" required>
                  <input type="text" name="username" value="<?= $row->username ?>" class="form-control" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select class="form-control" name="status">
                    <option value="admin">Admin</option>
                    <option value="off">Tidak Akif</option>
                  </select>
                </div>
              </div>

            <?php }  ?>
              <center>
              <input value="simpan" type="submit" class="btn btn-primary btn-sm rounded-pill"></input>
            </div>
          </div>
          <?= form_close() ?>

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Ganti Password</h5>

              <?php
              echo form_open('C_admin/data_akun_password');
              ?>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id_admin" value="<?= $row->id_admin ?>" class="form-control" required>
                  <input type="text" name="password" value="" class="form-control" required>
                </div>
              </div>

              <center>
              <input value="simpan" type="submit" class="btn btn-primary btn-sm rounded-pill"></input>
            </div>
          </div>
          <?php echo form_close() ?>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
