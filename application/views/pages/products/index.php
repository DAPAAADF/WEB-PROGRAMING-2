<main id="main">
    <!-- Navbar -->
    <?php $this->load->view('layouts/_navbar') ?>
    <!-- End of Navbar -->

    <div id="mainContent">
        <div class="product-header">
            <h3><?= $title; ?></h3>
            <a href="<?= base_url('products/add') ?>" class="btn btn-primary btn-sm rounded">
                <span style="margin-right: 8px;">
                    <i class="fa-regular fa-plus"></i>
                </span>
                New Product
            </a>
        </div>
        <div class="product-cards-container">
            <?php foreach ($products as $product) : ?>
                <div class="card">
                    <img src="<?= base_url('assets/imgs/img-placeholder.png') ?>" class="card-img-top" alt="Product image">
                    <div class="card-body">
                        <h6><span class="badge bg-secondary"><?= $product->category_name; ?></span></h6>
                        <h5 class="card-title"><?= $product->product_name; ?></h5>
                        <p class="card-text">Rp.<?= number_format($product->price, 0, ',', '.') ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>