<main id="main" class="main">

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 align="center" class="card-title">Pesan Lapangan Tambah</h5>

            <?= $this->session->flashdata('msg') ?>

            <?php
              echo form_open_multipart('C_pelanggan/pesan_lapangan_up');
              foreach ($cari_pelanggan as $row) {
              ?>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="hidden" name="id_pelanggan" class="form-control" value="<?= $row->id_pelanggan ?>" readonly>
                <input type="text" name="username" class="form-control" value="<?= $row->username ?>" readonly>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
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
                  <option value="">Pilihan</option>
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
                <input type="date" name="tgl_main" class="form-control" value="" required>
                <p>Format Bulan/Tanggal/Tahun</p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Lama Main</label>
              <div class="col-sm-10">
                <select class="form-control" name="lama_main" id="lama_main" required>
                  <option data-sewa=""> Pilih </option>
                  <?php foreach ($data_lama_sewa as $row) { ?>
                   <option data-harga_sewa="<?= $row->nominal ?>"> <?= $row->lama_sewa ?> </option>
                 <?php } ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Harga Sewa</label>
              <div class="col-sm-10">
                <input type="text"  name="harga_sewa" id="harga_sewa" class="form-control" readonly>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nominal DP / Bayar</label>
              <div class="col-sm-10">
                <select class="form-control" name="nominal_pembayaran" required>
                  <option value="50000">Rp. 50.000</option>
                  <option value="100000">Rp. 100.000</option>
                  <option value="150000">Rp. 150.000</option>
                  <option value="200000">Rp. 200.000</option>
                  <option value="250000">Rp. 250.000</option>
                  <option value="500000">Rp. 500.000</option>
                  <option value="750000">Rp. 750.000</option>
                  <option value="1000000">Rp. 1.000.000</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
              <div class="col-sm-10">
                <!-- <input class="form-control" type="file" id="formFile"> -->
                <input type="file" name="bukti_pembayaran" class="form-control" value="" required>
                <p>Bukti dalam bentuk photo file (png, jpg, jpeg)
                <br>Ukuran maksimal 5 MB</p>
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Pilih Lapangan</label>
              <div class="col-sm-10">
                <select class="form-control" name="nama_lapangan" required>
                  <option value="">Pilihan</option>
                  <?php foreach ($data_lapangan as $row) { ?>
                  <option value="<?= $row->nama_lapangan ?>"><?= $row->nama_lapangan ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <input type="button" class="btn btn-success btn-sm mt-3 rounded-pill" value="Daftar Lapangan" onclick="js_lapangan()">
            <div id="bl_pilih_lapangan" style="display:none;">
              <table class="table table-bordered mt-3">
                <tr>
                  <th>No</th>
                  <th>Nama Lapangan</th>
                  <th>Kondisi</th>
                  <th>File Photo</th>
                </tr>
                <?php foreach ($data_lapangan as $row) { ?>
                <tr>
                  <?php $no=1; ?>
                  <td><?= $no++  ?></td>
                  <td><?= $row->nama_lapangan ?></td>
                  <td><?= $row->kondisi ?></td>
                  <td>
                    <img height="300px" src="<?= base_url() ?>assets/photo_lapangan/<?= $row->photo_file ?>" alt="photo lapangan">
                  </td>
                </tr>
                <?php } ?>
              </table>
            </div>

          </div>

          <?php }  ?>
          <center>
            <input value="Pesan Lapangan" type="submit" class="btn btn-primary btn-md rounded-pill mb-5"></input>
        </div>
      </div>

      <?php echo form_close() ?>

    </div>
    </div>
  </section>

</main><!-- End #main -->
