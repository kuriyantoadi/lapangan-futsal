
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Data fasilitas</h5>

              <?= $this->session->flashdata('msg') ?>
              <?php echo form_open('C_admin/fasilitas_tambah'); ?>

              <button style="margin-bottom: 30px; margin-top: 30px" type="button" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#largeModal">Tambah</button>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Isi fasilitas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <?php
                $no=1;
                foreach ($data_fasilitas as $row) {
                 ?>
                <tbody>

                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->isi_fasilitas ?></td>
                    <td>
                      <a href="<?php echo site_url('C_admin/fasilitas_hapus/'.$row->id_fasilitas); ?>" class="btn btn-sm btn-danger rounded-pill"
                        onclick="return confirm('Anda yakin menghapus data <?= $row->isi_fasilitas ?> ?')"><i class="bi bi-trash-fill" title="Hapus"></i></a>
                      <a href="<?php echo site_url('C_admin/fasilitas_edit/'.$row->id_fasilitas); ?>" class="btn btn-sm btn-success rounded-pill" title="Edit"><i class="bi bi-pencil-fill"></i></a>

                    </td>
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
            <h5 class="modal-title">Tambah Fasilitas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Isi Fasilitas</label>
              <div class="col-sm-10">
                <textarea name="isi_fasilitas" class="ckeditor" id="ckeditor"></textarea>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" name="button">Kembali</button>
            <input type="submit" class="btn btn-primary btn-sm" name="" value="Simpan">
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tambah Admin -->



  </main><!-- End #main -->
