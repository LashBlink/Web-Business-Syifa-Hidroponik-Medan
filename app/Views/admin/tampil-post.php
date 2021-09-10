<?= $this->extend('layout/admintemplate'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <?= $this->include('layout/sidebar'); ?>
        <!-- content -->
        <div class="col py-3">
            <div>
                <h1 class="text-capitalize fs-2">Data Post</h1>
                <p></p>
                <a href="/admin/tambahpost">
                    <button type="button" class="btn btn-primary">Tambah Postingan Baru</button>
                </a>
            </div>

            <hr style="width: 100%">
            <div>
                <div class="container">
                    <br>

                    <div class="card mb-2">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="/assets/img/jpg1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>

                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">Post title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" onclick="return confirm('Apakah Anda Yakin ?')"
                                        class="btn btn-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endsection(); ?>