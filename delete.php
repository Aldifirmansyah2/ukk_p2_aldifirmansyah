<?php 
 include "koneksi.php";

 if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query="DELETE FROM todolist WHERE id=$id";

    $result=mysqli_query($koneksi, $query);


    if ($result){
        header("location: index.php");
        exit();
    }else{
        echo"<script>alert('Data gagal dihapus!');</script>";
    }
    }else{
        echo"<script>alert('ID gagal ditemuan?');</script>";

    }
 
?>