<main id="main" class="main">

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 align="center" class="card-title">Pesan Lapangan Lihat</h5>

            <?= $this->session->flashdata('msg') ?>

            <?php
            foreach ($cari_sewa as $row) {
            echo form_open('C_admin/pesan_lapangan_catatan');

           ?>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="hidden" name="id_sewa" value="<?= $row->id_sewa ?>">
                <input type="text" name="nama_lengkap" class="form-control" value="<?= $row->nama_lengkap ?>" disabled disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nomor HP</label>
              <div class="col-sm-10">
                <input type="text" name="no_hp" class="form-control" value="<?= $row->no_hp ?>" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nama Club</label>
              <div class="col-sm-10">
                <input type="text" name="nama_club" class="form-control" value="<?= $row->nama_club ?>" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Jam Pemesanan</label>
              <div class="col-sm-10">
                <input type="text" name="nama_club" class="form-control" value="<?= $row->jam_main ?>" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Tanggal Main</label>
              <div class="col-sm-10">
                <input type="date" name="tgl_main" class="form-control" value="<?= $row->tgl_main ?>" disabled>
                <p>Format Bulan/Tanggal/Tahun</p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Lama Main</label>
              <div class="col-sm-10">
                <input type="text" name="" class="form-control" value="<?= $row->lama_main ?>" disabled>
              </div>
            </div>


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Pilih Lapangan</label>
              <div class="col-sm-10">
                <input type="text" name="nama_club" class="form-control" value="<?= $row->nama_lapangan ?>" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nominal DP</label>
              <div class="col-sm-10">
                <input type="text" name="nominal_pembayaran" class="form-control" value="<?php echo "Rp. ". number_format($row->nominal_pembayaran, 0, ".", "."); ?>" disabled>
                <p>DP minimal 50.000 Rupiah</p>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Status Pembayaran</label>
              <div class="col-sm-10">
                <input type="text" name="nama_club" class="form-control" value="
                <?php
                if ($row->status_pembayaran < 0) {
                  echo "Rp. ". number_format( $row->status_pembayaran, 0, ".", ".");
                }else {
                  echo "Lunas";
                }
                ?>" disabled>
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
              <div class="col-sm-10">
                <img src="<?= base_url() ?>assets/bukti_pembayaran/<?= $row->bukti_pembayaran ?>" height="200px" alt="bukti_pembayaran">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Catatan Untuk Pelanggan</label>
              <div class="col-sm-10">
                <textarea name="catatan" class="form-control" rows="8" cols="80"><?= $row->catatan ?></textarea>
                <input type="submit" name="" value="Kirim Catatan" class="btn btn-secondary btn-sm mt-2">
              </div>
            </div>

          </div>

          <center>
            <a class="btn btn-dark btn-sm rounded-pill btn-md mb-5" href="<?= base_url() ?>C_admin/data_pesan_lapangan">Kembali</a>
            <a class="btn btn-danger btn-sm rounded-pill btn-md mb-5" href="<?= base_url() ?>C_admin/data_pesan_lapangan_tolak/<?= $row->id_sewa ?>">Ditolak</a>
            <a class="btn btn-success btn-sm rounded-pill btn-md mb-5" href="<?= base_url() ?>C_admin/data_pesan_lapangan_diterima/<?= $row->id_sewa ?>">Disetujui</a>
            <a class="btn btn-primary btn-sm rounded-pill btn-md mb-5" href="<?= base_url() ?>C_admin/data_pesan_lapangan_selesai/<?= $row->id_sewa ?>">Selesai</a>

          <?php }  ?>
        </div>
      </div>

      <?php echo form_close() ?>

    </div>
    </div>
  </section>

</main><!-- End #main -->
