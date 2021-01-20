<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="mt-3">Status Pemebelian :</h3>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-dark" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <h4 class="my-3">Pesanan Anda :</h4>
            <ul>
                <li><?= $pembelian['pesanan1'][0]; ?> x <?= $pembelian['jumlah1']; ?> = Rp. <?= intval($pembelian['pesanan1'][1]) * $pembelian['jumlah1'] ?></li>

                <?php if ($pembelian['pesanan2'] != null) : ?>
                    <li><?= $pembelian['pesanan2'][0]; ?> x <?= $pembelian['jumlah2']; ?> = Rp. <?= intval($pembelian['pesanan2'][1]) * $pembelian['jumlah2'] ?></li>
                <?php endif; ?>

                <?php if ($pembelian['pesanan3'] != null) : ?>
                    <li><?= $pembelian['pesanan3'][0]; ?> x <?= $pembelian['jumlah3']; ?> = Rp. <?= intval($pembelian['pesanan3'][1]) * $pembelian['jumlah3'] ?></li>
                <?php endif; ?>
            </ul>

            <?php if ($pembelian['pesanan2'] && $pembelian['pesanan3'] != null) {
                $total = (intval($pembelian['pesanan1'][1]) * $pembelian['jumlah1']) + (intval($pembelian['pesanan2'][1]) * $pembelian['jumlah2']) + (intval($pembelian['pesanan3'][1]) * $pembelian['jumlah3']);
            } ?>

            <h5>Total = Rp. <?= $total; ?> </h5>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>