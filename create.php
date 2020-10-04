
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Coding Colab</title>
</head>
<body>

    <div class="container">

        
<form method="post" action="createproses.php"> 

    <div class="form-group">
        <label for="nisn">Nisn</label>
        <input type="number" name="nisn" class="form-control" id="nisn">
    </div>

    <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" >
    </div>

    <div class="form-group">
        <label for="Kelas">Kelas</label>
        <input type="number" name="kelas" class="form-control" id="Kelas" >
    </div>
    
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="perempuan">Perempuan<option>
        </select>
    </div>



<button type="submit" class="btn btn-info">Tambah</button>

</form>







    </div>
        











</body>
</html><?php


?>