<br><br><br>
<div class="page-header">
    <h1><?php echo $lang_menu_pest;?></h1>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <form class="form-inline">
            <input type="hidden" name="m" value="tumbuhan" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="<?php echo $lang_menu_pencarian;?>" name="q" value="<?=$_GET['q']?>" />
            </div>&nbsp;&nbsp;
            <div class="form-group">
                <button class="btn btn-success"><i class="fa fa-refresh" aria-hidden="true"></i> <?php echo $lang_menu_refresh;?></button>
            </div>&nbsp;&nbsp;
            <div class="form-group">
                <a class="btn btn-primary" href="?m=tumbuhan_tambah"><i class="fa fa-plus-circle" aria-hidden="true"></i> <?php echo $lang_menu_tambah;?></a>
            </div>
        </form>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            	<tr style="background: #B7E2AB; border-radius: 10px;" class="container-fluid">
                <th>No</th>
                <th><?php echo $lang_menu_kode;?></th>
                <th><?php echo $lang_menu_tumbuhan;?></th>
                <th><?php echo $lang_menu_khasiat;?></th>
                <th><?php echo $lang_menu_carapenggunaan;?></th>
                <th><?php echo $lang_menu_aksi;?></th>
            </tr></thead>
            <?php
            $q = esc_field($_GET['q']);
            $rows = $db->get_results("SELECT * FROM tumbuhan 
                WHERE kode_tumbuhan LIKE '%$q%' OR nama_tumbuhan LIKE '%$q%' OR khasiat LIKE '%$q%' OR solusi LIKE '%$q%' ORDER BY kode_tumbuhan");
            $no=0;            
            foreach($rows as $row):?>
            <tr>
                <td class="danger"><?=++$no ?></td>
                <td class="info"><?=$row->kode_tumbuhan?></td>
                <td class="warning"><?=$row->nama_tumbuhan?></td>
                <td class="active" ><?=$row->khasiat?></td>
                <td class="active"><?=$row->solusi?></td>
                <td class="success" style="width: 130px;">
                    <a class="btn btn-xs btn-warning" href="?m=tumbuhan_ubah&ID=<?=$row->kode_tumbuhan?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    &nbsp;
                    <a class="btn btn-xs btn-danger" href="aksi.php?act=tumbuhan_hapus&ID=<?=$row->kode_tumbuhan?>" onclick="return confirm('Hapus data?')"><i class="fa fa-trash-alt" aria-hidden="true"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>