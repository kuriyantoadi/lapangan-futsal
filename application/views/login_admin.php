
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-1">
              </div>
              <div class="col-lg-10">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-1">Selamat Datang</h1>
                    <h3 class="h6 text-gray-900 mb-4">Futsal Cikande Login Admin</h3>
                  </div>
                  <?= form_open('C_login/admin_login'); ?>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>

                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Login"></input>

                    <hr>
                    <?= form_close() ?>


                  <div class="text-center">
                    <a class="small" href="register.html">Daftar</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-1">
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
