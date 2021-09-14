<?= $this->extend('layout/hometemplate'); ?>

<?= $this->section('content'); ?>

<section>
    <div class="container">
        <div class="title py-1">
            Produk Syifa Hidroponik
        </div>
        <div class="row row-cols-1 row-cols-md-5 g-4 py-4">
            <?php
            foreach ($produk as $p) :
            ?>
                <a href="/home/detailproduk/<?= $p['namaproduk'] ?>" style=" text-decoration:none; color: black;">
                    <div class="col">
                        <div class="card h-100">
                            <img src="/assets/uploadimg/<?= $p['gambarproduk']; ?>" class="card-img-top" style="height: 15em; width: auto;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $p['namaproduk']; ?></h5>
                                <p class="card-text col-6 fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
                                        <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>
                                    <?= $p['katagori']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach
            ?>

        </div>
    </div>
</section>

<?= $this->endsection(); ?>