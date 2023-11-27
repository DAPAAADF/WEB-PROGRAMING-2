<?php

$name    = $this->session->userdata('name');
$role_id    = $this->session->userdata('role_id');

?>

<div id="navbar">
    <div id="searchBar">

    </div>
    <div id="userContainer">
        <div class="user-detail">
            <p class="user-name"><?= $name; ?></p>
            <?php if ($role_id == 1) : ?>
                <p class="user-position">Administrator</p>
            <?php else : ?>
                <p class="user-position">Cashier</p>
            <?php endif ?>
        </div>
        <img src="<?= base_url('assets/imgs/user.png') ?>" alt="user-img" class="user-img">
    </div>
</div>