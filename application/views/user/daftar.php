<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <!-- <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
              </a>
            </div> -->
            <!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2" style="margin-left: 40px; margin-right: 40px">
                  <h5 class="card-title text-center pb-0 fs-4">Daftar Pelanggan</h5>
                  <p class="text-center small">Blafut Futsal Cikande </p>
                </div>

                <?= form_open('C_user/daftar'); ?>
                <form class="row g-6 needs-validation" style="margin-left: 30px; margin-right: 30px" novalidate >

                  <div class="col-12" >
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <input type="text" name="username" class="form-control" id="yourUsername" required>
                    </div>
                  </div>


                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Password</label>
                    <input type="text" name="password" class="form-control"  required>
                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control"  required>

                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Status</label>
                    <input type="text" name="status" class="form-control"  required>

                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Nomor HP</label>
                    <input type="text" name="no_hp" class="form-control"  required>

                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control"  required>

                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control"  required>
                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Nama Club</label>
                    <input type="text" name="nama_club" class="form-control"  required>

                  </div>


                  <div class="col-12">
                    <button class="btn btn-primary w-100" style="margin-top: 20px" type="submit">Daftar</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Sudah punya akun? <a href="<?= base_url() ?>C_login">Masuk</a></p>
                  </div>
                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->
