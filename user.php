<?php

include_once("koneksi.php");

if(isset($_POST['submit'])) {

	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$alamat = $_POST['alamat'];
	$tanggalkonsultasi = $_POST['tanggalkonsultasi'];

    

	
        $query = "INSERT INTO userkonsul (nama,nohp,jeniskelamin,alamat,tanggalkonsultasi) VALUES('".$nama."', '".$nohp."', '".$jeniskelamin."', '".$alamat."', '".$tanggalkonsultasi."')";
        $sql = mysqli_query($mysqli, $query);
    
        if($sql){
            
            echo "<script>alert('Data Berhasil Di Simpan');window.location='aksi.php?m=konsultasi&act=new'</script>";
             
            
            exit();
        }else{
            // Jika Gagal, Lakukan :
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='?m=biodata'>Kembali Ke Form</a>";
        }
    }else{
        // Jika gambar gagal diupload, Lakukan :
        echo "Maaf, pdf gagal untuk diupload.";
        echo "<br><a href='event.php'>Kembali Ke Form</a>";
    }
    
    
    ob_end_flush();
    ?><?php

