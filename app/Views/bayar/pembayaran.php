<?= $this->extend('layout/tamplate'); ?>



<?= $this->section('content'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h3>Semua Pesanan Anda : </h3>
            <?php foreach ($pesanan as $a) : ?>
                <ul>
                    <h5><?= $a['barang']; ?></h5>
                    <li><?= $a['harga']; ?> x <?= $a['jumlah']; ?></li>
                    <li>Total : <?= $a['harga'] * $a['jumlah']; ?></li>
                </ul>
            <?php endforeach; ?>
            <?php foreach ($pesanan as $a) {
                $total[] = $a['harga'] * $a['jumlah'];
            } ?>
            <h5>Total biaya : <?= array_sum($total); ?> </h5>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>