<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('chatify.name') }} - Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;

        }

        nav {
            background-color: #0074cc;
            position: fixed;
            top: 0;
            width: 100%;
            padding: 10px;
            color: white;
        }

        .hero-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1400px;
            margin: 80px auto 0;
            padding: 20px;
        }

        .hero-image {
            width: 50%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 5px;
            margin-left: 10px;
        }

        .hero-text {
            width: 40%;
            margin-right: 30px;
            font-weight: bold;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        section {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto 40px;
            /* Memberikan margin atas, bawah, dan jarak dari navbar */
            max-width: 800px;
        }

        .article {
            max-width: 1000px;
            /* Sesuaikan lebar maksimum sesuai kebutuhan */
            margin: 0 auto;
            /* Menengahkan kotak artikel di tengah */
            padding: 20px;
            /* Menambahkan ruang di sekitar kotak artikel */
            box-sizing: border-box;
            /* Memastikan padding dihitung dalam lebar kotak */
            margin-top: 80px;
        }

        footer {
            background-color: #0074cc;
            /* Warna biru tua */
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .container2 {
            max-width: 1200px;
            margin-top: 100px;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu {
            display: flex;
            gap: 20px;
            align-items: center;
            /* Menengahkan elemen di dalam .menu */
        }

        .menu a,
        .menu button {
            text-decoration: none;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar-brand a {
            font-size: 24px;
            /* Ukuran teks lebih besar */
            font-weight: bold;
            /* Teks menjadi bold */
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .navbar-brand a:hover {
            color: #0074cc;
            /* Warna biru tua pada hover */
        }

        .menu a,
        .menu button {
            padding: 8px 15px;
            /* Menyesuaikan ukuran tombol */
            vertical-align: top;
            /* Menjadikan tulisan sejajar */
            cursor: pointer;
        }

        .menu a:hover,
        .menu button:hover {
            background-color: #004477;
            /* Warna biru lebih gelap pada hover */
        }

        .navbar-brand {
            margin: 0;
            /* Hilangkan margin default untuk navbar-brand */
        }

        .menu-button {
            background-color: #4caf50;
            /* Warna hijau */
            color: white;
            border: none;
            cursor: pointer;
        }

        .menu-button:hover {
            background-color: #45a049;
            /* Warna hijau lebih gelap pada hover */
        }


        /* Gaya untuk kotak pencarian */
        form {
            display: flex;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        input[type="text"] {
            flex: 1;
            padding: 8px;
            border: none;
            border-radius: 5px 0 0 5px;
        }

        button[type="submit"] {
            background-color: #4caf50;
            /* Warna hijau */
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
            /* Warna hijau lebih gelap pada hover */
        }

        /* Gaya untuk tombol chat */
        .chat-button {
            position: fixed;
            bottom: 60px;
            right: 20px;
        }

        .chat-button button {
            background-color: #0074cc;
            /* Warna biru tua */
            color: white;
            border: none;
            padding: 15px 20px;
            /* Sesuaikan padding untuk tinggi dan lebar */
            border-radius: 15px;
            /* Sesuaikan nilai radius untuk membuat sudut melengkung */
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .chat-button button img {
            width: 30px;
            /* Sesuaikan ukuran gambar */
            height: auto;
            margin-right: 5px;
            /* Jarak antara gambar dan teks jika ada */
        }

        /* Gaya untuk Menu Genre Kesehatan */
        .health-genres {
            margin-top: 10px;
            padding-top: 10px;
            /* Memberikan jarak antara garis dan tulisan */
            padding-bottom: 10px;
            /* Memberikan jarak antara garis dan tulisan */
            border-top: 1px solid #ddd;
            /* Garis di atas menu genre */
            border-bottom: 1px solid #ddd;
            /* Garis di bawah menu genre */
        }

        .health-genres a {
            text-decoration: none;
            color: #333;
            padding: 5px;
            margin-right: 10px;
            border-bottom: 2px solid transparent;
            transition: border-bottom 0.3s;
        }

        .health-genres a:hover {
            border-bottom: 2px solid #0074cc;
        }

        .health-genres a.active {
            border-bottom: 2px solid #0074cc;
            font-weight: bold;
        }

        /* Gaya untuk Artikel Kesehatan */
        .health-article {
            display: flex;
            margin-top: 20px;
            margin-left: 90px;
            margin-right: 90px;
        }

        .article-image {
            flex: 1;
            margin-right: 20px;
        }

        .article-image img {
            max-width: 100%;
            border-radius: 5px;
        }

        .article-content {
            flex: 2;
        }

        .article-content h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .article-content p {
            margin-bottom: 15px;
        }

        .article-content a {
            color: #0074cc;
            text-decoration: none;
            font-weight: bold;
        }

        /* Gaya untuk Tombol Selanjutnya */
        .next-button {
            text-align: center;
            margin-top: 20px;
        }

        .next-button button {
            background-color: #4caf50;
            /* Warna hijau */
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 15px;
            cursor: pointer;
        }

        .next-button button:hover {
            background-color: #45a049;
            /* Warna hijau lebih gelap pada hover */
        }

        .about {
            max-width: 1200px;
            margin-top: 100px;
            margin-left: 50px;
            margin-right: 50px;
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <div class="container flex justify-space-between">
                <div class="navbar-brand">
                    <a>Dokuteru.id</a>
                </div>
                <div>
                    <form action="#" method="get">
                        <input type="text" placeholder="Cari di dokuteru..." name="search">
                        <button type="submit">Cari</button>
                    </form>
                </div>
                <div class="menu">
                    <div>
                        <a class="text-white" onclick="scrollToTargetAdjusted('tentang')">Tentang</a>
                    </div>
                    <div>
                        <a class="text-white" onclick="scrollToTargetAdjusted('artikel')">Info Kesehatan</a>
                    </div>
                        <div>
                        <a href="{{ url('/profile') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Profil</a>
                        </div>
                    <div>
                        <button class="menu-button" onclick="">Download Aplikasi</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="container2">
        <div class="hero-container">
            <img src="{{ asset('img/Hero-Image.webp') }}" alt="Hero Image" class="hero-image">
            <div class="hero-text">
                <h1>Pelayanan Kesehatan Cepat dan Tepat</h1>
                <p>Informasi kesehatan dan chat dokter profesional</p>
            </div>
        </div>

        <section class="article">
            <h2>Informasi Kesehatan untuk Anda</h2>

            <!-- Menu Genre Kesehatan -->
            <div class="health-genres">
                <a href="#" class="active">Umum</a>
                <a href="#">Nutrisi</a>
                <a href="#">Fitness</a>
                <a href="#">Kesehatan Mulut</a>
                <a href="#">Jantung</a>
                <a href="#">Diabetes</a>
                <a href="#">Bayi</a>
                <a href="#">Kolesterol</a>
                <a href="#">Kehamilan</a>
                <a href="#">Diet</a>
                <a href="#">Kelamin</a>
                <!-- Tambahkan genre lainnya sesuai kebutuhan -->
            </div>

            <!-- Artikel dengan Gambar dan Teks -->
            <article class="health-article" id="artikel">
                <div class="article-image">
                    <img src="{{ asset('img/Article-Image1.webp') }}" alt="Artikel Gambar 1">
                </div>
                <div class="article-content">
                    <h3>Judul Artikel Pertama</h3>
                    <p>Deskripsi singkat tentang artikel pertama. Anda bisa menambahkan konten artikel di sini.</p>
                    <a href="#">Baca Selengkapnya</a>
                </div>
            </article>

            <article class="health-article">
                <div class="article-image">
                    <img src="{{ asset('img/Article-Image2.jpg') }}" alt="Artikel Gambar 2">
                </div>
                <div class="article-content">
                    <h3>Judul Artikel Kedua</h3>
                    <p>Deskripsi singkat tentang artikel kedua. Anda bisa menambahkan konten artikel di sini.</p>
                    <a href="#">Baca Selengkapnya</a>
                </div>
            </article>

            <article class="health-article">
                <div class="article-image">
                    <img src="{{ asset('img/Article-Image3.webp') }}" alt="Artikel Gambar 3">
                </div>
                <div class="article-content">
                    <h3>Judul Artikel Ketiga</h3>
                    <p>Deskripsi singkat tentang artikel ketiga. Anda bisa menambahkan konten artikel di sini.</p>
                    <a href="#">Baca Selengkapnya</a>
                </div>
            </article>

            <article class="health-article">
                <div class="article-image">
                    <img src="{{ asset('img/Article-Image4.jpg') }}" alt="Artikel Gambar 4">
                </div>
                <div class="article-content">
                    <h3>Judul Artikel Keempat</h3>
                    <p>Deskripsi singkat tentang artikel keempat. Anda bisa menambahkan konten artikel di sini.</p>
                    <a href="#">Baca Selengkapnya</a>
                </div>
            </article>

            <article class="health-article">
                <div class="article-image">
                    <img src="{{ asset('img/Article-Image5.jpg') }}" alt="Artikel Gambar 5">
                </div>
                <div class="article-content">
                    <h3>Judul Artikel Kelima</h3>
                    <p>Deskripsi singkat tentang artikel kelima. Anda bisa menambahkan konten artikel di sini.</p>
                    <a href="#">Baca Selengkapnya</a>
                </div>
            </article>

            <div class="next-button">
                <button class="menu-button" onclick="loadNextArticle()">Selanjutnya >></button>
            </div>

        </section>

        <section class="about" id="tentang">
            <div class="container pa-m">
                <div class="flex">
                    <div class="flex-column pa-m">
                        <h2>Tentang Kami</h2>
                        <p>Sebuah website yang menyediakan pelayanan kesehatan online secara cepat dan mudah. Membuka
                            konsultasi
                            <br>alternatif jarak jauh yang mempermudah pengguna bertanya dengan dokter profesional
                            dengan efisien
                        </p>
                    </div>
                    <div class="flex flex-column justify-center pa-m">
                        <div>
                            <div class="flex mt-l">
                                <div class="mr-xs">
                                    <a href="" target="_blank"><img src="{{ asset('icon/facebook.png') }}"></a>
                                </div>
                                <div class="mx-xs">
                                    <a href="" target="_blank"><img src="{{ asset('icon/instagram.png') }}"></a>
                                </div>
                                <div class="mx-xs">
                                    <a href=""><img src="{{ asset('icon/linkedin.png') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-m">
                    <p>Copyright ©2023 All Right Reserved</p>
                </div>
            </div>
        </section>
    </section>

    <div class="chat-button">
        <button>
            <a href="{{ url('/chatform') }}" style="text-decoration: none;">
                <img src="{{ asset('icon/Chat.png') }}" alt="Chat Icon" style="vertical-align: middle"> CHAT DOKTER!
            </a>
        </button>
    </div>

    <footer class="container-fluid">
        &copy; 2023 Dokuteru.id
    </footer>

    <script>

        function scrollToTargetAdjusted(id) {
            var element = document.getElementById(id);
            var headerOffset = 100;
            var elementPosition = element.getBoundingClientRect().top;
            var offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        }
    </script>

</body>

</html>