<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:penduduk.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_warga where id=$kode";
$query = mysqli_query($koneksi,$sql);
$db_warga=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1>From Edit Warga</h1>
    <form action="proses-edit-warga.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $db_warga['id']?>" />
            <p>
                <label name="NIK">NIK:</label>
                <input type="number" name="NIK" value= "<?php echo $db_warga['NIK']?>" />
</p>
<p>
                <label name="Nama">Nama:</label>
                <input type="text" name="Nama" value="<?php echo $db_warga['Nama']?>" />
</p>
<p>
                <label for="Agama">Agama :</label>
                <select name="Agama" value="<?php echo $db_warga['Agama']?>" >
    <option value="islam">Islam</option>
    <option value="katholik">Katholik</option>
    <option value="budha">Budha</option>
    <option value="hindu">Hindu</option>
    <option value="kristen">Kristen</option>
    <option value="konghucu">Konghucu</option>
</p>
<p>
<input type="submit" value="edit" name="edit"/>
</p>
</fieldset>
</form>
</body>
</html>
                