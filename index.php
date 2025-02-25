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
        max-width: 900px;
    }

    .text-center{
        text-align: center;
    }

    teble{
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    th, td{
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th{
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .btn{
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        cursor: pointer;
    }

    .btn-primary{
        background-color: #007bff;

    }

    .btn-succes{
        background-color: #28a745;

    }

    .btn-denger{
        background-color: #dc3545;

    }

    .btn:hover{
        opacity: 0.8;
    }

    .mb-2{
        margin-bottom: 10px;
    }
    </style>
 </head>
 <body>
    <section class="row">
        <div class="col-md-6">
            <h1 class="text-center">DATA TUGAS</h1>
            <a href="tambah.php" class= "btn btn-primary mb-2">TAMBAH TUGAS</a>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">NO</thr>
                            <th scope="col">NAMA TUGAS</thr>
                            <th scope="col">PRIORITAS</thr>
                            <th scope="col">WAKU PENGERJAAN</thr>
                            <th scope="col">UPDATE/DELETE</thr>
                            
                        
                        </thr>
</tr>
</thead>

    <tbody>
        <?php
        $no = 1;
        $query= "SELECT * FROM todolist";
        $result= mysqli_query($koneksi,$query);

        while ($data = mysqli_fetch_assoc($result)){
            echo"
            <tr>
            <th scope='row'>".$no++. "</th>
            <td>" .$data["nama_tugas"] . "</td>
            <td>" .$data["prioritas"] . "</td>
            <td>" .$data["waktu"] . "</td>

            <td>
        <a href='update.php?id=".$data["id"]."'class='btn btn-succes'>update</a>
        <a href='delete.php?id=".$data["id"]."'class='btn btn-denger' onclick='return confirm(\"yakin hapus?\")'>Hapus</a>
        </td>
        </tr>
        ";

        }
        ?>
        </tbody>
    </table>
    </div>
    </section>
 </body>
 </html>