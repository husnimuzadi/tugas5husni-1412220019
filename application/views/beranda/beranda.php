<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Toko Cat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .jumbotron {
            /* background: url('https://source.unsplash.com/1600x900/?paint,store') no-repeat center center; */
            background-size: cover;
            color: white;
            padding: 5rem 2rem;
        }
        .jumbotron h1 {
            font-size: 3.5rem;
            color: black;
        }
        .jumbotron p {
            font-size: 1.5rem;
            color: black;
        }
        .features-icon {
            font-size: 3rem;
            color: #0d6efd;
        }
    </style>
</head>
<body>
    <div class="jumbotron mb-3 text-center">
        <h1 class="display-3">Selamat Datang di Toko Cat Kami!</h1>
        <p class="lead mb-5">Kami menyediakan berbagai macam cat dan aksesoris dengan kualitas terbaik.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Pelajari Lebih Lanjut</a>
        <a class="btn btn-success btn-lg" href="#" role="button">Mulai Belanja</a>
    </div>

    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-4 mb-4">
                <i class="fas fa-paint-roller features-icon"></i>
                <h3 class="mt-1">Cat Tembok</h3>
                <p>Kami menyediakan berbagai pilihan cat tembok dengan warna-warna cerah dan tahan lama.</p>
            </div>
            <div class="col-lg-4 mb-4">
                <i class="fas fa-brush features-icon"></i>
                <h3 class="mt-1">Cat Kayu & Besi</h3>
                <p>Berikan perlindungan ekstra untuk kayu dan besi dengan produk cat berkualitas dari kami.</p>
            </div>
            <div class="col-lg-4 mb-4">
                <i class="fas fa-spray-can features-icon"></i>
                <h3 class="mt-1">Cat Semprot</h3>
                <p>Cat semprot kami mudah digunakan dan memberikan hasil akhir yang sempurna.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center mb-4">Produk Terlaris</h2>
        <div class="row text-center">
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img src="<?php echo base_url('assets/img/cat_biru.jpg'); ?>" class="card-img-top" alt="Cat Tembok Biru 5L">
                    <div class="card-body">
                        <h5 class="card-title">Cat Tembok Biru 5L</h5>
                        <p class="card-text">Rp 105,000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img src="<?php echo base_url('assets/img/cat_clear.png'); ?>" class="card-img-top" alt="Cat Kayu Clear 1L">
                    <div class="card-body">
                        <h5 class="card-title">Cat Kayu Clear 1L</h5>
                        <p class="card-text">Rp 45,000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img src="<?php echo base_url('assets/img/cat_coklat.jpg'); ?>" class="card-img-top" alt="Cat Kayu Coklat 1L">
                    <div class="card-body">
                        <h5 class="card-title">Cat Kayu Coklat 1L</h5>
                        <p class="card-text">Rp 47,000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card">
                    <img src="<?php echo base_url('assets/img/cat_kuning.jpg'); ?>" class="card-img-top" alt="Cat Kayu Kuning 1L">
                    <div class="card-body">
                        <h5 class="card-title">Cat Kayu Kuning 1L</h5>
                        <p class="card-text">Rp 47,000</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
