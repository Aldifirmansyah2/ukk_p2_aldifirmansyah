<?php
include "koneksi.php";


$id = $_GET['id'];
$tugas = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM todolist WHERE id='$id'"));

if (isset($_POST['update'])){

$nama_tugas = mysqli_real_escape_string($koneksi, $_POST['nama_tugas']);
$prioritas = mysqli_real_escape_string($koneksi, $_POST['prioritas']);
$waktu = mysqli_real_escape_string($koneksi, $_POST['waktu']);

$query = "UPDATE todolist SET nama_tugas='$nama_tugas' , prioritas='$prioritas', waktu='$waktu' WHERE id='$id'";

if (mysqli_query($koneksi, $query)){
    header("Location: index.php");
    exit();
}else{
    echo "<script>alert('Gagal update');</script>";

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE TUGAS</title>
    <style>
     body{font-family: Arial,sans-serif; background-color: #f4f4f4; margin:0; padding: 0;}
     .container{display: flex; justify-content: center; padding:50px;}
     .form-container{ background-color:white; padding:20px; border-radius: 8px; width:100%; max-width: 600%;  }
     .form-container h1{ text-align: center;}
     .form-control, .btn{width:100%; padding:10px; margin:8px 0; border-radius: 5px;}
     .btn-primary{ background-color: #007bff; color: white;}
     .btn-info{background-color: #17a2b8; color:white; margin-left:10px;}
     .btn:hover{opacity:0.8;}
     .form-container form{display:flex; flex-direction: column;}
     .form-container form a{text-align:center; display:block; margin-top: 10px;}
        </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Update Tugas</h1>
            <form method="POST">
      <input type="text" name="nama_tugas" value="<?=$tugas['nama_tugas'] ?>"placeholder="Nama Tugas" required>
      <select name="prioritas" required>
    <option value="sangat-penting"<?= $tugas['prioritas']=='sangat-penting' ?'selected':'' ?>>sangat penting</option>
    <option value="penting"<?= $tugas['prioritas']=='penting' ?'selected':'' ?>>penting</option>
    <option value="tidak-penting"<?= $tugas['prioritas']=='tidak-penting' ?'selected':'' ?>>tida penting</option>
</select>
<input type="date" name="waktu" value="<?= $tugas['waktu']?>"required>
<div style="display: flex; justify-content:space-between">
    <input name="update" type="submit" class= "btn btn-primary" value="update">
    <a href="index.php" class="btn btn-info">kembali</a>
</div>
</form>
</div>
</div>
</body>
</html>