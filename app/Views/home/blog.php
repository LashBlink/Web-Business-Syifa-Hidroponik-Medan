<?= $this->extend('layout/hometemplate'); ?>

<?= $this->section('content'); ?>

<section>
    <div class="container">
        <div class="title py-1">
            Produk Syifa Hidroponik
        </div>

        <?php
        for ($x = 0; $x <= 10; $x++) {
        ?>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/assets/img/jpg1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8 bg-light ">
                        <div class="card-body">
                            <span>
                                <h1>title blog</h1>
                                <hr class=" bg-light">
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <br>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        <?php }
        ?>


    </div>
</section>

<?= $this->endsection(); ?>