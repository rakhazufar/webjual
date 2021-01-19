<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>

<div class="container mt-2">
    <div class="row">
        <div class="col-8">
            <h3 class="mt-3">Form Belanja</h3>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-dark" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php else : ?>
                <p>Jika pembelian kurang dari 3, maka tidak perlu diisi seluruh daftar belanja.</p>
            <?php endif; ?>
            <form action="/pembayaran/konfirmasi" method="post">
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="Nama" class="form-control" id="inputNama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputAlamat" name="alamat">
                    </div>
                </div>
                <div class="form-inline ml-3">
                    <div class="form-group row">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Belanja 1</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="pesanan1">
                            <option selected>Pilih</option>
                            <?php foreach ($produk as $a) : ?>
                                <option value="<?= $a['nama']; ?>"><?= $a['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Jumlah" name="jumlah1">
                    </div>
                </div>
                <div class="form-inline ml-3">
                    <div class="form-group row">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Belanja 2</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="pesanan2">
                            <option selected>Pilih</option>
                            <?php foreach ($produk as $a) : ?>
                                <option value="<?= $a['nama']; ?>"><?= $a['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Jumlah" name="jumlah2">
                    </div>
                </div>
                <div class="form-inline ml-3">
                    <div class="form-group row">
                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Belanja 3</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="pesanan3">
                            <option selected>Pilih</option>
                            <?php foreach ($produk as $a) : ?>
                                <option value="<?= $a['nama']; ?>"><?= $a['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Jumlah" name="jumlah3">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-dark mt-3">Checkout</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>