<?php
// Membuat Kalkulator sederhana

    $angka1 = @$_POST['nilai1'];
    $angka2 = @$_POST['nilai2'];
    $hasil = @$_POST['bhasil'];

    // uji jika tombol tambah diklik
    if(isset($_POST['ttambah']))
    {
        $hasil= $angka1 + $angka2;
    }
    if(isset($_POST['tkurang']))
    {
        $hasil= $angka1 - $angka2;
    }
    if(isset($_POST['tbagi']))
    {
        $hasil= $angka1 / $angka2;
    }
    if(isset($_POST['tkali']))
    {
        $hasil= $angka1 * $angka2;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kalkulator Sederhana </title>
</head>
<body>
    <form method="post">
        <table align="center" border="0">
            <tr>
                <td colspan="3" bgcolor="cream"> Kalkulator Sederhana </td>
            </tr>
            <tr>
                <td colspan="3"> <hr> </td>
            </tr>
            <tr>
                <td > Angka 1 </td>
                <td > : </td>
                <td > 
                    <input type="text" name="nilai1" value="<?=$angka1?>" placeholder="0">
                </td>
            </tr>
            <tr>
                <td > Angka 2 </td>
                <td > : </td>
                <td > 
                    <input type="text" name="nilai2" value="<?=$angka2?>" placeholder="0">
                </td>
            </tr>
            <tr>
                <td >  </td>
                <td >  </td>
                <td > 
                    <input type="submit" name="ttambah" value="+">
                    <input type="submit" name="tkurang" value="-">
                    <input type="submit" name="tbagi" value="/">
                    <input type="submit" name="tkali" value="*">
                </td>
            </tr>
            <tr>
                <td > Hasil </td>
                <td > : </td>
                <td > 
                    <input type="text" name="bhasil" value="<?=$hasil?>">
                </td>
            </tr>
            <tr>
                <td colspan="3"> <hr> </td>
            </tr>
        </table>
    </form>
</body>
</html>