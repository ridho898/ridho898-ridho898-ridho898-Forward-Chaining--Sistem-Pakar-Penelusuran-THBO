<br><br><br>
<div class="page-header">
    <h1><?php echo $lang_menu_tambahbasis;?></h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php if($_POST) include'aksi.php'?>
        <form method="post">
            <div class="form-group">
                <label><?php echo $lang_menu_tumbuhan;?> <span class="text-danger">*</span></label>
                <select class="form-control" name="kode_tumbuhan">
                    <option value="">&nbsp;</option>
                    <?=CF_get_tumbuhan_option(set_value('kode_tumbuhan'))?>
                </select>
            </div>
            <div class="form-group">
                <label><?php echo $lang_menu_penyakit;?> <span class="text-danger">*</span></label>
                <select class="form-control" name="kode_penyakit">
                    <option value="">&nbsp;</option>
                    <?=CF_get_penyakit_option(set_value('kode_penyakit'))?>
                </select>
            </div>
            
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> <?php echo $lang_menu_simpan;?></button>
                <a class="btn btn-danger" href="?m=relasi"><span class="glyphicon glyphicon-arrow-left"></span> <?php echo $lang_menu_kembali;?></a>
            </div>
        </form>
    </div>
</div>