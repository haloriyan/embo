let tblMenu = pilih(".tblMenu")
function togglePhp(status) {
    if(status == 1) {
        // sembunyikan
        pilih("#menuPhp").hilang()
        pilih("#menuJs").muncul()
        pilih(".kiri h3:nth-child(1)").setAttribute("aksi", 0)
    }else {
        pilih("#menuPhp").muncul()
        pilih("#menuJs").hilang()
        pilih(".kiri h3:nth-child(1)").setAttribute("aksi", 1)
    }
}

function toggleJs(status) {
    if(status == 1) {
        pilih("#menuJs").hilang()
        pilih("#menuPhp").muncul()
        pilih("#headerJs").setAttribute("aksi", "0")
    }else {
        pilih("#menuJs").muncul()
        pilih("#menuPhp").hilang()
        pilih("#headerJs").setAttribute("aksi", "1")
    }
}
toggleJs(1)

function bukaTutupMenu() {
    let kiri = pilih(".kiri")
    let aksi = tblMenu.getAttribute("aksi")
    if(aksi == null || aksi == 1) {
        // tutup
        kiri.pengaya("left: -150%")
        pilih(".atas").pengaya("width: 100%")
        tblMenu.pengaya("margin-left: 5%")
        pilih(".container").pengaya("left: 5%;top: 130px")
        tblMenu.setAttribute("aksi", 0)
    }else if(aksi == 0) {
        // buka
        kiri.pengaya("left: 0%")
        pilih(".atas").pengaya("width: 25%")
        pilih(".container").pengaya("left: 30%;top: 60px")
        tblMenu.setAttribute("aksi", 1)
    }
}

tblMenu.klik(() => {
    bukaTutupMenu()
})
tekan("m", () => {
    bukaTutupMenu()
})