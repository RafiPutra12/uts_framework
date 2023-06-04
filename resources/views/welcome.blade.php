<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>UTS</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/style.css')
</head>
<body>
    <div class="hero">
        <div class="overlay">
            <div class="container">
                <div class="header">
                    <div class="logo">
                        <h1><a href="">UTS</a></h1>
                    </div>
                    <div class="menu">
                        <a href="{{ route('profile_page') }}">Profile</a>
                        <a href="{{ route('barang.index') }}">Data Barang</a>
                        <a href="">Github</a>
                    </div>
                </div>
                <div class="hero-center">
                    <h2>UTS Pemrograman Framework</h2><br>
                    <p>
                        Oleh Rafi Putra Satria
                    </p>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
