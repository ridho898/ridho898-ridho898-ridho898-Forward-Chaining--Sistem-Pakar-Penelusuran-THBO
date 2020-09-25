function checkLetter()
        {
            var validasiHuruf = /^[a-zA-Z ]+$/;
            var namaKota = document.getElementById("kota");
            
            if (namaKota.value.match(validasiHuruf)) {
                alert("Nama Kota Kamu Adalah " + namaKota.value);
            } else {
                alert("Nama Kota Wajib Huruf!");
                
            }
        }