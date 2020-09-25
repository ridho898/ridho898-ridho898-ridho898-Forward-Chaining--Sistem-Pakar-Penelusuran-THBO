<?php
error_reporting(~E_NOTICE);
session_start();
$config["server"]='localhost';
$config["username"]='root';
$config["password"]='';
$config["database_name"]='dbtum';

include'includes/db.php';
$db = new DB($config['server'], $config['username'], $config['password'], $config['database_name']);
include'includes/general.php';
    
$mod = $_GET['m'];
$act = $_GET['act'];   

$rows = $db->get_results("SELECT kode_penyakit, nama_penyakit FROM penyakit ORDER BY kode_penyakit");
$PENYAKIT = array();
foreach($rows as $row){
    $PENYAKIT[$row->kode_penyakit] = $row->nama_penyakit;
}

$rows = $db->get_results("SELECT * FROM tumbuhan ORDER BY kode_tumbuhan");
$TUMBUHAN = array();
foreach($rows as $row){
    $TUMBUHAN[$row->kode_tumbuhan] = $row;
}

function get_terjawab(){
    global $db;
    $rows = $db->get_results("SELECT kode_penyakit, jawaban FROM konsultasi");
    foreach($rows as $row){
        $arr[$row->kode_penyakit] = $row->jawaban;
    }
    return $arr;
}

function  get_next_penyakit($relasi){
    eliminate_relasi($relasi);
    print_r($relasi);
    foreach($relasi as $key => $val){
        foreach($val as $k => $v){
            if($v=='')
                return $k;
        }
    }
    return false;
}

function get_relasi($terjawab){
    global $db;
    $rows = $db->get_results("SELECT kode_tumbuhan, r.kode_penyakit 
        FROM relasi r
        ORDER BY kode_tumbuhan, r.kode_penyakit");
    $arr = array();
    foreach($rows as $row){
        $arr[$row->kode_tumbuhan][$row->kode_penyakit] = $terjawab[$row->kode_penyakit];
    }
    //echo '<pre>' . print_r($terjawab, 1) . '</pre>';
    return $arr;
}

function eliminate_relasi(&$relasi){
    foreach($relasi as $key => $val){
        $tidak=0;
        foreach($val as $k => $v){
            if($v=='Tidak')
                $tidak++;
        }
        if($tidak>=2 || $tidak >= count($val)/2)
            unset($relasi[$key]);
    }
    //echo '<pre>' . print_r($relasi, 1) . '</pre>';
}


function CF_get_tumbuhan_option($selected = ''){
    global $db;
    $rows = $db->get_results("SELECT kode_tumbuhan, nama_tumbuhan FROM tumbuhan ORDER BY kode_tumbuhan");
    foreach($rows as $row){
        if($row->kode_tumbuhan==$selected)
            $a.="<option value='$row->kode_tumbuhan' selected>[$row->kode_tumbuhan] $row->nama_tumbuhan</option>";
        else
            $a.="<option value='$row->kode_tumbuhan'>[$row->kode_tumbuhan] $row->nama_tumbuhan</option>";
    }
    return $a;
}

function CF_get_penyakit_option($selected = ''){
    global $db;
    $rows = $db->get_results("SELECT kode_penyakit, nama_penyakit FROM penyakit ORDER BY kode_penyakit");
    foreach($rows as $row){
        if($row->kode_penyakit==$selected)
            $a.="<option value='$row->kode_penyakit' selected>[$row->kode_penyakit] $row->nama_penyakit</option>";
        else
            $a.="<option value='$row->kode_penyakit'>[$row->kode_penyakit] $row->nama_penyakit</option>";
    }
    return $a;
}