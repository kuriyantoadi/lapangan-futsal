
  <main id="main" class="main">



    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4"><center>Rekap Data Sewa Lapangan</h5>

                <form method="get" action="<?php echo base_url('C_admin/rekap_sewa') ?>">
                    <div class="row">

                        <div class="row mb-2">
                          <label for="inputText" class="col-sm-2 col-form-label">Tanggal Awal</label>
                          <div class="col-sm-2">
                            <input type="text"  name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control tgl_awal" placeholder="Tanggal Awal" autocomplete="off">
                          </div>
                        </div>

                        <div class="row mb-2">
                          <label for="inputText" class="col-sm-2 col-form-label">Tanggal Akhir</label>
                          <div class="col-sm-2">
                            <input type="hidden" name="id_sewa" value="">
                            <input type="text" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control tgl_akhir" placeholder="Tanggal Akhir" autocomplete="off">
                          </div>
                        </div>
                    </div>

                    <button type="submit" name="filter" value="true" class="btn btn-success btn-sm rounded-pill">Tampil Rekap</button>

                    <?php
                    if(isset($_GET['filter'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                        echo '<a href="'.base_url('C_admin/rekap_sewa').'" class="btn btn-secondary btn-sm rounded-pill">Reset</a>';
                    ?>
                </form>

                <div class="" style="margin-top: 30px">
                  <?php echo $label."" ?>
                  <a class="btn btn-primary btn-sm rounded-pill" href="<?php echo $url_cetak ?>">Download Rekap</a>

                </div>


                <div style="margin-top: 5px;">
                </div>

                <div class="table-responsive" style="margin-top: 10px;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <?php $no=1; ?>
                                <th>No</th>
                                <th>Tanggal Pesan</th>
                                <th>Tanggal Main</th>
                                <th>Lama Main</th>
                                <th>Nama Lapangan</th>
                                <th>Nama Pelanggan</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(empty($rekap_sewa)){ // Jika data tidak ada
                                echo "<tr><td colspan='5'>Data tidak ada, silahkan cek tanggal yang dipilih</td></tr>";
                            }else{ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                                foreach($rekap_sewa as $row){ // Looping hasil data transaksi
                                   $tgl = date('d-m-Y', strtotime($row->tgl_pesan)); // Ubah format tanggal jadi dd-mm-yyyy

                                    echo "<tr>";
                                    echo "<td>".$no++."</td>";
                                    echo "<td>".$row->tgl_pesan."</td>";
                                    echo "<td>".$row->tgl_main."</td>";
                                    echo "<td>".$row->lama_main."</td>";
                                    echo "<td>".$row->nama_lapangan."</td>";
                                    echo "<td>".$row->nama_lengkap."</td>";

                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
