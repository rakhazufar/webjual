<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <?php if (session()->getFlashData('pesanan')) : ?>
                <div class="alert alert-primary" role="alert">
                    <?= session()->getFlashData('pesanan') ?>
                </div>
            <?php endif; ?>

            <?php
            unset($_SESSION['cart']);
            ?>

            <h3>Kirim bukti pembayaran melalui whatsapp agar pesanan dapat langsung diproses</h3>
            <h4>Nomor Rekening : 12412414141 a.n Rakha zufar</h4>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>