<?= $this->extend('layout/tamplate'); ?>



<?= $this->section('content'); ?>


<?= $this->include('layout/daftarProduk'); ?>

<div class="col-md-10 mt-2">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="madu2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="madu3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="madu1.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h4 class="text-center font-weight-bold mt-4 mb-4">TERBARU</h4>


    <div class="row mx-auto">

        <?php foreach ($produk as $a) : ?>
            <div class="col-md-3">
                <div class="card">
                    <a href="pembayaran/index/<?= $a['id']; ?>" style="text-decoration:none; color:black;">
                        <img src="<?= $a['gambar']; ?>" class="card-img-top" alt="...">
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



<?= $this->endSection(); ?>