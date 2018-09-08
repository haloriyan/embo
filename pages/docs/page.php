<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale = 1'>
    <title>Membuat Halaman Sederhana - Dokumentasi EMBO</title>
    <link href='../aset/fw/build/fw.css' rel='stylesheet'>
    <link href='../aset/fw/build/font-awesome.min.css' rel='stylesheet'>
    <link href='../aset/css/style.docs.css' rel='stylesheet'>
</head>
<body>

<div class="atas merah-2">
    <div class='tblMenu'>&nbsp;<i class='fa fa-bars'></i>&nbsp;</div>
    <h1 class='judul'>EMBO Docs</h1>
</div>

<div class='kiri'>
    <div class='wrap'>
        <h3 onclick='togglePhp(this.getAttribute("aksi"))' aksi='1'>EMBO PHP <i class='fa fa-angle-down ke-kanan'></i></h3>
        <div class='menu' id='menuPhp'>
            <a href="./intro"><li>Berkenalan dengan EMBO</li></a>
            <a href="./install"><li>Instalasi EMBO</li></a>
            <a href="./config-database"><li>Konfigurasi Database</li></a>
            <a href="#" class='active'><li>Membuat Halaman Sederhana</li></a>
            <a href="./migrasi"><li>Migrasi Database</li></a>
            <a href="./controller"><li>Membuat Controller</li></a>
            <a href="./query-builder"><li>Query Builder</li></a>
            <a href="./note"><li>Catatan Tambahan</li></a>
        </div>
        <h3 onclick='toggleJs(this.getAttribute("aksi"))' aksi='1' id='headerJs'>EMBO JS <i class='fa fa-angle-down ke-kanan'></i></h3>
        <div class='menu' id='menuJs'>
            <a href="./intro-js"><li>Intro EmboJS</li></a>
            <a href="./dom-js"><li>Urusan DOM</li></a>
            <a href="./keyboard-js"><li>Keyboard Event</li></a>
            <a href="./ajax-js"><li>AJAX</li></a>
        </div>
    </div>
</div>

<div class='container'>
    <div class="wrap">
        <h2>Membuat Halaman Sederhana</h2>
        <p>
            Kamu tak perlu repot ngoding script view mulai dari awal. Kamu bisa meng-generate halaman baru dengan sangat mudah melalui
            <div class='code'>
                http://yoursite.com/page
            </div>
        </p>
        <p>
            Klik tombol &nbsp; <button class='tbl merah-2'><i class='fa fa-plus'></i> New Page</button> &nbsp; yang ada disana dan isi beri nama page-nya. Kamu juga akan diberi opsi apakah ingin sekalian membuat file css dan js-nya atau tidak. Jika dicentang, maka file <span class='code mini'>style.namaPage.css</span> akan berada di <span class='code mini'>/aset/css/</span> dan <span class='code mini'>script.namaPage.js</span> akan diletakkan di <span class='code mini'>/aset/js/</span>
        </p>
        <br />
        <h2>Memindahkan ke direktori</h2>
        <p>
            Biar developping-nya jadi mudah dan enak dilihat, kamu bisa mengelompokkan view-view (page) yang kamu punya dengan memasukkannya ke dalam sebuah direktori.
        </p>
        <p>
        Misal, untuk masalah user, kita buat direktori <b>user</b> dan memasukkan semua view yang diperlukan kedalamnya. Kemudian untuk membukanya kamu bisa membuka melalui URL <span class='code mini'>http://yoursite.com/user/login</span>
        </p>
        <p>
            Tapi untuk soal meng-src-kan aset-aset (css, img, dan js), harus kamu ubah juga sesuai dengan posisi yang ditunjukkan dari URL. Jika view-nya kamu letakkan di dalam direktori, maka src-nya harus <span class='code mini'>src='../aset/css/style.css'</span>. Begini pula dengan yang js-nya
        </p>
        <a href='./migrasi'><button class='tbl merah-2'>Lanjut ke : Migrasi Database</button></a>
    </div>
</div>

<script src='../aset/js/embo.js'></script>
<script src='../aset/js/script.docs.js'></script>

</body>
</html>