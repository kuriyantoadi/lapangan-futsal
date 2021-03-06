<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

           

            <div class="card mb-3">

              <div class="card-body" style="margin: 40px">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login Admin</h5>
                </div>
                <?= $this->session->flashdata('msg') ?>
                <?= form_open('C_login/admin_login'); ?>

                <form class="row g-3 needs-validation" novalidate >

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <input type="text" name="username" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>


                  <div class="col-12">
                    <button class="btn btn-primary w-100" style="margin-top: 20px" type="submit">Login</button>
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
