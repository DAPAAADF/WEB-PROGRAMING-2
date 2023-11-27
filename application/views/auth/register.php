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
            <h3 style="width: 100%;" class="mb-5">Sign up</h3>
            <div class="form-inputs">
                <?= form_open('register', ['method' => 'POST']) ?>
                <div class="form-group">
                    <?= form_input('name', $input->name, ['class' => 'form-control', 'placeholder' => 'Fullname', 'required' => true, 'autofocus' => true]) ?>
                    <?= form_error('name') ?>
                </div>
                <div class="form-group">
                    <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'your@mail.com', 'required' => true]) ?>
                    <?= form_error('email') ?>
                </div>
                <div class="form-group">
                    <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Minimal 8 Character', 'required' => true]) ?>
                    <?= form_error('password') ?>
                </div>
                <div class="form-group">
                    <?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' => true]) ?>
                    <?= form_error('password_confirmation') ?>
                </div>
                <button type="submit" style="width: 100%;" class="btn btn-primary rounded-pill mt-4">Sign Up</button>
                <div class="text-center mt-4">
                    <a href="<?= base_url('login') ?>" class="small text-dark">Already a Member? Login here</a>
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