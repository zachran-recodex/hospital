<!DOCTYPE html>
<html lang="en">

<head>

    @yield('meta_tag')

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <script src="https://kit.fontawesome.com/ddb90eabf1.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#FAFAFA]">

    <header class="py-[35px] fixed w-full z-50 top-0 left-0 shadow-lg bg-white">
        <nav class="container-main h-[42px] flex justify-between items-center">
            <a href="">
                <h1 class="text-picton-blue-500 text-2xl font-bold">RUMAH <span
                        class="text-chateau-green-500">SAKIT</span>
                </h1>
            </a>
            <div class="flex justify-center items-center gap-[25px]">
                <a href="">
                    Beranda
                </a>
                <a href="">
                    Jadwal Dokter
                </a>
                <a href="">
                    Medical Check Up
                </a>
                <a href="">
                    Fasilitas & Layanan
                </a>
                <a href="">
                    Hubungi Kami
                </a>
                <a href="">
                    Komunitas
                </a>
            </div>
            <a href=""
                class="bg-gradient-to-r from-picton-blue-500 to-chateau-green-500 w-[126px] h-[38px] flex justify-center items-center rounded-lg text-white">
                Konsultasi
            </a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="pt-main pb-8 border-t">
        <div class="container-main">
            <a href="">
                <h1 class="text-picton-blue-500 text-2xl font-bold">RUMAH <span
                        class="text-chateau-green-500">SAKIT</span>
                </h1>
            </a>
            <div class="flex justify-between items-start py-[100px]">
                <div class="space-y-4">
                    <h5 class="text-2xl font-bold text-chateau-green-500">Tautan Cepat</h5>
                    <ul class="space-y-4">
                        <li>Beranda</li>
                        <li>Tentang Kami</li>
                        <li>Layanan</li>
                        <li>Dokter Kami</li>
                        <li>Janji Temu</li>
                        <li>Kontak</li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h5 class="text-2xl font-bold text-chateau-green-500">Sumber Daya</h5>
                    <ul class="space-y-4">
                        <li>Portal Pasien</li>
                        <li>Blog Kesehatan</li>
                        <li>FAQ</li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h5 class="text-2xl font-bold text-chateau-green-500">Karir</h5>
                    <ul class="space-y-4">
                        <li>Perawat Terdaftar</li>
                        <li>Asisten Medis</li>
                        <li>Resepsionis Meja Depan</li>
                        <li>Administrator Kesehatan</li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h5 class="text-2xl font-bold text-chateau-green-500">Legal</h5>
                    <ul class="space-y-4">
                        <li>Kebijakan Privasi</li>
                        <li>Syarat dan Ketentuan</li>
                        <li>Penafian</li>
                    </ul>
                </div>
            </div>
            <p class="font-bold text-center">© 2024 Rumah Sakit. Semua Hak Dilindungi.</p>
        </div>
    </footer>

</body>

</html>
