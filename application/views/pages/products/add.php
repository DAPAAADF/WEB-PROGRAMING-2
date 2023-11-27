<main id="main">
    <!-- Navbar -->
    <?php $this->load->view('layouts/_navbar') ?>
    <!-- End of Navbar -->

    <div id="mainContent">
        <div class="product-header">
            <h3><?= $title; ?></h3>
        </div>
        <div class="product-form">
            <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
            <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
            <div class="form-group">
                <label for="productName">Product name</label>
                <?= form_input('name', $input->name, ['class' => 'form-control', 'id' => 'name', 'required' => true]) ?>
                <?= form_error('name') ?>
            </div>
            <?= form_close() ?>
        </div>
</main>