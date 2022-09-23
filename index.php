<?php
include("connection.php");
$query = mysqli_query($connect, "SELECT * FROM employees");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
/* 
    Mysqli_fetch_all digunakan untuk mengambil data atau semua baris hasil dan mengembalikan 
    set hasil sebagai array asosiatif, array numerik, atau keduanya. MYSQLI_ASSOC digunakan agar key array dapat diakses dengan nama
*/
// print_r($results);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Data Karyawan</title>
</head>

<body>
    <div class="container">
        <a href="add.php">
            <p>Tambah data</p>
        </a>
        <!-- Search -->
        <form action="search.php" method="GET" id="search">
            <input type="text" name="keyword" placeholder="Search...">
            <input type="submit" value="Search">
        </form>
        <table>
            <caption>Tabel Data Karyawan</caption>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th colspan="2">Option</th>
            </tr>
            <?php $no = 1 ?>
            <?php foreach ($results as $result) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $result["name"]; ?></td>
                <td><?php echo $result["address"]; ?></td>
                <td><?php echo $result["age"]; ?></td>
                <td><?php echo $result["gender"]; ?></td>
                <td><a href=" edit.php?id=<?php echo $result["id"]; ?>" id="edit">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $result["id"]; ?>" id="delete"
                        onclick="return confirm('Anda yakin ingin menghapus data ini?');">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>