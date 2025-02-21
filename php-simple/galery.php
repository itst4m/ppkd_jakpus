<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
    }

    /* Navbar */
    nav {
        background-color: #005f73;
        padding: 15px 0;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        transition: background-color 0.3s;
    }

    nav ul li {
        margin: 0 20px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        padding: 10px 20px;
        display: block;
        transition: background-color 0.3s;
    }

    nav ul li a:hover {
        background-color: #94d2bd;
        border-radius: 5px;
    }

    /* Header */
    h1 {
        text-align: center;
        margin-top: 50px;
        color: #333;
        font-size: 36px;
    }

    small {
        display: block;
        text-align: center;
        color: #777;
        font-size: 16px;
    }

    /* Gallery Section */
    .gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 30px;
    }

    /* Container for images and overlays */
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .gallery img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-item .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .overlay {
        opacity: 1;
    }

    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 15px 0;
        bottom: 0;
        width: 100%;
        position: fixed;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        nav ul {
            flex-direction: column;
        }

        nav ul li {
            margin: 10px 0;
        }

        .gallery {
            grid-template-columns: 1fr 1fr;
        }

        h1 {
            font-size: 30px;
        }
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php require "../php-simple/inc/navbar.php"; ?>

    <!-- Title Section -->
    <h1>Galeri Kami</h1>
    <small>Menikmati Koleksi Gambar Kami</small>

    <hr />

    <!-- Gallery Section -->
    <div class="gallery">
        <div class="gallery-item">
            <img src="../php-simple/img/image1.jpg" alt="Gambar 1">
            <div class="overlay">by. itst4m</div>
        </div>
        <div class="gallery-item">
            <img src="../php-simple/img/image1.jpg" alt="Gambar 2">
            <div class="overlay">by. itst4m</div>
        </div>
        <div class="gallery-item">
            <img src="../php-simple/img/image1.jpg" alt="Gambar 3">
            <div class="overlay">by. itst4m</div>
        </div>
        <div class="gallery-item">
            <img src="../php-simple/img/image1.jpg" alt="Gambar 4">
            <div class="overlay">by. itst4m</div>
        </div>
        <div class="gallery-item">
            <img src="../php-simple/img/image1.jpg" alt="Gambar 5">
            <div class="overlay">by. itst4m</div>
        </div>
        <div class="gallery-item">
            <img src="../php-simple/img/image1.jpg" alt="Gambar 6">
            <div class="overlay">by. itst4m</div>
        </div>
    </div>

    <?php require_once "inc/footer.php" ?>
</body>

</html>