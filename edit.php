<?php
include("connection.php");
$id = $_GET["id"];
$query = mysqli_query($connect, "SELECT * FROM employees WHERE id='$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Karyawan</title>
</head>

<body>
    <div class="container">
        <form action="update.php" method="POST">
            <p><input type="hidden" name="id" value="<?php echo $result[0]['id']; ?>"></p>
            <p>Nama: <br>
                <input type="text" name="name" value="<?php echo $result[0]['name']; ?>" placeholder="Masukkan Nama"
                    autofocus>
            </p>
            <p>Alamat: <br>
                <textarea name="address" cols="30" rows="10"
                    placeholder="Masukkan Alamat"><?php echo $result[0]['address']; ?></textarea>
            </p>
            <p>Umur: <br><input type="text" name="age" value="<?php echo $result[0]['age']; ?>" placeholder="Umur"></p>
            <select name="gender">
                <option value="Pria" <?php echo ($result[0]["gender"] == "Pria") ? "selected" : "" ?>>Pria</option>
                <option value="Wanita" <?php echo ($result[0]["gender"] == "Wanita") ? "selected" : "" ?>>Wanita
                </option>
            </select>
            <br><br>
            <input type="submit" value="Update Data">
        </form>
    </div>
</body>

</html>