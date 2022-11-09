<?php
include("koneksi.php");

if(isset($_POST['edit'])){
    $kode =$_POST['id'];
    $NIK =$_POST['NIK'];
    $Nama =$_POST['Nama'];
    $Agama =$_POST['Agama'];

    $sql ="UPDATE tb_warga SET NIK='$NIK', Nama='$Nama', Agama='$Agama' WHERE id=$kode";
    $query= mysqli_query($koneksi,$sql);
    if($query){
        header('Location:penduduk.php');
    }else{
        die ("gagal mengedit");
    }}
    else{
        die("akses dilarang");
    }
    ?>