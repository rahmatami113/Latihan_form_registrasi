<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Data Berhasil diinput</title>
    <link rel="stylesheet" href="formhadir.css">
</head>
<body>
    <h1>BERHASIL DIINPUT!!</h1>
    <hr >
    Tanggal: <?php echo date("d M Y"); ?>
    <br>
    Nama: <?php echo $_POST["username"]; ?>
    <br>
    NIM: <?php echo $_POST["nim"]; ?>
    <br>
    KELAS: <?php echo $_POST["inputankelas"]; ?>
    <br>
    MATAKULIAH: <?php
        if(isset($_POST['inputmatkul1'])) {
            echo "".$_POST['inputmatkul1']."<br>";
            }
        if(isset($_POST['inputmatkul2'])) {
            echo "".$_POST['inputmatkul2']."<br>";
            }
    ?>
    <br>
</body>
</html>