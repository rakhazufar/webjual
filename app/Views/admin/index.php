<?= $this->extend('layout/adminTamplate'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-3">Pesanan Madoo!</h1>
            <?php if (session()->getFlashdata('hapus')) : ?>
                <div class="alert alert-dark" role="alert">
                    <?= session()->getFlashdata('hapus'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Pesanan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $b = 1 ?>
                    <?php foreach ($pesanan as $a) : ?>
                        <tr>
                            <th scope="row"><?= $b++; ?></th>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td>
                                <ul>
                                    <li><?= $a['pesanan1']; ?> x <?= $a['jumlah1']; ?></li>
                                    <li><?= $a['pesanan2']; ?> x <?= $a['jumlah2']; ?></li>
                                    <li><?= $a['pesanan3']; ?> x <?= $a['jumlah3']; ?></li>
                                </ul>
                            </td>
                            <td>
                                <form action="Admin/<?= $a['id']; ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-dark" onclick="return confirm('Apakah pelanggan sudah mengirim bukti pembayaran?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>