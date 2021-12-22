
  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Pesan Lapangan Tambah</h5>

              <?= $this->session->flashdata('msg') ?>

              <?php
              echo form_open('C_pelanggan/pesan_lapangan');
              foreach ($cari_pelanggan as $row) {
              ?>

              <div class="col-12" >
                <label for="yourUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                  <input type="hidden" name="id_pelanggan" class="form-control" value="<?= $row->id_pelanggan ?>" readonly>
                  <input type="text" name="username" class="form-control" value="<?= $row->username ?>" readonly>
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
                <label for="yourName" class="form-label">Nama Club</label>
                <input type="text" name="nama_club" class="form-control" value="<?= $row->nama_club ?>" required>
              </div>

              <div class="col-12">
                <label for="yourName" class="form-label">Jam Pemesanan</label>
                <input type="time" name="tgl_pemesanan" class="form-control" value="" required>
              </div>

              <div class="col-12">
                <label for="yourName" class="form-label">Tanggal Pemesanan</label>
                <input type="date" name="tgl_pemesanan" class="form-control" value="" required>
              </div>

              <div class="col-12">
                <label for="yourName" class="form-label">Lama Main</label>
                <select class="form-control" name="lama_main">
                  <option value="1">1 jam</option>
                  <option value="2">2 jam</option>
                  <option value="3">3 jam</option>
                  <option value="4">4 jam</option>
                </select>
              </div>

            <?php }  ?>
              <center>
              <input value="simpan" style="margin-top: 20px" type="submit" class="btn btn-primary btn-sm rounded-pill"></input>
            </div>
          </div>

          <?php echo form_close() ?>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
