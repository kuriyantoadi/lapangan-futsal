
  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Data Akun</h5>

              <?= $this->session->flashdata('msg') ?>

              <?php
              echo form_open('C_pelanggan/data_akun_up');
              foreach ($cari_pelanggan as $row) {
              ?>

              <div class="col-12" >
                <label for="yourUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <input type="hidden" name="id_pelanggan" class="form-control" value="<?= $row->id_pelanggan ?>" required>
                  <input type="text" name="username" class="form-control" value="<?= $row->username ?>" required>
                </div>
              </div>

              <div class="col-12">
                <label for="yourName" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="<?= $row->nama_lengkap ?>"  required>
              </div>

              <div class="col-12">
                <label for="yourName" class="form-label">Nomor HP</label>
                <input type="text" name="no_hp" class="form-control" value="<?= $row->no_hp ?>"  required>

              </div>

              <div class="col-12">
                <label for="yourName" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="<?= $row->email ?>"  required>

              </div>

              <div class="col-12">
                <label for="yourName" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $row->alamat ?>" required>
              </div>

              <div class="col-12">
                <label for="yourName" class="form-label">Nama Club</label>
                <input type="text" name="nama_club" class="form-control" value="<?= $row->nama_club ?>" required>
              </div>

            <?php }  ?>
              <center>
              <input value="simpan" style="margin-top: 20px" type="submit" class="btn btn-primary btn-sm rounded-pill"></input>
            </div>
          </div>
          <?= form_close() ?>

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Ganti Password</h5>

              <?php
              echo form_open('C_pelanggan/data_akun_password');
              ?>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id_pelanggan" value="<?= $row->id_pelanggan ?>" class="form-control" required>
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
