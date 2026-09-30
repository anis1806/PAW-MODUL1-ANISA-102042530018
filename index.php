<?php

// Data produk
$produk = [
    [
        "nama" => "Tas Shoulder Bag Premium",
        "kategori" => "Shoulder Bag",
        "harga" => 1250000,
        "stok" => 5
    ],
    [
        "nama" => "Tas Tote Bag Classic",
        "kategori" => "Tote Bag",
        "harga" => 850000,
        "stok" => 7
    ],
    [
        "nama" => "Tas Handbag Elegant",
        "kategori" => "Handbag",
        "harga" => 1500000,
        "stok" => 3
    ],
    [
        "nama" => "Tas Mini Sling Bag",
        "kategori" => "Sling Bag",
        "harga" => 450000,
        "stok" => 10
    ],
    [
        "nama" => "Tas Backpack Casual",
        "kategori" => "Backpack",
        "harga" => 750000,
        "stok" => 0
    ],
    [
        "nama" => "Tas Luxury Chain Bag",
        "kategori" => "Chain Bag",
        "harga" => 2000000,
        "stok" => 2
    ]
];

// Menghitung jumlah produk
$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store</title>

    <style>

        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff5f8;
            color: #444;
        }

        /* Navbar */
        header {
            background-color: #e889a8;
            color: white;
            padding: 20px 50px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Hero */
        .hero {
            text-align: center;
            padding: 70px 20px;
            background-color: #ffe4ec;
        }

        .hero h1 {
            font-size: 42px;
            color: #d85b82;
            margin-bottom: 12px;
        }

        .hero p {
            font-size: 18px;
            color: #666;
        }

        /* Informasi produk */
        .info {
            text-align: center;
            margin: 30px auto;
            padding: 20px;
            max-width: 800px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(216, 91, 130, 0.12);
        }

        .info strong {
            color: #d85b82;
        }

        /* Container produk */
        .produk-container {
            max-width: 1100px;
            margin: 30px auto 60px;
            padding: 0 20px;

            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        /* Card produk */
        .produk-card {
            background-color: white;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 5px 15px rgba(216, 91, 130, 0.12);
            transition: 0.3s;
        }

        .produk-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(216, 91, 130, 0.18);
        }

        .produk-card h2 {
            color: #d85b82;
            font-size: 21px;
            margin-bottom: 10px;
        }

        .kategori {
            color: #999;
            font-size: 14px;
            margin-bottom: 15px;
        }

        /* Harga */
        .harga {
            font-size: 22px;
            font-weight: bold;
            color: #e06b91;
            margin: 15px 0;
        }

        .harga-normal {
            color: #888;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .diskon {
            display: inline-block;
            background-color: #ffe0e9;
            color: #d85b82;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            margin-top: 5px;
        }

        /* Stok */
        .stok {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .available {
            color: #65a878;
        }

        .empty {
            color: #d9534f;
        }

        /* Tombol */
        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            text-align: center;
            background-color: #e889a8;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #d86f91;
        }

        /* Tombol stok habis */
        .btn-disabled {
            display: block;
            width: 100%;
            padding: 12px;
            text-align: center;
            background-color: #ddd;
            color: #888;
            border-radius: 10px;
        }

        /* Footer */
        footer {
            background-color: #d86f91;
            color: white;
            text-align: center;
            padding: 22px;
        }

        /* Responsive */
        @media (max-width: 900px) {

            .produk-container {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 600px) {

            header {
                padding: 20px;
            }

            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                gap: 15px;
            }

            .produk-container {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 32px;
            }

        }

    </style>

</head>

<body>

    <!-- Navbar -->
    <header>

        <nav>

            <div class="logo">
                Cia Store
            </div>

            <ul>

                <li>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Produk</a>
                </li>

                <li>
                    <a href="#">Kontak</a>
                </li>

            </ul>

        </nav>

    </header>


    <!-- Hero -->
    <section class="hero">

        <h1>
            Cia Store
        </h1>

        <p>
            Temukan tas cantik dan stylish untuk melengkapi penampilanmu.
        </p>

    </section>


    <!-- Informasi jumlah produk -->
    <div class="info">

        <p>
            Saat ini tersedia
            <strong>
                <?= $jumlahProduk ?> jenis tas
            </strong>
            di Cia Store.
        </p>

    </div>


    <!-- Daftar produk -->
    <section class="produk-container">

        <?php foreach ($produk as $item): ?>

            <?php

            // Mengecek stok
            if ($item["stok"] > 0) {

                $status = "Tersedia";

                $statusClass = "available";

            } else {

                $status = "Stok Habis";

                $statusClass = "empty";

            }


            // Mengecek diskon
            if ($item["harga"] >= 1000000) {

                $diskon = 10;

                $hargaDiskon =
                    $item["harga"] * $diskon / 100;

                $hargaAkhir =
                    $item["harga"] - $hargaDiskon;

            } else {

                $diskon = 0;

                $hargaAkhir =
                    $item["harga"];

            }

            ?>

            <!-- Card produk -->
            <div class="produk-card">

                <h2>
                    <?= $item["nama"] ?>
                </h2>

                <p class="kategori">
                    <?= $item["kategori"] ?>
                </p>


                <?php if ($diskon > 0): ?>

                    <!-- Harga sebelum diskon -->
                    <p class="harga-normal">

                        Harga Normal:

                        <del>
                            Rp
                            <?= number_format(
                                $item["harga"],
                                0,
                                ',',
                                '.'
                            ) ?>
                        </del>

                    </p>

                    <!-- Diskon -->
                    <span class="diskon">
                        Diskon <?= $diskon ?>%
                    </span>

                    <!-- Harga setelah diskon -->
                    <p class="harga">

                        Rp
                        <?= number_format(
                            $hargaAkhir,
                            0,
                            ',',
                            '.'
                        ) ?>

                    </p>

                <?php else: ?>

                    <!-- Harga normal -->
                    <p class="harga">

                        Rp
                        <?= number_format(
                            $item["harga"],
                            0,
                            ',',
                            '.'
                        ) ?>

                    </p>

                <?php endif; ?>


                <!-- Status stok -->
                <p class="stok <?= $statusClass ?>">

                    <?= $status ?>

                    <?php if ($item["stok"] > 0): ?>

                        (<?= $item["stok"] ?> stok)

                    <?php endif; ?>

                </p>


                <!-- Tombol pembelian -->
                <?php if ($item["stok"] > 0): ?>

                    <a href="#" class="btn">
                        Beli Sekarang
                    </a>

                <?php else: ?>

                    <div class="btn-disabled">
                        Tidak Tersedia
                    </div>

                <?php endif; ?>

            </div>

        <?php endforeach; ?>

    </section>


    <!-- Footer -->
    <footer>

        <p>
            &copy; 2026 Cia Store. All Rights Reserved.
        </p>

    </footer>

</body>

</html>