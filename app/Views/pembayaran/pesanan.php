<?= $this->extend('layout/tamplate'); ?>



<?= $this->section('content'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <h3>Pesanan : </h3>
            <form action="/Pesanan/belanjaan" method="get">
                <input type="hidden" name="user" value="rakha">
                <input type="hidden" name="barang" value="<?= $produk[0]['nama']; ?>">
                <input type="hidden" name="harga" value="<?= $produk[0]['harga']; ?>">
                <ul>
                    <li><?= $produk[0]['nama']; ?></li>
                    <li><?= $produk[0]['harga']; ?></li>
                </ul>
                <label for="jumlah">Jumlah : </label>
                <input type="text" name="jumlah" id="jumlah">
                <button type="submit" class="btn btn-dark" name="submit">Pesan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>