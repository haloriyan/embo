let tblMenu = $(".tblMenu")
function togglePhp(status) {
    if(status == 1) {
        // sembunyikan
        $("#menuPhp").hilang()
        $("#menuJs").muncul()
        $(".kiri h3:nth-child(1)").setAttribute("aksi", 0)
    }else {
        $("#menuPhp").muncul()
        $("#menuJs").hilang()
        $(".kiri h3:nth-child(1)").setAttribute("aksi", 1)
    }
}

function toggleJs(status) {
    if(status == 1) {
        $("#menuJs").hilang()
        $("#menuPhp").muncul()
        $("#headerJs").setAttribute("aksi", "0")
    }else {
        $("#menuJs").muncul()
        $("#menuPhp").hilang()
        $("#headerJs").setAttribute("aksi", "1")
    }
}
toggleJs(1)

function bukaTutupMenu() {
    let kiri = $(".kiri")
    let aksi = tblMenu.getAttribute("aksi")
    if(aksi == null || aksi == 1) {
        // tutup
        kiri.pengaya("left: -150%")
        $(".atas").pengaya("width: 100%")
        tblMenu.pengaya("margin-left: 5%")
        $(".container").pengaya("left: 5%;top: 130px")
        tblMenu.setAttribute("aksi", 0)
    }else if(aksi == 0) {
        // buka
        kiri.pengaya("left: 0%")
        $(".atas").pengaya("width: 25%")
        $(".container").pengaya("left: 30%;top: 60px")
        tblMenu.setAttribute("aksi", 1)
    }
}

tblMenu.klik(() => {
    bukaTutupMenu()
})
tekan("m", () => {
    bukaTutupMenu()
})