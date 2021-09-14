<?= $this->extend('layout/hometemplate'); ?>

<?= $this->section('content'); ?>

<!-- Banner -->
<section id="banner">
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <h1>Syifa Hidroponik Medan</h1>
                    <hr>
                    <p>
                        Sebuah tempat yang menyediakan perlengkapan dan
                        segala macam kebutuhan untuk berkebun dengan sistem hidroponik.
                    </p>
                    <a href="/home/about">
                        <button type="button" class="btn">
                            Lihat Selengkapnya
                        </button>
                    </a>
                </div>
                <div class="col">
                    <img src="/assets/img/banner.png" class="img-fluid" alt="">
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- produk& layanan -->
<section class="features-icons bg-light text-center">
    <div class="container py-5">
        <div>
            <h1>Produk dan Layanan</h1>
            <br>
            <p>Produk & Layanan Kami meliputi beberapa kegiatan usaha diantaranya</p>
            <br>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><img src="/assets/img/alat.png" width="400" height="500" class="card-img-top" alt="..."></i></div>
                    <br>
                    <h2>Peralatan Hidroponik</h2>
                    <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><img src="/assets/img/produk.png" width="400" height="500" class="card-img-top" alt="..."></i></div>
                    <br>
                    <h2>Produk Olahan</h2>
                    <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><img src="/assets/img/logo.png" width="400" height="500" class="card-img-top" alt="..."></i></div>
                    <br>
                    <h2>Pemasaran</h2>
                    <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- hidroponik? -->
<section>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-3">
                <img src="/assets/img/hidroponik.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-9 bg-dark ">
                <div class="card-body" style="color: azure;">
                    <span style=" vertical-align: middle;">
                        <h1>Apa itu Hidroponik?</h1>
                        <hr class=" bg-light">
                        <p class="card-text" style="font-size: 32px;">Hidroponik adalah metode menanam tanaman
                            tanpa menggunakan tanah. Akar tanaman akan menyerap
                            unsur hara yang diperlukan untuk pertumbuhan melalui
                            larutan nutrisi yang disebut dengan AB mix.</p>
                        <br>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- youtube-chanel -->
<section class="py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/pMk24G6b540" style="max-width: 100%;" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <span style=" vertical-align: middle;">
                    <h1>Free video Tutorial</h1>
                    <hr class=" bg-light">
                    <p class="card-text" style="font-size: 32px;">Ikuti kami di Youtube untuk melihat perkembangan kami
                        dan dapatkan video tutorial gratis cara memanan hidroponik.</p>
                    <a href="https://www.youtube.com/channel/UCEG3XFG90tmD-796e8RWpPw?sub_confirmation=1" target="_blank">
                        <img class="subscribe" src="https://freesvg.org/img/Subscribe.png">
                    </a>

                </span>
            </div>
        </div>
    </div>
</section>

<!-- Review Client -->
<section id="banner">
    <div class="banner">
        <div class="container">
            <center>
                <h1>Ulasan Client</h1>
                <h2 class="text-white">Beberapa ulasan dari Client Kami</h2>
                <hr>
            </center>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/assets/img/image3.png" alt="Card image cap">
            </div>

        </div>
    </div>
</section>


<section class="features-icons bg-light py-5">
    <div class="container">
        <div>
            <h1>Lastest Blog Post</h1>
        </div>
        <br>

        <?php
        foreach ($post as $p) :
        ?>
            <a href="/home/detailblog/<?= $p['judul']; ?>" style=" text-decoration:none; color : black;">
                <div class="card mb-3">
                    <div class="row g-0 h-1">
                        <div class="col-md-4">
                            <img src="/assets/uploadimg/<?= $p['gambar'] ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8 bg-light ">
                            <div class="card-body">
                                <span>
                                    <h1><?= $p['judul']; ?></h1>
                                    <hr class=" bg-light">
                                    <p class="card-text"><?= $p['deskripsi']; ?></p>
                                    <br>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach
        ?>
        <div class="fs-8 fw-bold text-center">
            <a href="/home/blog" style="color: green;">
                Berita lainnya...
            </a>
        </div>
    </div>
</section>

<section>
    <div style="padding-bottom: 5em;"></div>
</section>
<?= $this->endsection(); ?>