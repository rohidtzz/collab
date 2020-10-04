<?php

include  'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id='$id'";

$query = mysqli_query($conn,$sql);

if($query){
    echo "
    <script>
        alert('Berhasil menghapus data siswa');
        document.location.href='index.php';
    </script>
    ";

}else{
echo "
    <script>
        alert('Gagal menghapus data siswa');
        document.location.href='index.php';
    </script>
";
}

?>