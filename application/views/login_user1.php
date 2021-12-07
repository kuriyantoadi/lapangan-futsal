<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/login.css">
</head>

<body style="background: #214a80;">
    <div class="login-dark" style="height: 695px;">

        <?= form_open('C_login/user_login'); ?>
            <h2 class="sr-only">Login Form Admin</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <p align='center'>Login Pelanggan Futsal</p>
            <div class="form-group"><input class="form-control" type="" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
