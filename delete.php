<?php 
include("connection.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
$delete = mysqli_query($connect, "DELETE FROM employees WHERE id='$id'");
if ($delete == true) {
    header("location: index.php");
} else {
    echo "Data karyawan gagal dihapus";
}

?>