
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>IMMAPA Hub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <style>
        .oswald-<uniquifier> {
        font-family: "Oswald", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        }
    </style>
</head>
<body>
<nav class="bg-blue-900 border-gray-200 sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex items-center">
            <img src="Assets/LOGO IMMAPA.png" class="h-10 mr-4" alt="Logo Immapa" />
            <span id="logoText" class="text-2xl font-semibold whitespace-nowrap text-white oswald-bold">
                IMMAPA Hub
            </span>
        </div>
        <div class="flex space-x-4">
            <a href="/" class="text-white font-semibold hover:underline">Beranda</a>
            <a href="/anggota" class="text-white font-semibold hover:underline">Anggota</a>
            <a href="/PengurusKabinet" class="text-white font-semibold hover:underline">Pengurus</a>
            <a href="/kegiatan" class="text-white font-semibold hover:underline">Kegiatan</a>        </div>
    </div>
</nav>
    <div class="slideshow-container">
        <div class="slide">
            <img src="/Assets/Pengurus inti.png" alt="Kabinet">
        </div>
        <div class="slide"> 
            <img src="/Assets/Pengurus inti (2).png" alt="Pengurus">
        </div>
        <div class="slide">
            <img src="/Assets/Internal.png" alt="Internal">
        </div>

        <div class="slide">
            <img src="/Assets/Kominfo.png" alt="kominfo">
        </div>
        <div class="slide">
            <img src="/Assets/Seni Budaya.png" alt="Seni Budaya">
        </div>
        <div class="slide">
            <img src="/Assets/Eksternal.png" alt="Eksternal">
        </div>
     </div>
    <script>
        let slideIndex = 0;
        const slides = document.getElementsByClassName("slide");

        function showSlides() {
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2000);
        }

        showSlides();
    </script>
</body>
<footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 ">
    <div class="w-full max-w-screen-xl mx-auto  md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="Assets/LOGO IMMAPA.png" class="h-8" alt="Logo Immapa" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ikatan Mahasiswa Maluku Papua </span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Tentang Kami</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Lisensi</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Kontak</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://www.instagram.com/immapa_tu" class="hover:underline">Ikatan Mahasiswa Maluku Papua™</a>. All Rights Reserved.</span>
    </div>
</footer>
</html>