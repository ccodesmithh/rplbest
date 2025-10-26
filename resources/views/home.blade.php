<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    @import url('https://fonts.cdnfonts.com/css/sinosans');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        background-color: #FFF5D7;
    }
    .background-hero {
        margin-top: -2rem;
        background: #006B41;
        background: linear-gradient(300deg, rgba(0, 107, 65, 1) 0%, rgba(1, 60, 37, 1) 100%);
        background-size: cover;
        background-position: center;
        height: 35rem;
        border-radius: 2rem;
        width: 100%;
    }
    nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        top: 0;
        padding-right: 2rem;
        padding-top: 3rem;
        margin-bottom: 0.5rem;
    }
    nav img {
        width: 4rem;
        padding-left: 2rem;
    }
    nav .hamburger {
        border-radius: 2rem;
        border: 1px solid #FFF5D7;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem;
    }
    nav .hamburger i {
        font-size: 0.5rem;
        color: #FFF5D7;
    }
    nav .hamburger h4 {
        font-size: 0.5rem;
        color: #FFF5D7;
    }

    hr {
        width: 80%;
        border: 0.7px solid #FFF5D7;
    }

    h1 {
        font-family: 'Sinosans', sans-serif;
    }

    .hero {
        margin-top: 4rem;
    }

    .primary-button {
        background-color: #FFF5D7;
        color: #014E30;
        border-radius: 0.5rem;
        padding: 0.5rem 1rem;
        border: none;
        cursor: pointer;
        /* font-size: 1rem; */
    }

    .secondary-button {
        color: #FFF5D7;
        border-radius: 0.5rem;
        padding: 0.5rem 1rem;
        border: 1px solid #FFF5D7;
        cursor: pointer;
    }

    .garnish {
        /* position: relative; */
        width: 100px;
        height: 100px;
        /* rotate: 190deg;
        top: -20rem;
        left: -2rem; */
        filter: blur(5px);
    }
    
</style>
<body>
    <div class="background-hero">
        <nav>
            <img src="{{ asset('img/logo.webp') }}" alt="">
            <div class="hamburger">
                <i class='bx  bx-menu'  ></i> 
                <h4>Menu</h4>
            </div>
        </nav>
        <div class="flex justify-center">
            <hr>
        </div>
        <section class="hero">
            <div class="flex justify-center align-items-center">
                <h1 class="text-3xl text-[#FFF5D7] font-bold text-center tracking-widest">MAKNAI HIDUPMU<br>SEBEBAS ALAM</h1>
            </div>
            <div>
                <p class="text-[#FFF5D7] font-light text-center text-[10px] tracking-widest" style="margin-top: 1rem;">Memori dan kenangan tak akan bisa diulang. <br>Maka, nikmati hidupmu selagi bisa.</p>
                <p class="text-[#FFF5D7] font-light text-center text-[10px] tracking-widest" style="margin-top: 1rem;">Ingatan digital XI Rekayasa Perangkat Lunak<br>SMK Negeri 3 Metro</p>
            </div>
            <div class="grid grid-cols-1 gap-3 place-items-center width-15rem" style="margin-top: 2rem;">
                <a href="#" class="primary-button">Gunakan Mesin Waktu →</a>
                <a href="#" class="secondary-button">Kirim Pesan →</a>
            </div>
            <div class="garnish relative width-[100px] height-[100px] rotate-190 -top-80 -left-8">
                <img src="{{ asset('img/leaf.png') }}" alt="">
            </div>
            <div class="garnish relative width-[100px] height-[100px] -top-50 left-70">
                <img src="{{ asset('img/leaf.png') }}" alt="">
            </div>

        </section>
    </div>
</body>
</html>