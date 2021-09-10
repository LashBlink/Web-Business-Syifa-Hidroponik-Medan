<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <?= $this->include('layout/sidebar'); ?>
        <!-- content -->
        <div class="col py-3">
            <div>
                <p class="fs-3">Tambah Post Baru</p>
                <hr>
                <form action="">
                    <div class="row my-1">
                        <div class="col-md-2">
                            <p>Judul Post</p>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control" type="type">
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-2">
                            <p>Gambar Thumbnail</p>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control" type="file">
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-2">
                            <p>Link Video Youtube</p>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-md-2">
                            <p>Isi Artikel Blog</p>
                        </div>
                        <div class="col-md-2">
                            <textarea class="form-control" type="text"></textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="cols">
                            <button type="button" class="btn btn-primary">Tambah</button>
                            <button type="button" class="btn btn-danger">Batal</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>