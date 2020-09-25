<br><br><br>
<div class="page-header">
    <h1><?php echo $lang_menu_tambahtumbuhan;?></h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post">
            <div class="form-group">
                <label><?php echo $lang_menu_kode;?> <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode" value="<?=set_value('kode', kode_oto('kode_tumbuhan', 'tumbuhan', 'T', 3))?>"/>
            </div>
            <div class="form-group">
                <label><?php echo $lang_menu_tumbuhan;?> <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="<?=set_value('nama')?>"/>
            </div>
            <div class="form-group">
                <label><?php echo $lang_menu_khasiat;?> </label>
                <textarea class="form-control" name="khasiat"><?=set_value('khasiat')?></textarea>
            </div>
            <div class="form-group">
                <label><?php echo $lang_menu_carapenggunaan;?> </label>
                <textarea class="form-control" name="carapenggunaan"><?=set_value('solusi')?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> <?php echo $lang_menu_simpan;?></button>
                <a class="btn btn-danger" href="?m=tumbuhan"><span class="glyphicon glyphicon-arrow-left"></span> <?php echo $lang_menu_kembali;?></a>
            </div>
        </form>
    </div>
</div>
