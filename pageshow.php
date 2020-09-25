<br><br><br><br>
<div class="page-header">
    <br>
    <div>
        <div class="container">
            <?php
            $q = esc_field($_GET['q']);

            if( $q !=''){            

            $rows = $db->get_results("SELECT * FROM tumbuhan 
                WHERE
                nama_tumbuhan LIKE '$q %'
                OR nama_tumbuhan LIKE '% $q' 
                OR nama_tumbuhan = '$q'

                OR khasiat LIKE '$q %'
                OR khasiat LIKE '% $q'
                OR khasiat LIKE '% $q %' 
                OR khasiat = '$q' 

                ORDER BY kode_tumbuhan");
            $no=0; 
            
            if(empty($rows))
                echo "Data Tidak Di Temukan";
            foreach($rows as $row):?>                
            <thead>
              <div class="row shadow-lg p-2 mb-5 bg-white " style="width: 900px; max-width: 100%;">
                <div class="row text-white" style="width: 900px; max-width: 100%; float: none;">
                  <div class="p-2 card-header" style="height: 50px; width: 900px; max-width: 100%; background: #16D28B;"><?=$row->nama_tumbuhan?></div>
                  <div class="card-body text-dark" >
                     <b>Khasiat</b> :<br>
                     <?=$row->khasiat?><br><br>
                     <b>Cara Penggunaan</b> :<br>
                     <?=$row->solusi?>  
                  </div>
                </div>
              </div>
            </thead>
            <?php endforeach;} 

            else 
                echo "Please Insert Teks"; ?>            
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>