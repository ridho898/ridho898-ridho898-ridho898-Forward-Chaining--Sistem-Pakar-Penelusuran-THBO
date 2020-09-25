<?php
    $row = $db->get_row("SELECT * FROM penyakit WHERE kode_penyakit='$_GET[ID]'"); 
?>
<br><br><br>
<div class="page-header">
    <h1><?php echo $lang_menu_ubahpenyakit;?></h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post">
            <div class="form-group">
                <label><?php echo $lang_menu_kode;?> <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode" readonly="readonly" value="<?=$row->kode_penyakit?>"/>
            </div>
            <div class="form-group">
                <label><?php echo $lang_menu_penyakit;?> <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="<?=set_value('nama', $row->nama_penyakit)?>"/>
            </div>

            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> <?php echo $lang_menu_simpan;?></button>
                <a class="btn btn-danger" href="?m=penyakit"><span class="glyphicon glyphicon-arrow-left"></span> <?php echo $lang_menu_kembali;?></a>
            </div>
        </form>
    </div>
</div>