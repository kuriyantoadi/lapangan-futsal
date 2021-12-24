<main id="main" class="main">

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 align="center" class="card-title">Pesan Lapangan Edit</h5>

            <?= $this->session->flashdata('msg') ?>

            <?php
              echo form_open('C_admin/pesan_lapangan_edit_up');
              foreach ($cari_sewa as $row) {
              ?>


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="hidden" name="id_sewa" value="<?= $row->id_sewa ?>">
                <input type="text" name="nama_lengkap" class="form-control" value="<?= $row->nama_lengkap ?>" readonly required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nomor HP</label>
              <div class="col-sm-10">
                <input type="text" name="no_hp" class="form-control" value="<?= $row->no_hp ?>" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nama Club</label>
              <div class="col-sm-10">
                <input type="text" name="nama_club" class="form-control" value="<?= $row->nama_club ?>" required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Jam Pemesanan</label>
              <div class="col-sm-10">
                <select class="form-control" name="jam_main" required>
                  <option value="<?= $row->jam_main ?>">Pilihan Awal => <?= $row->jam_main ?></option>
                  <option value="08:00">08:00</option>
                  <option value="09:00">09:00</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                  <option value="19:00">19:00</option>
                  <option value="20:00">20:00</option>
                  <option value="21:00">21:00</option>
                  <option value="22:00">22:00</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Tanggal Main</label>
              <div class="col-sm-10">
                <input type="date" name="tgl_main" class="form-control" value="<?= $row->tgl_main ?>" required>
                <p>Format Bulan/Tanggal/Tahun</p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Lama Main</label>
              <div class="col-sm-10">
                <select class="form-control" name="lama_main" required>
                  <option value="<?= $row->lama_main ?>">Pilihan Awal => <?= $row->lama_main ?></option>
                  <option value="1">1 jam</option>
                  <option value="2">2 jam</option>
                  <option value="3">3 jam</option>
                  <option value="4">4 jam</option>
                </select>
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Pilih Lapangan</label>
              <div class="col-sm-10">
                <select class="form-control" name="nama_lapangan" required>
                  <option value="<?= $row->nama_lapangan ?>">Pilihan Awal => <?= $row->nama_lapangan ?></option>
                  <?php foreach ($data_lapangan as $row) { ?>
                  <option value="<?= $row->nama_lapangan ?>"><?= $row->nama_lapangan ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nominal DP</label>
              <div class="col-sm-10">
                <input type="number" name="nominal_pembayaran" class="form-control" value="<?= $row->nominal_pembayaran ?>" required>
                <p>DP minimal 50.000 Rupiah</p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Status Pembayaran</label>
              <div class="col-sm-10">
                <select class="form-control" name="status_pembayaran" required>
                  <option value="<?= $row->status_pembayaran ?>">Pilihan Awal => <?= $row->status_pembayaran ?></option>
                  <option value="DP">DP</option>
                  <option value="lunas">Lunas</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
              <div class="col-sm-10">
                <img src="<?= base_url() ?>assets/bukti_pembayaran/<?= $row->bukti_pembayaran ?>" height="200px" alt="bukti_pembayaran">

                <!-- <input type="file" name="bukti_pembayaran" class="form-control" value="" disabled> -->
              </div>
            </div>



          </div>

          <?php }  ?>
          <center>
            <input value="simpan" type="submit" class="btn btn-primary btn-md rounded-pill mb-5"></input>
        </div>
      </div>

      <?php echo form_close() ?>

    </div>
    </div>
  </section>

</main><!-- End #main -->
