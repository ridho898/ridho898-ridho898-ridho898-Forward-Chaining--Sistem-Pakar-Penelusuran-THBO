
<?php
include_once("koneksi.php");

$id_user = $_GET['id_user'];

$query = "SELECT * FROM userkonsul WHERE id_user='".$id_user."'";
$sql = mysqli_query($mysqli, $query);
$data = mysqli_fetch_array($sql);

$query2 = "DELETE FROM userkonsul WHERE id_user='".$id_user."'";
$sql2 = mysqli_query($mysqli, $query2);

if($sql2){
	?>
	       <script type="text/javascript">
                alert("data berhasil dihapus");
                window.location.href = 'index.php?m=konsultasi';
            </script>
            <?php
		header("location: index.php?m=konsultasi");
		exit();
}else{
	echo "Data gagal dihapus. <a href='index.php?m=konsultasi'>Kembali</a>";
}
ob_end_flush();
?>
