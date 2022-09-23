<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tambah Karyawan</title>
</head>

<body>
    <div class="container">
        <form action="insert.php" method="POST">
            <p>Nama: <br><input type="text" name="name" placeholder="Nama Lengkap" autofocus required></p>
            <p>Alamat: <br>
                <textarea name="address" cols="30" rows="10" placeholder="Alamat" required></textarea>
            </p>
            <p>Umur: <br><input type="text" name="age" placeholder="Umur" required></p>
            <select name="gender" required>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <br><br>
            <input type="submit" value="Tambah Data">
        </form>
    </div>
</body>

</html>