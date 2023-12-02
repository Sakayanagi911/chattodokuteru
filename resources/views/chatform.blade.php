<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('chatify.name') }} - Chat form</title>
    <!-- Sertakan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        section {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto 40px; /* Memberikan margin atas, bawah, dan jarak dari navbar */
            max-width: 600px; /* Mengurangi lebar maksimum formulir */
            text-align: center; /* Tengahkan form */
        }

        footer {
            background-color: #0074cc;
            color: white;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 14px;
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
            align-items: center; /* Menengahkan elemen di dalam .menu */
        }

        .menu a, .menu button {
            text-decoration: none;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar-brand a {
            font-size: 24px; /* Ukuran teks lebih besar */
            font-weight: bold; /* Teks menjadi bold */
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .navbar-brand a:hover {
            color: #0074cc; /* Warna biru tua pada hover */
        }

        .menu a, .menu button {
            padding: 8px 15px; /* Menyesuaikan ukuran tombol */
            vertical-align: top; /* Menjadikan tulisan sejajar */
            cursor: pointer;
        }

        .menu a:hover, .menu button:hover {
            background-color: #004477; /* Warna biru lebih gelap pada hover */
        }

        .navbar-brand {
            margin: 0; /* Hilangkan margin default untuk navbar-brand */
        }

        .menu-button {
            background-color: #4caf50; /* Warna hijau */
            color: white;
            border: none;
            cursor: pointer;
        }

        .menu-button:hover {
            background-color: #45a049; /* Warna hijau lebih gelap pada hover */
        }

        .form-container {
            max-width: 400px; /* Lebar maksimum formulir */
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left; /* Sesuaikan form ke kiri */
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            background-color: #0074cc;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
        }

        button:hover {
            background-color: #005999;
        }

        h2 {
            color: #0074cc;
            text-align: center;
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
                <div class="menu">
                    <div>
                        <a class="text-white" href="{{ url('/dashboard') }}">Dashboard</a>
                    </div>
                    <div>
                        <button class="menu-button" onclick="">Download Aplikasi</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="container2">
        <div class="form-container">
            <h2>Formulir Chat</h2>
            <form>
                <div class="form-group">
                    <label for="firstName">Nama Depan</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Nama Belakang</label>
                    <input type="text" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <div class="flex">
                        <select id="countryCode" name="countryCode" required>
                            <option value="+62">+62</option>
                            <!-- Tambahkan pilihan negara lainnya jika diperlukan -->
                        </select>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age">Umur</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="dob">Tanggal Lahir</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <footer class="container-fluid">
        &copy; 2023 Dokuteru.id
    </footer>

</body>
</html>