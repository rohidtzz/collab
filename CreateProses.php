<?php

include 'config.php';

$nama = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$jk = $_POST['jenis_kelamin'];
$nisn = $_POST['nisn'];

$sql = "INSERT INTO siswa (nama,kelas,jenis_kelamin,nisn) 
                VALUES ('$nama','$kelas','$jk','$nisn')";

$query = mysqli_query($conn,$sql);

if($query){
    echo "
        <script>
            alert('Berhasil menambah siswa');
            document.location.href='index.php';
        </script>
        ";
    
}else{
    echo "
        <script>
            alert('Gagal menambah siswa');
            document.location.href='index.php';
        </script>
    ";
}




?>