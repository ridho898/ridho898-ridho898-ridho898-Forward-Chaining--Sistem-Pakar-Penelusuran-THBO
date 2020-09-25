<br><br><br>
<div class="page-header">
    <h1><?php echo $lang_menu_tambahpenyakit;?></h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post">
            <div class="form-group">
                <label><?php echo $lang_menu_kode;?> <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode" value="<?=set_value('kode', kode_oto('kode_penyakit', 'penyakit', 'P', 2))?>"/>
            </div>
            <div class="form-group">
                <label><?php echo $lang_menu_penyakit;?> <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="<?=set_value('nama')?>"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> <?php echo $lang_menu_simpan;?></button>
                <a class="btn btn-danger" href="?m=penyakit"><span class="glyphicon glyphicon-arrow-left"></span> <?php echo $lang_menu_kembali;?></a>
            </div>
        </form>
    </div>
</div>