<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/daftarProduk'); ?>

<div class="col-md-10 mt-2">
    <div class="container">
        <h4 class="text-center font-weight-bold mt-4 mb-4">KOPI HERBAL</h4>
        <div class="row">
            <?php foreach ($produk as $a) : ?>
                <div class="col-md-3">
                    <div class="card">
                        <a href="" style="text-decoration:none; color:black;">
                            <img src="<?= $a['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body bg-light">
                                <h5 class="card-title"><?= $a['nama']; ?></h5>
                                <p class="text-danger"><strong> Rp. <?= $a['harga']; ?></strong></p>
                                <p class="card-text"><?= $a['caption']; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>