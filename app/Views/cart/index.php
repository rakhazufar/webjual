<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>


<div class="col mt-2">
    <div class="container">
        <h4 class="text-center font-weight-bold mt-4 mb-4">Keranjang</h4>
        <?php if (session('cart')) : ?>
            <form action="<?= base_url('cart/update'); ?>" method="post">
                <div class="row">
                    <?php foreach ($items as $item) : ?>
                        <?php $gambar = $item['gambar']; ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="<?= base_url($gambar); ?>" class="card-img-top" alt="...">
                                <div class="card-body bg-light">
                                    <h5 class="card-title"><?= $item['nama']; ?></h5>
                                    <p class="text-danger"><strong> Rp. <?= $item['harga']; ?></strong></p>
                                    <p class="my-2"> Jumlah : <input type="number" min="1" value="<?= $item['quantity']; ?>" style="width: 50px;" name="quantity[]"></p>
                                    <p><strong> Total : Rp . <?= $item['harga'] * $item['quantity'] ?></strong></p>
                                    <input type="submit" class="btn btn-dark btn-sm mr-2" value="Refresh Total">
                                    <a href="<?= base_url('cart/remove/' . $item['id']) ?>" class="btn btn-dark btn-sm">Hapus</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <h4 class="font-weight-bold mt-4 mb-4">Total : Rp. <?= $total; ?></h4>
                <a href="<?= base_url('Pages') ?>" class="btn btn-dark">Belanja</a>
                <a href="<?= base_url('cart/bayar') ?>" class="btn btn-dark">Bayar</a>
            </form>
        <?php else : ?>

            <h1 class="my-3">Ups... keranjang anda kosong</h1>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('madu2.png'); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 style="color: black;">Madu Berkualitas</h5>
                            <p class="text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptas ipsa.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('madu3.png'); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kopi Herbal Alami</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione provident a nobis neque similique.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('madu1.png'); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Produk Terjamin</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis tempore odit quibusdam.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <?php endif ?>
    </div>
</div>



<?= $this->endSection(); ?>