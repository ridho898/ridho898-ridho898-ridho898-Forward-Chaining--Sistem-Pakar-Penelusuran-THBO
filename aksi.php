p<?php
require_once'functions.php';
 
if ($mod=='login'){
    $user = esc_field($_POST['user']);
    $pass = esc_field($_POST['pass']);
    
    $row = $db->get_row("SELECT * FROM admin WHERE user='$user' AND pass='$pass'");
    if($row){
        $_SESSION['login'] = $row->user;
        redirect_js("index.php");
    } else{
        print_msg("Salah kombinasi username dan password.");
    }          
}else if ($mod=='password'){
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $pass3 = $_POST['pass3'];
    
    $row = $db->get_row("SELECT * FROM admin WHERE user='$_SESSION[login]' AND pass='$pass1'");        
    
    if($pass1=='' || $pass2=='' || $pass3=='')
        print_msg('Field bertanda * harus diisi.');
    elseif(!$row)
        print_msg('Password lama salah.');
    elseif( $pass2 != $pass3 )
        print_msg('Password baru dan konfirmasi password baru tidak sama.');
    else{        
        $db->query("UPDATE admin SET pass='$pass2' WHERE user='$_SESSION[login]'");                    
        print_msg('Password berhasil diubah.', 'success');
    }
} elseif($act=='logout'){
    unset($_SESSION['login']);
    header("location:index.php?m=login");
}

/** TUMBUHAN */
elseif($mod=='tumbuhan_tambah'){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $khasiat = $_POST['khasiat'];
    $solusi = $_POST['solusi'];
    if($kode=='' || $nama=='')
        print_msg("Field yang bertanda * tidak boleh kosong!");
    elseif($db->get_row("SELECT * FROM tumbuhan WHERE kode_tumbuhan='$kode'"))
        print_msg("Kode sudah ada!");
    else{
        $db->query("INSERT INTO tumbuhan (kode_tumbuhan, nama_tumbuhan, khasiat, solusi) VALUES ('$kode', '$nama','$khasiat','$solusi')");                       
        redirect_js("index.php?m=tumbuhan");
    }
} else if($mod=='tumbuhan_ubah'){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $khasiat = $_POST['khasiat'];
    $solusi = $_POST['solusi'];
    if($kode=='' || $nama=='')
        print_msg("Field yang bertanda * tidak boleh kosong!");
    else{
        $db->query("UPDATE tumbuhan SET nama_tumbuhan='$nama', khasiat='$khasiat', solusi='$solusi' WHERE kode_tumbuhan='$_GET[ID]'");
        redirect_js("index.php?m=tumbuhan");
    }
} else if ($act=='tumbuhan_hapus'){
    $db->query("DELETE FROM tumbuhan WHERE kode_tumbuhan='$_GET[ID]'");
    $db->query("DELETE FROM relasi WHERE kode_tumbuhan='$_GET[ID]'");
    header("location:index.php?m=tumbuhan");
} 



/** PENYAKIT */    
elseif($mod=='penyakit_tambah'){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    // $solusi = $_POST['solusi'];
    
    if($kode=='' || $nama=='')
        print_msg("Field bertanda * tidak boleh kosong!");
    elseif($db->get_row("SELECT * FROM penyakit WHERE kode_penyakit='$kode'"))
        print_msg("Kode sudah ada!");
    else{
        $db->query("INSERT INTO penyakit (kode_penyakit, nama_penyakit) VALUES ('$kode', '$nama')");                   
        redirect_js("index.php?m=penyakit");
    }                    
} else if($mod=='penyakit_ubah'){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $solusi = $_POST['solusi'];
    
    if($kode=='' || $nama=='')
        print_msg("Field bertanda * tidak boleh kosong!");
    else{
        $db->query("UPDATE penyakit SET nama_penyakit='$nama' WHERE kode_penyakit='$_GET[ID]'");
        redirect_js("index.php?m=penyakit");
    }    
} else if ($act=='penyakit_hapus'){
    $db->query("DELETE FROM penyakit WHERE kode_penyakit='$_GET[ID]'");
    $db->query("DELETE FROM relasi WHERE kode_penyakit='$_GET[ID]'");
    header("location:index.php?m=penyakit");
} 
    
/** RELASI TAMBAH */ 
else if ($mod=='relasi_tambah'){
    $kode_tumbuhan = $_POST['kode_tumbuhan'];
    $kode_penyakit = $_POST['kode_penyakit'];
      
    
    $kombinasi_ada = $db->get_row("SELECT * FROM relasi WHERE kode_tumbuhan='$kode_tumbuhan' AND kode_penyakit='$kode_penyakit'");
    
    if($kode_tumbuhan=='' || $kode_penyakit=='')
        print_msg("Field bertanda * tidak boleh kosong!");
    elseif($kombinasi_ada)
        print_msg("Kombinasi diagnosa dan penyakit sudah ada!");
    else{
        $db->query("INSERT INTO relasi (kode_tumbuhan, kode_penyakit) VALUES ('$kode_tumbuhan', '$kode_penyakit')");
        redirect_js("index.php?m=relasi");
    }   
}else if ($mod=='relasi_ubah'){
    $kode_tumbuhan = $_POST['kode_tumbuhan'];
    $kode_penyakit = $_POST['kode_penyakit'];
   
    
    $kombinasi_ada = $db->get_row("SELECT * FROM relasi WHERE kode_tumbuhan='$kode_tumbuhan' AND kode_penyakit='$kode_penyakit' AND ID<>'$_GET[ID]'");
    
    if($kode_tumbuhan=='' || $kode_penyakit=='')
        print_msg("Field bertanda * tidak boleh kosong!");
    elseif($kombinasi_ada)
        print_msg("Kombinasi diagnosa dan penyakit sudah ada!");
    else{
        $db->query("UPDATE relasi SET kode_tumbuhan='$kode_tumbuhan', kode_penyakit='$kode_penyakit' WHERE ID='$_GET[ID]'");
        redirect_js("index.php?m=relasi");
    }  
    header("location:index.php?m=relasi");
} else if ($act=='relasi_hapus'){
    $db->query("DELETE FROM relasi WHERE ID='$_GET[ID]'");
    header("location:index.php?m=relasi");
} else if ($mod=='konsultasi') {
    if($_POST['yes'])
        $db->query("INSERT INTO konsultasi   (kode_penyakit, jawaban) VALUES ('$_POST[kode_penyakit]', 'Ya')");
    elseif($_POST['no'])
        $db->query("INSERT INTO konsultasi   (kode_penyakit, jawaban) VALUES ('$_POST[kode_penyakit]', 'Tidak')");
    elseif($act=='new')
        $db->query("TRUNCATE TABLE konsultasi   ");
        
    header("location:index.php?m=konsultasi");
}