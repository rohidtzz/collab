<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    <title>Daftar Sisw</title>
</head>
<body>

<div class="container">

<h1>hi selamat datang</h1>

<p>tambahkan <a href="create.php">siswa+</a></p>
    


<table class="table tbl-bordered">

<tr>
    <th>no</th>
    <th>Nama Lengkap</th>
    <th>Nisn</th>
    <th>Kelas</th>
    <th>Jenis Kelamin</th>
    <th>opsi</th>
</tr>

<?php
    include 'config.php';

$sql = "SELECT * FROM siswa";
$query = mysqli_query($conn, $sql);
$no = 1;

while($data = mysqli_fetch_array($query)){
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['nisn']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td>
                <a class="btn btn-primary" href="update.php?id=<?php echo $data['id']; ?>">edit</a>
                <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>">hapus</a>
            <td>
        </tr>
        
<?php
    }
    ?>
</table>

</div>

</body>
</html>