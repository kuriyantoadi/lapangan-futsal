
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Detail Data Lapangan</h5>

              <?php
              echo form_open('C_admin/pelanggan_edit_up');
              foreach ($cari_lapangan as $row) {
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
                <label for="inputText" class="col-sm-2 col-form-label">No Hp</label>
                <div class="col-sm-10">
                  <input type="text" name="no_hp" value="<?= $row->no_hp ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" value="<?= $row->email ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" name="alamat" value="<?= $row->alamat ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Club</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_club" value="<?= $row->nama_club ?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_club" value="<?= $row->status ?>" class="form-control" readonly>
                </div>
              </div>

            <?php }  ?>
              <center>
              <!-- <input value="simpan" type="submit" class="btn btn-primary btn-sm rounded-pill"></input> -->
              <a class="btn btn-danger btn-sm rounded-pill" href="<?= base_url() ?>C_admin/data_pelanggan">Kembali</a>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
