<h1><?php echo $lang_menu_hasilidentifikasi;?></h1>
<?php

$penyakit = $_SESSION['penyakit'] ;
$rows = $db->get_results("SELECT * FROM penyakit WHERE kode_penyakit IN (SELECT kode_penyakit FROM konsultasi WHERE jawaban='Ya')");
?>
<h1 align="center">HASIL KONSULTASI</h1>


 
            
<div class="card mb-3">
          
          <div class="card-body">
          <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                <?php
              include_once("koneksi.php");
 
$result5 = mysqli_query($mysqli, "SELECT * FROM userkonsul ORDER BY id_user ASC");
?>
                    <?php 
                    if($data = mysqli_fetch_array($result5)) {    
          echo "Nama : &nbsp;" .$data['nama']. "&nbsp;&nbsp;&nbsp;";
                    echo "Tanggal Konsultasi : &nbsp;" .$data['tanggalkonsultasi'];
            
          }
         ?>

<thead>
    <tr>
        <th>NO</th>
        <th>penyakit TERPILIH</th>
    </tr>
</thead>
<?php
$no=1;
foreach($rows as $row):?>
<tr>
    <td><?=$no++?></td>
    <td><?=$row->nama_penyakit?></td>
</tr>
<?php endforeach;?>

</thead>
  
<?php
$rows = $db->get_results("SELECT * 
    FROM relasi r INNER JOIN tumbuhan d ON d.kode_tumbuhan = r.kode_tumbuhan      
    WHERE r.kode_penyakit IN (SELECT kode_penyakit FROM konsultasi WHERE jawaban='Ya') ORDER BY r.kode_tumbuhan, r.kode_penyakit");

foreach($rows as $row){
    $tumbuhan[$row->kode_tumbuhan]['mb'] = $tumbuhan[$row->kode_tumbuhan]['mb'] + $row->mb * (1 - $tumbuhan[$row->kode_tumbuhan]['mb']);
    $tumbuhan[$row->kode_tumbuhan]['md'] = $tumbuhan[$row->kode_tumbuhan]['md'] + $row->md * (1 - $tumbuhan[$row->kode_tumbuhan]['md']);
    
    $tumbuhan[$row->kode_tumbuhan]['cf'] = $tumbuhan[$row->kode_tumbuhan]['mb'] *  $tumbuhan[$row->kode_tumbuhan]['md'];     
}
?>

<h3><?php echo $lang_menu_hasilidentifikasi;?></h3>

          <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
<thead>
    <tr>
        <th>NO</th>
        <th>NAMA TUMBUHAN</th>
    </tr>
</thead>
<?php
$no=1;
function ranking($array){
    $new_arr = array();
    foreach($array as $key => $value) {
        $new_arr[$key] = $value['cf'];
    }
    arsort($new_arr);
    
    $result = array();    
    foreach($new_arr as $key => $value){
        $result[$key] = ++$no;
    }    
    return $result;
}    

$rank = ranking($tumbuhan);

foreach($rank as $key => $value):?>
    <tr class="<?=($value==1) ? 'text-primary' : ''?>">
    <td><?=$no++?></td>
    <td><?=$TUMBUHAN[$key]->nama_tumbuhan?></td>
</tr>
<?php break; endforeach;
reset($rank);        
?>
  
          <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">


    <tr>
        <td>TUMBUHAN</td>
        <td><?=$TUMBUHAN[key($rank)]->nama_tumbuhan?></td>
    </tr>
    <tr>
        <td>Solusi</td>
        <td><?=$TUMBUHAN[key($rank)]->solusi?></td>
    </tr>
</thead>
                  <tfoot>
                   
                  </tbody>
                </table>

                </div>
</div>