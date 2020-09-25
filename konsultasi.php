<?php
$terjawab = get_terjawab();
$relasi = get_relasi($terjawab);
$kode_penyakit = get_next_penyakit($relasi);

$success = $_GET['success'];
$row = $db->get_row("SELECT * FROM penyakit WHERE kode_penyakit='$kode_penyakit'");

$count = $db->get_var("SELECT COUNT(*) FROM konsultasi");
    
if(!$row){
    $success = true;        
}        
?>
<br><br><br>
<div class="page-header">
    <h1><?php echo $lang_menu_consult;?></h1>
</div>
<hr>

<?php if($success) :?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang_menu_riwayatpertanyaan;?></h3>
    </div>


    <div class="list-group">
    <hr>
        <?php 
        $rows = $db->get_results("SELECT * FROM konsultasi k INNER JOIN penyakit g ON g.kode_penyakit=k.kode_penyakit");
        foreach($rows as $row):?>
        <div class="list-group-item"><?=$row->ID?>. Apakah <?=strtolower($row->nama_penyakit)?>? <strong><?=$row->jawaban?></strong></div>
        <?php endforeach?>
    </div>    
</div>
<?php include'konsultasi_hasil.php';
else:?>
<div class="panel panel-primary">
    <div class="panel-heading"><h3 class="panel-title"><?php echo $lang_menu_jawablah;?> [<?=$row->kode_penyakit?>]</h3></div>
    <div class="panel-body">

    <div class="card mb-3">
          <div class="card-header">
           
            </div>
          <div class="card-body">
          <div class="table-responsive">
                
        <h3>Apakah <?=strtolower($row->nama_penyakit)?>?</h3>
</div></div>
        <form action="aksi.php?m=konsultasi" method="post">
            <input type="hidden" name="kode_penyakit" value="<?=$row->kode_penyakit?>" />
            <p>&nbsp;</p>


            <p>
               &nbsp; <button name="yes" class="btn btn-primary" value="1"><?php echo $lang_menu_ya;?></button>
                <button name="no" class="btn btn-danger" value="1"><?php echo $lang_menu_tidak;?></button> 
                
                <?php if($count):?>           
                <a class="btn btn-success" href="?m=konsultasi&success=2"><?php echo $lang_menu_hasilkonsultasi;?></a>
                <a class="btn btn-primary pull-right" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-refresh"></span> <?php echo $lang_menu_batal;?></a>
                <?php endif?>
            </p>
        </form>
    </div>
</div>
<?php endif?>
    