<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pendataan Warga Ds.Sukamududur</title>

</head>
<body>
    <h1>Aplikasi Pendataan Warga Ds.Sukamududur</h1>
    <h1> Warga Ds.Sukamududur</h1>
    <table border="1">
        <tr>
        <th>id</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Agama</th>
        </tr>
<?php
include("koneksi.php");
$sql='SELECT * FROM tb_warga';
$query=mysqli_query($koneksi,$sql);
while($db_warga=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$db_warga['id']."</td>";
    echo"<td>".$db_warga['NIK']."</td>";
    echo"<td>".$db_warga['Nama']."</td>";
    echo"<td>".$db_warga['Agama']."</td>";
    echo"<td>";
    echo "<a href='edit-warga.php?id=".$db_warga['id']."'>Edit</a> |";
    echo "<a href='hapus-warga.php?id=".$db_warga['id']."'>Hapus</a> |";
    
    echo"</td>";
    echo"</tr>";
}
?>
</table>
</body>
</html>