<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <form action="<?= base_url('cart/inputPesanan'); ?>" action="get">
                <div class="form">
                    <div class="form-group">
                        <label for="nama">Nomor Telpon</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="kontak">Nomor Telpon</label>
                        <input type="text" class="form-control" id="kontak" name="kontak">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>
                <h4 class="text-center">Rincian Pesanan</h4>
                <ul>
                    <?php $i = 0; ?>
                    <?php foreach ($pesanan as $item) : ?>
                        <?php $i++ ?>
                        <h5><?= $item['nama']; ?></h5>
                        <input type="hidden" value="<?= $item['nama']; ?> x<?= $item['quantity']; ?>" name="item_<?= $i; ?>">
                        <li>Jumlah : <?= $item['quantity']; ?></li>
                        <li>Harga : <?= $item['harga']; ?></li>
                        <li>Total : <?= $item['harga'] * $item['quantity']; ?></li>
                    <?php endforeach; ?>
                </ul>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>