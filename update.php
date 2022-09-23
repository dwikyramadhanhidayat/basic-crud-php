<?php 
include("connection.php");
if (isset($_POST)) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
}
$update = mysqli_query($connect, "UPDATE employees SET name='$name', address='$address', age='$age', gender='$gender' WHERE id='$id'");
if ($update == true) {
    header("location: index.php");
} else {
    echo "Data karyawan gagal diupdate";
}

?>