<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jk = $_POST['jk'];
$nisn = $_POST['nisn'];

$sql = "UPDATE siswa SET nama='$nama', kelas='$kelas', jenis_kelamin='$jk', nisn='$nisn' WHERE id='$id' ";

$query = mysqli_query($conn, $sql);

if($query){
    echo "
    <script>
        alert('Berhasil update data siswa');
        document.location.href='index.php';
    </script>
    ";

}else{
echo "
    <script>
        alert('Gagal update data siswa');
        document.location.href='index.php';
    </script>
";
}






?>