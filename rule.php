<br><br><br>

<div class="page-header">
    <h1><?php echo $lang_menu_rules;?></h1>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th><?php echo $lang_menu_rules2;?></th>                
        </tr>
    </thead>
    <?php
    $rules = get_relasi(array());
    //echo '<pre>' . print_r($DIAGNOSA, 1) . '</pre>';   
    $no = 1;     
    foreach($rules as $kode_tumbuhan => $val):
        $rule = array();
        foreach($val as $kode_penyakit => $v){
            $rule[] = '<span class="text-danger">' . $PENYAKIT[$kode_penyakit] . '</span>';    
        }
    ?>
    <tr>
        <td><?=$no++?></td>
        <td><strong>IF</strong> <?=implode('<br />&nbsp; &nbsp; &nbsp;<strong>AND</strong> ', $rule)?> <br /><strong>THEN</strong> <span class="text-primary"><?=$TUMBUHAN[$kode_tumbuhan]->nama_tumbuhan?></span></td>
    </tr>
    <?php endforeach;?>
    </table>
</div>
<br>
<br>
<br>
