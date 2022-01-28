<?php
        include_once('connection.php');

        if (isset($_GET['id_pegawai'])) {
            $sql_cek = "SELECT * FROM pegawai WHERE id_pegawai='".$_GET['id_pegawai']."'";
            $query_cek = mysqli_query($conn, $sql_cek);
            $data = mysqli_fetch_array($query_cek);
        }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    
</head>
<body>
    <Label> Bertanda * Wajib Diisi</label>
    <form action="" method="post" enctype="multipart/form-data">
        <table style="width:50%">
            <tr>
                <th>ID*</th>
                <td><input type="text" id="id" name="id" value="<?php echo $data['id_pegawai']; ?>" required></input></td>
            </tr>
            <tr>
                <th>Nama*</th>
                <td><input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required></input></td>
            </tr>
            <tr>
                <th>Email*</th>
                <td><input type="email" id="email" name="email" value="<?php echo $data['email'] ?>" required></input></td>
            </tr>
            <tr>
                <th>No HP*</th>
                <td><input type="number" id="no_hp" name="no_hp" value="<?php echo $data['no_hp'] ?>" required></input></td>
            </tr>
            <tr>
                <th>Alamat*</th>
                <td><input type="text" id="alamat" name="alamat" value="<?php echo $data['alamt'] ?>" required></input></td>
            </tr>
            <tr>
                <th></th>
            </tr>
            <tr>
                <th><button type="submit" name="simpan">Ubah Data</button></th>
                <td><a onclick="document.location='index.php'">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>

<?php
    include_once('connection.php');
    
    if (isset ($_POST['simpan'])) {
        
        $sql_ubah = "UPDATE pegawai SET
            nama ='".$_POST['nama']."',
            email ='".$_POST['email']."',
            no_hp ='".$_POST['no_hp']."',
            alamt ='".$_POST['alamat']."'
            WHERE id_pegawai='".$_POST['id']."'";
            
        $query_ubah = mysqli_query($conn, $sql_ubah);
        
        if ($query_ubah) {
            header("location:index.php");
          }else{
              
          }
    }
?>


</html>