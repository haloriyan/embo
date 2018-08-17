<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale = 1'>
    <title>Membuat Controller - Dokumentasi EMBO</title>
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
            <a href="./migrasi"><li>Migrasi Database</li></a>
            <a href="#" class='active'><li>Membuat Controller</li></a>
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
        <h2>Membuat Controller</h2>
        <p>
            Tulis semua codingan back-end mu pada controller. Tak perlu repot bikin controller secara manual, kamu bisa membuatnya melalui <span class='code mini'>http://yoursite.com/controller</span>. Caranya hampir sama ketika <a href="./page">Membuat Halaman Sederhana</a>, yakni dengan menekan tombol &nbsp; <button class='tbl merah-2'><i class='fa fa-plus'></i> New Controller</button> &nbsp; dan memberinya nama.
        </p>
        <p>
            Ketika controller sudah berhasil di-generate, dia akan masuk ke dalam folder <span class='code mini'>/aksi/ctrl/</span> dan isinya seperti berikut
            <div class='code'>
                &lt;?php<br />
                include 'controller.php';<br /><br />
                class namaController extends controller {<br />
                &nbsp; &nbsp; &nbsp; public function test() {<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return 'Hello Embo';<br />
                &nbsp; &nbsp; &nbsp; }<br />
                }<br /><br />
                $namaController = new namaController();<br />
                ?&gt;
            </div>
        </p>
        <p>
            Kamu bisa menjalankan function yang ada di controller melalui URL. Yaitu di <span class='code mini'>http://yoursite.com/namaController/test</span>, "test" ini adalah nama function yang akan kita jalankan.
        </p>
        <h2>Membuka View dari Controller</h2>
        <p>
            Selain melalui URL langsung, kamu juga bisa membuka view yang ada di direktori <span class='code mini'>/pages/</span> melalui controller.
            <div class='code'>
            ...<br />                
            class user extends controller {<br />
            &nbsp; &nbsp; &nbsp; public function login() {<br />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return lihat('user/login');<br />
            &nbsp; &nbsp; &nbsp; }<br />
            }<br />
            ...
            </div>
        </p>
        <p>
            Sekarang jika kamu membuka URL <span class='code mini'>http://yoursite.com/user/login</span>, maka kamu akan membuka file login.php yang ada di <span class='code mini'>/pages/user/login.php</span>
        </p>
        <a href='./query-builder'><button class='tbl merah-2'>Lanjut ke : Query Builder</button></a>
    </div>
</div>

<script src='../aset/js/embo.js'></script>
<script src='../aset/js/script.docs.js'></script>

</body>
</html>