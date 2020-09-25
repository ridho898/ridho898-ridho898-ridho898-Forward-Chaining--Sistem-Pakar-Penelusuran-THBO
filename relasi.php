<br><br><br>
<div class="page-header">
    <h1><?php echo $lang_menu_knowledgebased;?></h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <form class="form-inline">
            <input type="hidden" name="m" value="relasi" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="<?php echo $lang_menu_pencarian;?>" name="q" value="<?=$_GET['q']?>" />
            </div>&nbsp;&nbsp;
            <div class="form-group">
                <button class="btn btn-success"><i class="fa fa-refresh" aria-hidden="true"></i> <?php echo $lang_menu_refresh;?></button>
            </div>&nbsp;&nbsp;
            <div class="form-group">
                <a class="btn btn-primary" href="?m=relasi_tambah"><i class="fa fa-plus-circle" aria-hidden="true"></i> <?php echo $lang_menu_tambah;?></a>
            </div>
        </form>
    </div><br>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead><tr class="nw">
                <th>No</th>
                <th><?php echo $lang_menu_tumbuhan;?></th>
                <th><?php echo $lang_menu_penyakit;?></th>
                
<th><?php echo $lang_menu_aksi;?></th>
            </tr></thead>
            <?php
            $q = esc_field($_GET['q']);
            $rows = $db->get_results("SELECT r.ID, r.kode_penyakit, d.kode_tumbuhan,  g.nama_penyakit, d.nama_tumbuhan 
                FROM relasi r INNER JOIN tumbuhan d ON d.`kode_tumbuhan`=r.`kode_tumbuhan` INNER JOIN penyakit g ON g.`kode_penyakit`=r.`kode_penyakit`
                WHERE r.kode_penyakit LIKE '%$q%'
                    OR r.kode_tumbuhan LIKE '%$q%'
                    OR g.nama_penyakit LIKE '%$q%'
                    OR d.nama_tumbuhan LIKE '%$q%' 
                ORDER BY r.kode_tumbuhan, r.kode_penyakit");
            $no=0;
            
            foreach($rows as $row):?>
            <tr>
                <td class="danger"><?=++$no ?></td>
                <td class="info">[<?=$row->kode_tumbuhan . '] ' . $row->nama_tumbuhan?></td>
                <td class="warning">[<?=$row->kode_penyakit . '] ' . $row->nama_penyakit?></td>
              
                <td class="success">
                    <a class="btn btn-xs btn-warning" href="?m=relasi_ubah&ID=<?=$row->ID?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a class="btn btn-xs btn-danger" href="aksi.php?act=relasi_hapus&ID=<?=$row->ID?>" onclick="return confirm('Hapus data?')"><i class="fa fa-trash-alt" aria-hidden="true"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</div>