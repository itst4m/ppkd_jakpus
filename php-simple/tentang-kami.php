<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
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

    /* Konten */
    .content {
        background-color: #ffffff;
        margin: 30px auto;
        padding: 25px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        max-width: 1200px;
        border-radius: 8px;
    }

    .content h2 {
        color: #333;
        font-size: 28px;
        margin-bottom: 15px;
    }

    .content p {
        font-size: 18px;
        line-height: 1.6;
        color: #555;
    }

    .content ul {
        font-size: 18px;
        color: #555;
        padding-left: 20px;
    }

    /* Footer */
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

        .content {
            padding: 20px;
            margin: 20px;
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

    <!-- Judul Halaman -->
    <h1>Tentang Kami</h1>

    <!-- Deskripsi Singkat -->
    <div class="content">
        <p>Website ini dikelola oleh tim yang berkomitmen untuk memberikan pengalaman terbaik bagi pengguna. Kami
            menyediakan berbagai layanan yang dapat membantu Anda mengakses informasi dengan mudah dan cepat. Kami
            percaya bahwa teknologi dapat membuat hidup lebih mudah dan terhubung dengan cara yang lebih bermakna.</p>

        <!-- Visi dan Misi -->
        <h2>Visi Kami</h2>
        <p>Menjadi sumber informasi yang terpercaya dan memberikan nilai tambah kepada pengguna dengan konten yang
            relevan dan berkualitas. Kami berusaha menjadi mitra digital yang Anda percayai untuk mendapatkan solusi
            informasi.</p>

        <h2>Misi Kami</h2>
        <ul>
            <li>Memberikan informasi yang akurat, bermanfaat, dan relevan.</li>
            <li>Meningkatkan pengalaman pengguna di dunia digital melalui inovasi.</li>
            <li>Berinovasi dengan teknologi terbaru untuk memenuhi kebutuhan pengguna dengan cara yang lebih efisien dan
                efektif.</li>
        </ul>
    </div>
    <?php require_once "inc/footer.php" ?>
</body>

</html>