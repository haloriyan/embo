<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale = 1'>
    <title>Instalasi EMBO - Dokumentasi EMBO</title>
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
            <a href="#" class='active'><li>Instalasi EMBO</li></a>
            <a href="./config-database"><li>Konfigurasi Database</li></a>
            <a href="./page"><li>Membuat Halaman Sederhana</li></a>
            <a href="./migrasi"><li>Migrasi Database</li></a>
            <a href="./controller"><li>Membuat Controller</li></a>
            <a href="./query-builder"><li>Query Builder</li></a>
            <a href="./note"><li>Catatan Tambahan</li></a>
        </div>
        <h3 onclick='toggleJs(this.getAttribute("aksi"))' aksi='1' id='headerJs'>EMBO JS <i class='fa fa-angle-down ke-kanan'></i></h3>
        <div class='menu' id='menuJs'>
            <a href="./intro-js"><li>Intro EmboJS</li></a>
            <a href="./dom-js"><li>Urusan DOM</li></a>
            <a href="./mouse-js"><li>Mouse Event</li></a>
            <a href="./keyboard-js"><li>Keyboard Event</li></a>
            <a href="./ajax-js"><li>AJAX</li></a>
        </div>
    </div>
</div>

<div class='container'>
    <div class="wrap">
        <h2>Instalasi EMBO</h2>
        <p>
            Untuk mendapatkan versi clean dari EMBO, jalankan perintah berikut di folder htdocs untuk meng-clone project
            <div class='code'>
                git clone https://github.com/haloriyan/embo.git
            </div>
        </p>
        <p>
        Setelah proses cloning berhasil, kamu akan mendapatkan 4 direktori yang terdiri dari aksi, aset, database, pages dan 4 buah file yakni .htaccess, index.php, README.md, dan routes.php
        </p>
        <p>
            <li><b>Direktori aksi</b> semua codingan back-end ( controller ) ditempatkan di direktori ini.</li>
            <li><b>Direktori aset</b> digunakan untuk menyimpan semua aset, seperti css, gambar, dan juga javascript.</li>
            <li><b>Direktori database</b> digunakan untuk menyimpan keperluan database. Di dalamnya ada 2 buah file, yaitu migration.json buat setup table dan config.php untuk konfigurasi koneksi</li>
            <li><b>Direktori pages</b> semua script view ditaruh disini</li>
        </p>
        <p>
            Sedangkan untuk <b>index.php</b> adalah halaman awalnya. Selain itu jangan ada yang diubah
        </p>
        <a href='./page'><button class='tbl merah-2'>Lanjut ke : Membuat Halaman Sederhana</button></a>
    </div>
</div>

<script src='../aset/js/embo.js'></script>
<script src='../aset/js/script.docs.js'></script>

</body>
</html>