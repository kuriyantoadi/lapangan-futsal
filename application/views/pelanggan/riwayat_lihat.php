<main id="main" class="main">

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 align="center" class="card-title">Pesan Lapangan</h4>

            <?= $this->session->flashdata('msg') ?>

            <?php
              foreach ($tampil as $row) {
              ?>

              <table class="table table-bordered">
                <tr>
                  <td>Nama Lengkap</td>
                  <td><?= $row->nama_lengkap ?></td>
                </tr>
                <tr>
                  <td>No Hp</td>
                  <td><?= $row->no_hp ?></td>
                </tr>
                <tr>
                  <td>Nama Club</td>
                  <td><?= $row->nama_club ?></td>
                </tr>
                <tr>
                  <td>Tanggal Pesan</td>
                  <td><?= $row->tgl_pesan ?></td>
                </tr>
                <tr>
                  <td>Jam Main</td>
                  <td><?= $row->jam_main ?></td>
                </tr>
                <tr>
                  <td>Tanggal Main</td>
                  <td><?= $row->tgl_main ?></td>
                </tr>
                <tr>
                  <td>Lama Main</td>
                  <td><?= $row->lama_main ?></td>
                </tr>
                <tr>
                  <td>Nama Lapangan</td>
                  <td><?= $row->nama_lapangan ?></td>
                </tr>
                <tr>
                  <td>Harga Sewa</td>
                  <td><?php echo "Rp. ". number_format($row->harga_sewa, 0, ".", "."); ?></td>
                </tr>

                <tr>
                  <td>Nominal Pembayaran</td>
                  <td><?php echo "Rp. ". number_format($row->nominal_pembayaran, 0, ".", "."); ?></td>
                </tr>
                <tr>
                  <td>Status Pembayaran</td>
                  <td>
                    <?php
                    if ($row->status_pembayaran < 0) {
                      echo "Rp. ". number_format( $row->status_pembayaran, 0, ".", ".");
                    }else {
                      echo "Lunas";
                    }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Status Sewa</td>
                  <td><?= $row->status_sewa ?></td>
                </tr>
                <tr>
                  <td>Catatan dari Admin</td>
                  <td><?= $row->catatan ?></td>
                </tr>
              </table>

                <center><a href="<?= base_url() ?>C_pelanggan/riwayat_pesan_lapangan" class="btn btn-danger btn-sm rounded-pill">Kembali</a>

            </div>
          </div>

          <?php }  ?>

        </div>
      </div>

    </div>
    </div>
  </section>

</main><!-- End #main -->
