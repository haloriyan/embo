<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale = 1'>
    <title>Migrasi Database - Dokumentasi EMBO</title>
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
            <a href="./page"><li>Membuat Halaman Sederhana</li></a>
            <a href="./migrasi" class='active'><li>Migrasi Database</li></a>
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
        <h2>Migrasi Database</h2>
        <p>
            Agar kerja teamwork lebih mudah, EMBO mempunyai migrasi untuk mengatur tabel-tabel database. Untuk mengatur tabel, kamu bisa membuka <span class='code mini'>/database/migration.json</span> dan mengaturnya melalui file ini. Dan berikut ini adalah contoh pengaturan tabel yang ada di <span class='code mini'>migration.json</span>
        </p>
        <p>
            <div class='code'>
                {<br />
                    &nbsp; &nbsp; &nbsp;"tabel": {<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"user": [<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"iduser int(11)",<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"email varchar(40)",<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"password varchar(40)",<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"timestamp int(11)"<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;],<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"admin": [<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"idadmin int(11)",<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"username varchar(40)",<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"password varchar(40)",<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"timestamp int(11)"<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;]<br />
                        &nbsp; &nbsp; &nbsp;}<br />
                        &nbsp; &nbsp; &nbsp;"atribut": {<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"primary key": [<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"user.iduser",<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"admin.idadmin"<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;],<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"unique key": [<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"user.email",<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"admin.username"<br />
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;]<br />
                        &nbsp; &nbsp; &nbsp;}<br />
                }<br />
            </div>
        </p>
        <p>
            Apabila tabelnya dirasa sudah cukup, migrate tabelnya dengan menjalankan url <span class='code mini'>http://yoursite.com/migrate</span> dan nanti dia akan membuat database jika belum ada dan langsung melakukan setup tabel sesuai yang kita tulis di migration.json tadi.
        </p>
        <a href='./controller'><button class='tbl merah-2'>Lanjut ke : Membuat Controller</button></a>
    </div>
</div>

<script src='../aset/js/embo.js'></script>
<script src='../aset/js/script.docs.js'></script>

</body>
</html>