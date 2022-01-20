
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Data Lama Sewa</h5>

              <?= $this->session->flashdata('msg') ?>
              <?php echo form_open_multipart('C_admin/lama_sewa_tambah'); ?>

              <button style="margin-bottom: 30px; margin-top: 10px" type="button" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#largeModal">Tambah</button>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Lama Sewa</th>
                    <th>Nominal</th>
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
                    <td><?= $row->lama_sewa ?></td>
                    <td><?= $row->nominal ?></td>
                    <td>
                      <a href="<?php echo site_url('C_admin/lama_sewa_hapus/'.$row->id_lama_sewa); ?>" class="btn btn-sm btn-danger rounded-pill"
                        onclick="return confirm('Anda yakin menghapus data <?= $row->id_lama_sewa ?> ?')"><i class="bi bi-trash-fill" title="Hapus"></i></a>
                      <a href="<?php echo site_url('C_admin/lama_sewa_edit/'.$row->id_lama_sewa); ?>" class="btn btn-sm btn-success rounded-pill"><i class="bi bi-pencil-fill" title="Edit"></i></a>
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
    <div class="modal fade" id="largeModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Lama Sewa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Lama Sewa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="lama_sewa" value="" placeholder="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Nominal</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="nominal" value="" placeholder="">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="button">Kembali</button>
            <input type="submit" class="btn btn-primary" name="" value="Simpan">
          </div>
        </div>
      </div>
    </div><!-- End Large Modal-->


  </main><!-- End #main -->
