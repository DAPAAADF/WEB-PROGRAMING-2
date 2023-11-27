<div id="sidebar">
    <div class="logo">
        <a href="<?= base_url() ?>">
            <img src="<?= base_url('assets/imgs/kokue-logo.svg') ?>" alt="KOKUE LOGO" class="brand-img">
        </a>
    </div>
    <div class="nav-container">
        <div class="nav-links">
            <a href="<?= base_url() ?>" class="nav-link text_small">
                <span class="material-symbols-rounded">
                    dashboard
                </span>
                Dashboard
            </a>
            <a href="<?= base_url('/products') ?>" class="nav-link text_small">
                <span class="material-symbols-rounded">
                    cookie
                </span>
                Products
            </a>
            <a href="<?= base_url('/transactions') ?>" class="nav-link text_small">
                <span class="material-symbols-rounded">
                    receipt_long
                </span>
                Transactions
            </a>
            <a href="<?= base_url('/reports') ?>" class="nav-link text_small">
                <span class="material-symbols-rounded">
                    insights
                </span>
                Reports
            </a>
        </div>
        <div class="settings">
            <a href="<?= base_url('/logout') ?>" class="nav-link text_small">
                <span class="material-symbols-rounded">
                    logout
                </span>
                Logout
            </a>
        </div>
    </div>
</div>