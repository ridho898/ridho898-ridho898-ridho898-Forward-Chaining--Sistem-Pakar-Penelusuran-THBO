<?php 
function TanggalIndonesia($date) {
    $date = date('Y-m-d',strtotime($date));
    if($date == '0000-00-00')
        return 'Tanggal Kosong';
 
    $tgl = substr($date, 8, 2);
    $bln = substr($date, 5, 2);
    $thn = substr($date, 0, 4);
 
    switch ($bln) {
        case 1 : {
                $bln = 'Januari';
            }break;
        case 2 : {
                $bln = 'Februari';
            }break;
        case 3 : {
                $bln = 'Maret';
            }break;
        case 4 : {
                $bln = 'April';
            }break;
        case 5 : {
                $bln = 'Mei';
            }break;
        case 6 : {
                $bln = "Juni";
            }break;
        case 7 : {
                $bln = 'Juli';
            }break;
        case 8 : {
                $bln = 'Agustus';
            }break;
        case 9 : {
                $bln = 'September';
            }break;
        case 10 : {
                $bln = 'Oktober';
            }break;
        case 11 : {
                $bln = 'November';
            }break;
        case 12 : {
                $bln = 'Desember';
            }break;
        default: {
                $bln = 'UnKnown';
            }break;
    }
 
 
    $tanggalIndonesia = "".$tgl . " " . $bln . " " . $thn;
    return $tanggalIndonesia;
}
 ?>

 <?php
include_once("functions.php");


?>
<body >

<br>
<br><br>
<div class="page-header">
    <h1 ><?php echo $lang_menu_isikonsul;?></h1>
</div>

 <div class="card mb-3">
          <div class="card-header">
           
            </div>
          <div class="card-body">
          <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
<form action="user.php" method="post" enctype="multipart/form-data">

  <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0"> <tr>
                  
                <td><?php echo $lang_menu_name;?></td><td>:</td><td>
                <input required class="form-control form-control-user"  type="text"
                 pattern="[a-zA-Z ]+" oninvalid="this.setCustomValidity('Input hanya boleh huruf a-z !!')" placeholder="<?php echo $lang_menu_nama;?> . . ." autofocus required name="nama"  />  </td>
                    </tr>

                    <tr>
  
 
                <td><?php echo $lang_menu_nope;?></td><td>:</td><td>
                <input   required class="form-control form-control-user" type="number" name="nohp" placeholder="<?php echo $lang_menu_nope;?> . . ." autocomplete="off" />  </td>
                    </tr>

                    <tr>


  
                 <td><?php echo $lang_menu_jeniskelamin;?></td><td>:</td><td>
                  <input required type="radio" name="jeniskelamin" value="lakilaki">&nbsp;&nbsp;<?php echo $lang_menu_male;?>   
                  &nbsp;&nbsp;&nbsp;
                  <input required type="radio" name="jeniskelamin" value="perempuan">&nbsp;&nbsp;<?php echo $lang_menu_female;?>
                    
                    </td>
                    </tr>

                    <tr>
 

   
                <td><?php echo $lang_menu_alamat;?></td><td>:</td><td>
                <input  class="form-control form-control-user" type="text"                 pattern="[a-zA-Z ]+" oninvalid="this.setCustomValidity('Input hanya boleh huruf a-z !!')" name="alamat" required placeholder="<?php echo $lang_menu_alamat;?> . . ." autofocus required /> </td>
                    </tr>
              
        <tr>


 
                <td><?php echo $lang_menu_tgl;?></td><td>:</td><td>
                <input type="date"  class="form-control form-control-user" name="tanggalkonsultasi" />
    </td>
                    </tr>


              
                  </div>
</tr>


 
                </thead>
                  <tfoot>
                   
                  </tbody>

                </table>
               
                 <button  class="btn btn-danger btn-md" type="submit" name="submit" value="Simpan"><?php echo $lang_menu_buttonkonsul;?></button>
                </form>
   
  <br>
    <br>
<br><br>

</div>

</div>
</body>