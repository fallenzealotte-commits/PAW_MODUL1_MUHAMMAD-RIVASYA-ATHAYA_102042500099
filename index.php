<?php

$produk = [

    [
        "nama" => "Monitor",
        "kategori" => "Elektronik",
        "harga" => 45000,
        "stok" => 15
    ],

    [
        "nama" => "Keyboard",
        "kategori" => "Elektronik",
        "harga" => 450000,
        "stok" => 8
    ],

    [
        "nama" => "Headset",
        "kategori" => "Elektronik",
        "harga" => 275000,
        "stok" => 5
    ],

    [
        "nama" => "Webcam",
        "kategori" => "Elektronik",
        "harga" => 350000,
        "stok" => 0
    ],

    [
        "nama" => "Speaker",
        "kategori" => "Elektronik",
        "harga" => 125000,
        "stok" => 10
    ],

    [
        "nama" => "Power Bank",
        "kategori" => "Elektronik",
        "harga" => 180000,
        "stok" => 0
    ]

];

$jumlahproduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CiaStore</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="navbar">

    <div class="logo">CiaStore</div>

    <nav>
        <a href="#home">Home</a>
        <a href="#produk">Produk</a>
        <a href="#tentang">Tentang</a>
    </nav>

</header>


<section class="temukan" id="home">

    <div class="temukan-content">

        <p class="temukan-label">CiaStore</p>

        <h1>
            Temukan perangkat
            elektronik pilihanmu
        </h1>

        <p>
            Temukan berbagai barang elektronik
            berkualitas dengan harga yang terjangkau!!!
        </p>

    </div>

</section>


<section class="info" id="produk">

    <h2>Produk Kami</h2>

    <p>
        Tersedia <?php echo $jumlahproduk; ?> produk elektronik.
    </p>


    <div class="produk-container">

        <?php foreach ($produk as $item) : ?>

            <a href="#detail-<?php echo $item["nama"]; ?>" class="produk-link">

                <div class="produk-card">

                    <h3>
                        <?php echo $item["nama"]; ?>
                    </h3>

                    <p>
                        Kategori: <?php echo $item["kategori"]; ?>
                    </p>

                    <p class="harga">
                        Rp <?php echo number_format($item["harga"], 0, ',', '.'); ?>
                    </p>

                    <p class="stok">
                        Stok: <?php echo $item["stok"]; ?>
                    </p>

                </div>

            </a>

        <?php endforeach; ?>

    </div>

</section>


<section class="info" id="tentang">

    <h2>Tentang CiaStore</h2>

    <p>
        CiaStore menyediakan berbagai macam
        perangkat elektronik untuk kebutuhan sehari-hari.
    </p>

</section>

</body>
</html>