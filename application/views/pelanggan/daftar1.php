<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          
            <div class="card mb-6">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Daftar Pelanggan</h5>
                  <p class="text-center small">Blafut Futsal Cikande </p>
                </div>

                <?= form_open('C_user/daftar'); ?>
                <form class="row g-6 needs-validation" novalidate>

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" name="username" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please choose a username.</div>
                    </div>
                  </div>


                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Password</label>
                    <input type="email" name="email" class="form-control" id="yourEmail" required>
                    <div class="invalid-feedback">Password Kosong!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Username kosong!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Status</label>
                    <input type="text" name="name" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Username kosong!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Nomor HP</label>
                    <input type="text" name="name" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Username kosong!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Email</label>
                    <input type="text" name="name" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Username kosong!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Alamat</label>
                    <input type="text" name="name" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Username kosong!</div>
                  </div>

                  <div class="col-12">
                    <label for="yourName" class="form-label">Nama Club</label>
                    <input type="text" name="name" class="form-control" id="yourName" required>
                    <div class="invalid-feedback">Username kosong!</div>
                  </div>


                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Daftar</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Sudah punya akun? <a href="pages-login.html">Masuk</a></p>
                  </div>
                </form>

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->
