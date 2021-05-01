<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hadir</title>
    <link rel="stylesheet" href="formhadir.css">
</head>
<body>
    <h1>DATA HADIR MAHASISWA</h1>
    <section class="hadir">
    <form action="hadir.php" method="POST">
        <table>
            <tr>
                <td class="usp">NAMA</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td class="usp">NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td class="usp">KELAS</td>
                  <td><select name="inputankelas">
                    <option value="a">A</option>
                      <option value="b">B</option>
                        <option value="c">C</option>
                    </select> 
                </td>
           </tr>
        <tr>
        <td class="usp">MATAKULIAH</td>
            <td><input class="form-check-input" type="checkbox" id="gridCheck1" value="Praktikum APSIObjek" name="inputmatkul1">
                <label class="usp" for="gridCheck1">
                Praktikum APSIObjek
                </label><Br>
                    <input class="form-check-input" type="checkbox" id="gridCheck2" value="APSIObjek" name="inputmatkul2">
                        <label class="usp" for="gridCheck2">
                        APSIObjek</label><br>
                    </td>
                </tr>
        </table>
        <br>
          <input class="btn" type="submit" value="Submit" name="submit">
    </form>
    </section>
</body>
</html>