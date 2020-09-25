<br><br><br>
<div class="page-header">
    <h1><?php echo $lang_menu_indication;?></h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="penyakit" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="<?php echo $lang_menu_pencarian;?>" name="q" value="<?=$_GET['q']?>" />
            </div>&nbsp;&nbsp;
            <div class="form-group">
                <button class="btn btn-success"><i class="fa fa-refresh" aria-hidden="true"></i> <?php echo $lang_menu_refresh;?></button>
            </div>&nbsp;&nbsp;
            <div class="form-group">
                <a class="btn btn-primary" href="?m=penyakit_tambah"><i class="fa fa-plus-circle" aria-hidden="true"></i> <?php echo $lang_menu_tambah;?></a>
            </div>
        </form>
    </div><br>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr style="background: #B7E2AB; padding: 30px; border-radius: 10px;" class="container-fluid">
                <th><?php echo $lang_menu_kode;?></th>
                <th><?php echo $lang_menu_penyakit;?></th>
                <th><?php echo $lang_menu_aksi;?></th>
                </tr>
            </thead>
            <?php
            $q = esc_field($_GET['q']);
            $rows = $db->get_results("SELECT * FROM penyakit 
            WHERE kode_penyakit LIKE '%$q%' OR nama_penyakit LIKE '%$q%'  
            ORDER BY kode_penyakit");
            $no=0;
            foreach($rows as $row):?>
            <tr>
                <td class="danger"><?=$row->kode_penyakit ?></td>
                <td class="info"><?=$row->nama_penyakit?></td>
                <td class="success" style="width: 130px;">
                    <a class="btn btn-xs btn-warning" href="?m=penyakit_ubah&ID=<?=$row->kode_penyakit?>"><i class="fa fa-edit"aria-hidden="true"></i></a> 
                    &nbsp;
                    <a class="btn btn-xs btn-danger" href="aksi.php?act=penyakit_hapus&ID=<?=$row->kode_penyakit?>" onclick="return confirm('Hapus data?')"><i class="fa fa-trash-alt" aria-hidden="true"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>