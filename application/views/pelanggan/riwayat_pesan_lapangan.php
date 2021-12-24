
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 align="center" class="card-title">Riwayat Pesan Lapangan</h5>

              <?= $this->session->flashdata('msg') ?>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th >No</th>

                    <th>Nama Lapangan</th>
                    <th>Jam Main</th>
                    <th>Tanggal Main</th>
                    <th>Lama Main</th>
                    <th>Pembayaran</th>
                    <th>Status Sewa</th>
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
                    <td><?= $row->jam_main ?></td>
                    <td><?= $row->tgl_main ?></td>
                    <td><?= $row->lama_main ?> Jam</td>
                    <td><?= $row->status_pembayaran ?></td>
                    <td><?= $row->status_sewa ?></td>

                    <td>
                      <!-- <a href="<?php echo site_url('C_admin/admin_hapus/'.$row->id_admin); ?>" class="btn btn-sm btn-danger rounded-pill"
                        onclick="return confirm('Anda yakin menghapus data <?= $row->username ?> ?')">Hapus</a>
                      <a href="<?php echo site_url('C_admin/admin_edit/'.$row->id_admin); ?>" class="btn btn-sm btn-success rounded-pill">Edit</a>
                      <a href="<?php echo site_url('C_admin/admin_pass/'.$row->id_admin); ?>" class="btn btn-sm btn-secondary rounded-pill">Reset Password</a> -->

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


  </main><!-- End #main -->
