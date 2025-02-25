<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA TUGAS SISWA</title>
    <style>
        <style>
    body{
        font-family: Arial , sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .row{
        display: flex;
        justify-content: center;
        padding: 50px;
    }

    .col-md-6{
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        width: 100%px;
        max-width: 600px;
    }

    .text-center{
        text-align: center;
    }

    
    .form-label{
        font-weight: bold;
    }

    .form-control{
       width: 100%;
       padding:10px;
       margin:8px 0;
       border-radius: 5px;
       border: 1px solid#ccc;
    }

    .btn{
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary{
        background-color: #007bff;
        color:white;

    }

    .btn-info{
        background-color: #17a2b8;
        color: white;

    }


    .btn:hover{
        opacity: 0.8;
    }

    .mb-3{
        margin-bottom: 20px;
    }
    </style>
</head>
<body>
    <section class="row">
        <div class="col-md-6">
        <h1 class="text-center"> FORM TAMBAH TUGAS</h1>
        <form method="POST">
            <div class= "mb-3">
    <label form="nama_tugas" class="form-label">NAMA TUGAS</label>
    <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" placeholder="Nama">
</div>

<div class="mb-3">
    <label for="prioritas" class="form-label">prioritas</label>
    <select name="prioritas" class="form-control" required>
        <option value="">pilih prioritas</option>
        <option value="sangat-penting">sangat penting</option>
        <option value="penting">penting</option>
        <option value="tidak-penting">tidak penting</option>
</select>
</div>

<div class="mb-3">
    <label for="waktu" class="form-label">waktu</label>
    <input type="date" class="form-control" id="waktu" name="waktu" placeholder="waktu">
</div>
<input name="tambah" type="submit" class="btn btn-prmary" value="TAMBAH">
<a href = "index.php" type="button" class="btn btn-info">kembali</a>
</form>
</div>
</section>
<?php
if (isset($_POST['tambah'])){
    $nama_tugas= $_POST['nama_tugas'];
    $prioritas= $_POST['prioritas'];
    $waktu= $_POST['waktu'];

    $query= "INSERT INTO todolist(nama_tugas, prioritas,waktu) VALUES('".$nama_tugas."','".$prioritas."','".$waktu."')";

    $result = mysqli_query($koneksi,$query);
    if ($result){
        header("Location: index.php");
    }

}else{
    echo " <script>alert('Data gagal di tambah');<script>";
}



?>
    
</body>
</html>