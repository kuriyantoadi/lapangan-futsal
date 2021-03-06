
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Data Admin</h5>

              <?= $this->session->flashdata('msg') ?>

              <button style="margin-bottom: 30px; margin-top: 30px" type="button" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#largeModal"><i class="bi bi-person-plus-fill"></i> Tambah</button>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

                <tbody>

                  <?php
                  $no=1;
                  foreach ($tampil as $row) {
                  ?>

                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->username ?></td>
                    <td><?= $row->status ?></td>
                    <td>
                      <a href="<?php echo site_url('C_admin/admin_hapus/'.$row->id_admin); ?>" class="btn btn-sm btn-danger rounded-pill"
                        onclick="return confirm('Anda yakin menghapus data <?= $row->username ?> ?')" title="Hapus"><i class="bi bi-trash-fill"></i></a>
                      <a href="<?php echo site_url('C_admin/admin_edit/'.$row->id_admin); ?>" class="btn btn-sm btn-success rounded-pill" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                      <a href="<?php echo site_url('C_admin/admin_pass/'.$row->id_admin); ?>" class="btn btn-sm btn-secondary rounded-pill" title="Ganti Password"><i class="bi bi-key-fill"></i></a>
                    </td>
                  </tr>
                <?php } ?>

                </tbody>

              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Modal Tambah Admin -->
    <?php echo form_open('C_admin/admin_tambah'); ?>
    <div class="modal fade" id="largeModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="" placeholder="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="password" value="" placeholder="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <select class="form-control" name="status">
                  <option value="admin">Admin</option>
                  <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm rounded-pill" data-bs-dismiss="modal" name="button">Kembali</button>
            <input type="submit" class="btn btn-primary btn-sm rounded-pill" name="" value="Simpan">
          </div>
        </div>
      </div>
    </div><!-- End Large Modal-->
    <?= form_close()  ?>


  </main><!-- End #main -->
