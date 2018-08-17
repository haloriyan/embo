<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale = 1'>
    <title>Query Builder - Dokumentasi EMBO</title>
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
            <a href="./controller"><li>Membuat Controller</li></a>
            <a href="#" class='active'><li>Query Builder</li></a>
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
        <h2>Query Builder</h2>
        <p>
            Untuk masalah SQL Query, kamu tak perlu menuliskannya secara manual. Kamu bisa menggunakan query builder-nya embo agar proses ngodingmu semakin cepat.
        </p>
        <h3>Menambah Data</h3>
        <p>
            <div class='code'>
                $insert = $this->tabel("users")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->tambah([<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"iduser" => rand(1, 999),<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"username" => $username,<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"password" => $password,<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"registered" => time()<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;])<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->eksekusi();
            </div>
        </p>
        <h3>Melihat Data</h3>
        <p>
            <div class='code'>
                // Semua data<br />
                $read = $this->tabel("users")->pilih()->eksekusi();<br /><br />
                // Kolom tertentu<br />
                $read = $this->tabel("users")->pilih("nama")->eksekusi();<br /><br />
                // WHERE =<br />
                $read = $this->tabel("users")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->pilih()<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->dimana([<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "iduser" => "123"<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;])<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->eksekusi();<br /><br />
                // WHERE LIKE<br />
                $read = $this->tabel("users")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->pilih()<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->dimana([<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "nama" => "riyan"<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;], "like")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->eksekusi();<br /><br />
                // WHERE !=<br />
                $read = $this->tabel("users")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->pilih()<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->dimana([<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "iduser" => "123"<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;], "!=")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->eksekusi();<br /><br />
                // LIMIT<br />
                $read = $this->tabel("users")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->pilih()<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->batas(10)<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->eksekusi();<br /><br />
                // ORDER BY<br />
                $read = $this->tabel("users")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->pilih()<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->urutkan("nama", "ASC") // Kalau pengen DESC ya diganti aja<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->eksekusi();<br /><br />
            </div>
        </p>
        <h3>Mengubah Data</h3>
        <p>
            <div class='code'>
                $update = $this->tabel("users")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->ubah([<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"nama" => "Riyan Satria"<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;])<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->dimana([<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"iduser" => "123"<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;])<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->eksekusi();<br />
            </div>
        </p>
        <h3>Menghapus Data</h3>
        <p>
            <div class='code'>
                $delete = $this->tabel("users")<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->hapus()<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->dimana([<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"iduser" => "123"<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;])<br />
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;->eksekusi();<br />
            </div>
        </p>
        <h2>Menjalankan Query secara Native</h2>
        <p>
            Masih ada banyak fungsi SQL Query yang belum didukung oleh EMBO, seperti inner join, left join, sum(), count(), dsb. Tapi kamu tetap bisa menjalankannya dengan membuat query secara native, jadi kamu harus bikin sendiri
            <div class='code'>
                $query = $this->query("SELECT * FROM users");
            </div>
        </p>
        <h2>Mengambil Data dari Query</h2>
        <p>
            Setelah kita berhasil membuat query memakai builder, saatnya mengambilnya (mysqli_fetch_array()) seperti ini
            <div class='code'>
                $query  = $this->query("SELECT * FROM users WHERE iduser = '1'");<br />
                $result = $this->ambil($q);<br />
                echo $result['nama'];
            </div>
        </p>
        <h2>Menghitung Data dari Query</h2>
        <p>
            Biasanya kamu menggunakan mysqli_num_rows() untuk menghitung data, di EMBO kamu tak perlu mengetikkannya seperti itu, tinggal pakai <span class='code mini'>$this->hitung()</span> saja.
            <div class='code'>
                $query = $this->query("SELECT * FROM users");<br />
                $total = $this->hitung($query);
            </div>
        </p>
        <p>
            Catatan : <span class='code mini'>$this</span> hanya digunakan ketika di dalam sebuah function controller saja. Jika diluar situ, gunakan <span class='code mini'>$ctrl</span> dan jangan lupa include-kan controller-nya
        </p>
        <a href='./finish'><button class='tbl merah-2'>Lanjut ke : Finishing</button></a>
    </div>
</div>

<script src='../aset/js/embo.js'></script>
<script src='../aset/js/script.docs.js'></script>

</body>
</html>