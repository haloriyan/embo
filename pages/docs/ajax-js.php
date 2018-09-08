<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale = 1'>
    <title>Intro EmboJS - Dokumentasi EmboJS</title>
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
        <h3 onclick='togglePhp(this.getAttribute("aksi"))' aksi='1' id='headerPhp'>EMBO PHP <i class='fa fa-angle-down ke-kanan'></i></h3>
        <div class='menu' id='menuPhp'>
            <a href="./intro"><li>Berkenalan dengan EMBO</li></a>
            <a href="./install"><li>Instalasi EMBO</li></a>
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
            <a href="./ajax-js" class='active'><li>AJAX</li></a>
        </div>
    </div>
</div>

<div class='container'>
    <div class="wrap">
        <h2>AJAX</h2>
        <h3>GET</h3>
        <div class="code">
            &lt;script&gt;<br />
            ambil("urlTarget", (res) => {<br />
            &nbsp; &nbsp; &nbsp; pilih("#res").tulis(res)<br />
            })<br />
            &lt;/script&gt;
        </div>
        <h3>GET ( JSON )</h3>
        <div class="code">
            &lt;script&gt;<br />
            ambilJSON("urlTarget", (res) => {<br />
            &nbsp; &nbsp; &nbsp; pilih("#res").tulis(res)<br />
            })<br />
            &lt;/script&gt;
        </div>
        <h3>POST</h3>
        <div class="code">
            &lt;script&gt;<br />
            pos("urlTarget", params, () => {<br />
            &nbsp; &nbsp; &nbsp; alert('parameter terkirim!')<br />
            })<br />
            &lt;/script&gt;
        </div>
        <br />
    </div>
</div>

<script src='../aset/js/embo.js'></script>
<script src='../aset/js/script.docs.js'></script>
<script>toggleJs(0)</script>

</body>
</html>