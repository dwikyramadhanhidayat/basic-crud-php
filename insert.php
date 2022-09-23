<?php
include("connection.php"); 
if (isset($_POST)) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
}
$insert = mysqli_query($connect, "INSERT INTO employees SET name='$name', address='$address', age='$age', gender='$gender'");
if ($insert == true) {
    header("location: index.php");
} else {
    echo "Data karyawan gagal ditambahkan";
}
?>