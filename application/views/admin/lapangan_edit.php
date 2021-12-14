
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Detail Data Lapangan</h5>

              <?php
              echo form_open('C_admin/lapangan_edit_up');
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
                <label for="inputText" class="col-sm-2 col-form-label">Photo 1</label>
                <div class="col-sm-10">
                <?php if (empty($row->photo_1)): ?>
                  <input type="file" class="form-control" name="photo_1" required>
                <?php else: ?>
                  <img src="<?= base_url() ?>assets/photo_lapangan/<?= $row->photo_1 ?>" alt="" class="form-control">
                  <br><a href="<?php echo site_url('C_admin/lapangan_hapus_photo1/'.$row->id_lapangan); ?>" class="btn btn-sm btn-danger rounded-pill"
                    onclick="return confirm('Anda yakin menghapus photo <?= $row->nama_lapangan ?> ?')">Hapus Gambar</a>
                <?php endif; ?>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Photo 2</label>
                <div class="col-sm-10">
                <?php if (empty($row->photo_2)): ?>
                  <input type="file" class="form-control" name="photo_2" required>
                <?php else: ?>
                  <img src="<?= base_url() ?>assets/photo_lapangan/<?= $row->photo_2 ?>" alt="" class="form-control">
                  <br><a href="<?php echo site_url('C_admin/lapangan_hapus_photo2/'.$row->id_lapangan); ?>" class="btn btn-sm btn-danger rounded-pill"
                    onclick="return confirm('Anda yakin menghapus photo <?= $row->nama_lapangan ?> ?')">Hapus Gambar</a>
                <?php endif; ?>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Photo 3</label>
                <div class="col-sm-10">
                <?php if (empty($row->photo_3)): ?>
                  <input type="file" class="form-control" name="photo_3" required>
                <?php else: ?>
                  <img src="<?= base_url() ?>assets/photo_lapangan/<?= $row->photo_3 ?>" alt="" class="form-control">
                  <br><a href="<?php echo site_url('C_admin/lapangan_hapus_photo3/'.$row->id_lapangan); ?>" class="btn btn-sm btn-danger rounded-pill"
                    onclick="return confirm('Anda yakin menghapus photo <?= $row->nama_lapangan ?> ?')">Hapus Gambar</a>
                <?php endif; ?>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label" required>Kondisi </label>
                <div class="col-sm-10">
                  <select class="form-control" name="kondisi" >
                    <option value="Baik">Baik</option>
                    <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                  </select>
                </div>
              </div>

            <?php }  ?>
              <center>
              <input value="simpan" type="submit" class="btn btn-primary btn-sm rounded-pill"></input>
              <a class="btn btn-danger btn-sm rounded-pill" href="<?= base_url() ?>C_admin/data_pelanggan">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
