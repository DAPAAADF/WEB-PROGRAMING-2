<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap 4 core CSS -->
    <link href="<?= base_url('/assets/libs/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    <title><?= $title; ?></title>
</head>

<body>
    <div id="auth">
        <div id="form-container">
            <h3 style="width: 100%;" class="mb-5">Login</h3>
            <div class="form-inputs">
                <?= form_open('login', ['method' => 'POST']) ?>
                <div class="form-group">
                    <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'your@mail.com', 'required' => true]) ?>
                    <?= form_error('email') ?>
                </div>
                <div class="form-group">
                    <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => true]) ?>
                    <?= form_error('password') ?>
                </div>
                <button type="submit" style="width: 100%;" class="btn btn-primary rounded-pill mt-4">Login</button>
                <div class="text-center mt-3">
                    <a href="<?= base_url('forgot_password') ?>" class="small text-dark">Forgot Password?</a>
                </div>
                <div class="text-center mt-3">
                    <a href="<?= base_url('register') ?>" class="small text-dark">Not a member? Sign up here</a>
                </div>
                <?= form_close() ?>
            </div>
        </div>
        <div id="img-container">
            <img src="<?= base_url('assets/imgs/auth.png') ?>" alt="user-img" class="auth-img">
        </div>
    </div>

    <script src="<?= base_url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/app.js') ?>"></script>
</body>

</html>