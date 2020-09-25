<br><br>
<br>
<div class="page-header">
    <h1><?php echo $lang_menu_ubahpassword;?></h1>
</div>
<div class="row">
    <div class="col-sm-5">
        <?php if($_POST) include'aksi.php'?>
        <form method="post">
            <div class="form-group">
                <label><?php echo $lang_menu_passwordlama;?> <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="pass1" placeholder="<?php echo $lang_menu_passwordlama;?>"/>
            </div>
            <div class="form-group">
                <label><?php echo $lang_menu_passwordbaru;?> <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="pass2" placeholder="<?php echo $lang_menu_passwordbaru;?>"/>
            </div>
            <div class="form-group">
                <label><?php echo $lang_menu_passwordkonfirmasi;?> <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="pass3" placeholder="<?php echo $lang_menu_passwordkonfirmasi;?>"/>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> <?php echo $lang_menu_simpan;?></button>
            </div>
        </form>
    </div>
</div>