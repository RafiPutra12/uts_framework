<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/profile.css')
</head>
<body>
    <section id="box-profile">
        <div class="img-profile">
            <img class="photo" src="{{ Vite::asset('resources/images/cindol-1.jpg') }}" alt="">
        </div>
        <div class="description">
            <h1 id="pName">Rafi Putra Satria</h1>
            <p id="pRole">ITTS Students</p>
            <a href="{{ url('/') }}" class="button bg-green">Home</a>
        </div>
        <div class="information">
            <div class="data">
                <p class="field">Age</p>
                <p id="pAge" class="text-gray">19</p>
            </div>
            <div class="data">
                    <p class="field">Location</p>
                    <p id="pLocation" class="text-gray">Malang, Indonesia</p>
            </div>
            <div class="data">
                    <p class="field">Major</p>
                    <p id="pMajor" class="text-gray">Information System</p>
            </div>
            <div class="data">
                <p class="field">Class/NIM</p>
                <p id="pOrganization" class="text-gray">SI 04-02 / 1204210147</p>
            </div>
            <div class="data">
                    <p class="field">Email</p>
                    <p id="pEmail" class="text-gray">rafihiha@gmail.com</p>
            </div>
        </div>
    </section>
    @vite('resources/js/app.js')
</body>
</html>
