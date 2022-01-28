<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    
</head>
<body>
    <Label> Bertanda * Wajib Diisi</label>
    <form action="" method="post" enctype="multipart/form-data">
        <table style="width:50%">
            <tr>
                <th>ID*</th>
                <td><input type="text" id="id" name="id" required></input></td>
            </tr>
            <tr>
                <th>Nama*</th>
                <td><input type="text" id="nama" name="nama" required></input></td>
            </tr>
            <tr>
                <th>Email*</th>
                <td><input type="email" id="email" name="email" required></input></td>
            </tr>
            <tr>
                <th>No HP*</th>
                <td><input type="number" id="no_hp" name="no_hp" required></input></td>
            </tr>
            <tr>
                <th>Alamat*</th>
                <td><input type="text" id="alamat" name="alamat" required></input></td>
            </tr>
            <tr>
                <th></th>
            </tr>
            <tr>
                <th><button type="submit" name="simpan">Tambah Data</button></th>
                <td><button onclick="document.location='index.php'">Kembali</button></td>
            </tr>
        </table>
    </form>
</body>

<?php
    include_once('connection.php');
    
    if (isset ($_POST['simpan'])) {
        
        $sql_simpan = "INSERT INTO pegawai (id_pegawai,nama,email,no_hp,alamt) VALUES (
            '".$_POST['id']."',
            '".$_POST['nama']."',
            '".$_POST['email']."',
            '".$_POST['no_hp']."',
            '".$_POST['alamat']."'
        )";
            
        $query_simpan = mysqli_query($conn, $sql_simpan);
        echo "asdsadas";
        
        if ($query_simpan) {
            echo "<script>
            Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
            }).then((result) => {if (result.value){
                window.location = 'index.php';
                }
            })</script>";
            }else{
            echo "<script>
            Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
            }).then((result) => {if (result.value){
                window.location = 'tambah_data';
                }
            })</script>";
          }
    }
?>


</html>