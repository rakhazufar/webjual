<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>

<div class="container mt-2">
    <div class="row">
        <div class="col">
            <h3 class="mt-3">Beli :</h3>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url($produk['gambar']) ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produk['nama']; ?></h5>
                            <p class="text-danger"><strong> Rp. <?= $produk['harga']; ?></strong></p>
                            <p class="card-text"><?= $produk['caption']; ?></p>
                            <a href="<?= base_url('/'); ?>" class="btn btn-dark mt-2">Batal</a>
                            <a href="<?= base_url('pembayaran/barang'); ?>/<?= $produk['id']; ?>" class="btn btn-dark mt-2">Beli</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-dark" href="<?= base_url('/'); ?>" role="button">Belanja Lagi</a>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>