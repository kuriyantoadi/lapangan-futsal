
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Edit Data Lapangan</h5>

              <?= $this->session->flashdata('msg') ?>

              <?php
              echo form_open_multipart('C_admin/lapangan_edit_up');
              foreach ($cari_lapangan as $row) {
              ?>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label" required>Nama Lapangan</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id_lapangan" value="<?= $row->id_lapangan ?>">
                  <input type="text" name="nama_lapangan" value="<?= $row->nama_lapangan ?>" class="form-control" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label" required>Harga Sewa</label>
                <div class="col-sm-10">
                  <input type="text" name="harga_sewa" value="<?= $row->harga_sewa ?>" class="form-control" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label" required>Kondisi </label>
                <div class="col-sm-10">
                  <select class="form-control" name="kondisi" >
                    <option value="Baik">Baik</option>
                    <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                  </select>

                <center><input value="Simpan Edit Data" type="submit" style="margin-bottom: 30px; margin-top: 15px" class="btn btn-primary btn-sm rounded-pill"></input>

                </div>

              </div>
               <?= form_close() ?>

             <?php echo form_open_multipart('C_admin/tambah_photo'); ?>
             <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                <?php if (empty($row->photo_file)): ?>
                  <input type="hidden" name="id_lapangan" value="<?= $row->id_lapangan ?>">
                  <input type="file" class="form-control" name="photo_file" required>
                  <center><input type="submit" name="" style="margin-top: 15px" class="btn btn-sm btn-success rounded-pill" value="Upload Photo" >
                <?php else: ?>
                  <img src="<?= base_url() ?>assets/photo_lapangan/<?= $row->photo_file ?>" alt="" class="form-control">
                  <br>
                  <center><a href="<?php echo site_url('C_admin/lapangan_hapus_photo/'.$row->id_lapangan); ?>" class="btn btn-sm btn-danger rounded-pill"
                    onclick="return confirm('Anda yakin menghapus photo <?= $row->nama_lapangan ?> ?')">Hapus Gambar</a>
                <?php endif; ?>
                </div>
              </div>

             <?= form_close() ?>

            <?php }  ?>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
