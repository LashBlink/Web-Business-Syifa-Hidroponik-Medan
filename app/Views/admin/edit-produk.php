<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <?= $this->include('layout/sidebar'); ?>
        <!-- content -->
        <div class="col py-3">
            <div>
                <p class="fs-3">Edit Produk</p>
                <hr>
                <form action="/admin/updateproduk/<?= $produk['kodeproduk']; ?>" method="POST" enctype="multipart/form-data">
                    <?php csrf_field() ?>

                    <div class="row my-1">
                        <div class="col-md-2">
                            <p>Nama Produk</p>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="input" name="namaproduk" value="<?= $produk['namaproduk']; ?>" required>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-2">
                            <p>Gambar Produk</p>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="file" accept="image/png, image/jpeg" name="gambarproduk">
                            <input class="form-control" type="hidden" name="gambarproduklama" value="<?= $produk['gambarproduk']; ?>">
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-2">
                            <p>Katagori Produk</p>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" aria-label="Default select example" name="katagori" required>

                                <?php foreach ($katagori as $p) : ?>
                                    <?php if ($p['kodekatagori'] == $produk['kodekatagori']) {
                                    ?>
                                        <option value="<?= $p['kodekatagori']; ?>" selected><?= $p['katagori']; ?></option>
                                    <?php
                                    } ?>
                                    <option value="<?= $p['kodekatagori']; ?>"><?= $p['katagori']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-2">
                            <p>Deskripsi Produk</p>
                        </div>
                        <div class="col-md-4">
                            <textarea class="form-control" type="text" name="deskripsi"><?= $produk['deskripsiproduk']; ?></textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="cols">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-danger" onClick="javascript:window.location.href='/admin/tampilproduk'">Batal</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>