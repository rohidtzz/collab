<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id='$id'";

$query = mysqli_query($conn, $sql);

$data = mysqli_fetch_array($query);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Update data siswa</title>
</head>
<body>
    
<div class="container">

<form method="post" action="updateproses.php"> 

    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" class="form-control" id="id">
    </div>
    <div class="form-group">
        <label for="nisn">Nisn</label>
        <input type="number" name="nisn" value="<?php echo $data['nisn']; ?>" class="form-control" id="nisn">
    </div>

    <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" id="nama_lengkap" >
    </div>

    <div class="form-group">
        <label for="Kelas">Kelas</label>
        <input type="number" name="kelas" value="<?php echo $data['kelas']; ?>" class="form-control" id="Kelas" >
    </div>
    
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jk" id="jenis_kelamin" value="<?php $data['jenis_kelamin']; ?>" class="form-control">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="perempuan">Perempuan<option>
        </select>
    </div>




<button type="submit" class="btn btn-info">Tambah</button>

</form>
</div>

</body>
</html>