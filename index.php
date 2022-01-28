<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asdadssadsd</title>
    <link rel="stylesheet" href="styles.css">
    <?php
        include_once('connection.php');
    ?>
</head>
<body>
    <button onclick="document.location='tambah_data.php'">Tambah Data</button>
    <br><br>
    <table style="width:100%">
        <tr>
            <th>ID Pegawai</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
            <th>alamat</th>
            <th>Waktu Pendaftaran</th>
            <th>Ubah</th>
            <th>Hapus</th>
        </tr>
        <?php
            $sql_view = $conn->query("SELECT * FROM pegawai");
            while ($data = $sql_view->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $data['id_pegawai'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['no_hp'] ?></td>
                    <td><?php echo $data['alamt'] ?></td>
                    <td><?php echo $data['date'] ?></td>
                    <td><button onclick="document.location='ubah_data.php?id_pegawai=<?php echo $data['id_pegawai']; ?>'">V</button></td>
                    <td><button onclick="document.location='hapus_data.php?id_pegawai=<?php echo $data['id_pegawai']; ?>'">X</button></td>
                </tr>
    <?php   }
        ?>
        
    </table>
</body>
</html>

