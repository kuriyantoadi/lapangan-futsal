
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Data Lapangan</h5>

              <?= $this->session->flashdata('msg') ?>
              <?php echo form_open('C_admin/lapangan_tambah'); ?>

              <button style="margin-bottom: 30px; margin-top: 30px" type="button" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#largeModal">Tambah</button>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lapangan</th>
                    <th>Harga Sewa</th>
                    <th>Kondisi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <?php
                $no=1;
                foreach ($tampil as $row) {
                 ?>
                <tbody>

                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nama_lapangan ?></td>
                    <td><?= $row->harga_sewa ?></td>
                    <td><?= $row->kondisi ?></td>
                    <td>
                      <a href="<?php echo site_url('C_admin/lapangan_hapus/'.$row->id_lapangan); ?>" class="btn btn-sm btn-danger rounded-pill"
                        onclick="return confirm('Anda yakin menghapus data <?= $row->id_lapangan ?> ?')">Hapus</a>
                      <a href="<?php echo site_url('C_admin/lapangan_edit/'.$row->id_lapangan); ?>" class="btn btn-sm btn-success rounded-pill">Edit</a>
                      <a href="<?php echo site_url('C_admin/lapangan_detail/'.$row->id_lapangan); ?>" class="btn btn-sm btn-primary rounded-pill">Detail</a>

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
            <h5 class="modal-title">Tambah Lapangan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Nama Lapangan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_lapangan" value="" placeholder="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="harga_sewa" value="" placeholder="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Kondisi</label>
              <div class="col-sm-10">
                <select class="form-control" name="kondisi">
                  <option value="Baik">Baik</option>
                  <option value="Dalam Perbaikan">Dalam Perbaikan</option>
                </select>
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

    <!-- Modal Tambah Admin -->
    <div class="modal fade" id="largeModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Password Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="" placeholder="" >
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="password" value="" placeholder="" >
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <select class="form-control" name="status">
                  <option value="Admin">Admin</option>
                  <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
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
