<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <?= $this->include('layout/sidebar'); ?>
        <!-- content -->
        <div class="col py-3">
            <div>
                <h1 class="text-capitalize fs-2">Data Produk</h1>
                <a href="/admin/tambahproduk">
                    <button type="button" class="btn btn-primary">Tambah Produk</button>
                </a>
            </div>
            <hr>
            <div>
                <div class="row row-cols-1 row-cols-md-5 g-4 py-4">
                    <?php
                    for ($x = 0; $x <= 10; $x++) {
                    ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="/assets/img/jpg1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="cols">
                                        <button type="button" class="btn btn-primary">edit</button>
                                        <button type="button" class="btn btn-danger">hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>