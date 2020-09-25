<?php
$rows = $db->get_results("SELECT * FROM penyakit WHERE kode_penyakit IN (SELECT kode_penyakit FROM konsultasi WHERE jawaban='Ya')");
if( !$rows ) :
    print_msg('Belum ada penyakit terpilih!', 'warning');
    echo '<p><a class="btn btn-primary" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-refresh"></span> Konsultasi Lagi</a></p>';
else:

?>

 <?php
              include_once("koneksi.php");
 
$result5 = mysqli_query($mysqli, "SELECT * FROM userkonsul ORDER BY id_user ASC");
?>
<br><br>
      
        <h3 class="panel-title"><?php echo $lang_menu_nama;?> :</h3>
    <div class="row">
    <div class="col-md-4"> 
<table class="table table-bordered table-hover table-striped">
   <div class="form-group">
   <tr>
   <td>
                  <select class="form-control" name="nama"><?php
                    while($data = mysqli_fetch_array($result5)) 
          {?>
<option name="nama">
<?php echo $data['nama'];?> 
 <?php echo $data['tanggalkonsultasi'];?> 

</option>


<?php } ?>
</select></td>
<td>
<?php
              include_once("koneksi.php");
 
$result6 = mysqli_query($mysqli, "SELECT * FROM userkonsul ORDER BY id_user ASC");
?>
<?php 
                    while($data = mysqli_fetch_array($result6)) {

echo "
           
            <a href='hapususer.php?id_user=".$data['id_user']."''>x</a>
    ";}
    ?>
</td></tr>
   </table>
</div>
</div>
<br><br>
<div class="panel panel-primary">
    <div class="panel-heading">        
        <h3 class="panel-title"><?php echo $lang_menu_penyakitterpilih;?></h3>
    </div>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th><?php echo $lang_menu_penyakit;?></th>
        </tr>
    </thead>
    <?php
    $no=1;
    foreach($rows as $row):?>
    <tr>
        <td><?=$no++?></td>
        <td><?=$row->nama_penyakit?></td>
    </tr>
    <?php endforeach;
    ?>
    </table>
</div>
<?php
$rows = $db->get_results("SELECT * 
    FROM relasi r INNER JOIN tumbuhan d ON d.kode_tumbuhan = r.kode_tumbuhan INNER JOIN Konsultasi k ON k.kode_penyakit = r.kode_penyakit    
    WHERE r.kode_penyakit IN (SELECT kode_penyakit FROM Konsultasi WHERE jawaban='Ya' OR jawaban='Tidak') ORDER BY r.kode_tumbuhan, r.kode_penyakit");

//Fungsi menghitung bobot
$hit=1;$num=0;$temp;
foreach($rows as $row){   
        // print_r($row->jawaban);         
    if ($temp == $row->kode_tumbuhan || ($num==0 && $hit==1)) {                        
        if($row->jawaban == 'Ya'){            
            print('MASUK');
        $num+=10;
        }
        else{            
        $num--;        
        }
    }
    else{
        if($row->jawaban == 'Ya'){                        
        $num=10;
        }else{
        $num=0;
                    }
        $hit++;
        
    }       
    $tumbuhan[$row->kode_tumbuhan][$hit] = $num;    
    $temp=$row->kode_tumbuhan;        
}

?>
<br><br>
<div class="panel panel-primary">
    <div class="panel-heading">        
        <h3 class="panel-title"><?php echo "Hasil Penelusuran"?></h3>
    </div>
    <table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th><?php echo $lang_menu_tumbuhan;?></th>
        </tr>
    </thead>


    <?php
//Fungsi mengurutkan
    $no=1;
    function ranking($array){
        $new_arr = array();
        $temp=1;
        foreach($array as $key => $value) {                         
            $new_arr[$key] = $value[$temp];            
            $temp++;
        }        
        arsort($new_arr); 

        $result = array();    
        foreach($new_arr as $key => $value){
            $result[$key] = ++$no;
        }          
        return $result;

    }        
    
    $rank = ranking($tumbuhan);    
    foreach($rank as $key => $value):?>
    <tr class="<?=($value==1) ? 'text-primary' : ''?>">
        <td><?=$no++?></td>
        <td><?=$TUMBUHAN[$key]->nama_tumbuhan?></td>
    </tr>
    <?php break; endforeach;

    reset($rank);
    $_SESSION['penyakit'] = $penyakit;
    ?>
    </table>
    <div class="panel-body">
        <table class="table table-bordered">
            <tr>
                <td><?php echo $lang_menu_tumbuhan;?></td>
                <td><?=$TUMBUHAN[key($rank)]->nama_tumbuhan?></td>
            </tr>
            <tr>
                <td>Cara penggunaan</td>
                <td><?=$TUMBUHAN[key($rank)]->solusi?></td>
            </tr>
        </table>
        
        <p>
            <a class="btn btn-primary" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-refresh"></span> <?php echo $lang_menu_tombolkonsultasi;?></a>
            <a class="btn btn-default" href="cetak.php?m=konsultasi" target="_blank"><span class="glyphicon glyphicon-print"></span> <?php echo $lang_menu_cetak;?></a>

            
        </p>       
    </div>
</div>
<?php endif;?>