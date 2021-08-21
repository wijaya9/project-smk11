<?php
    include 'model.php';
    $model = new Model();
    $index = 1;
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Data Siswa</title>
    </head>
<body>
    <div>
    <h1>Data Siswa SMK Negeri 11 Malang</h1>
    
    <a href="create.php">Tambah Data</a>
    <br><br>
    <a href="print.php" target="_blank">Cetak Data</a>
    
    <br><br>
    
    <table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Rombel</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $result = $model->ambil_data();
            if ( !empty($result) ) 
            {
                foreach ($result as $data): 
        ?>
        <tr>
            <td><?=$index++ ?></td>
            <td><?=$data->nama ?></td>
            <td><?=$data->nis ?></td>
            <td><?=$data->alamat ?></td>
            <?php
                if($data->jk==1)
                    $jk = "Laki-laki";
                else
                    $jk = "Perempuan";
            ?>
            <td><?=$jk ?></td>
            <td><?=$data->rombel ?></td>
            <td>
            <a name="edit" id="edit" href="edit.php?id=<?=$data->id ?>">Edit</a>
            <a name="hapus" id="hapus" href="process.php?id=<?=$data->id ?>">Delete</a>
            </td>
        </tr>
            <?php 
                endforeach;
            } else{ ?>
        <tr>
        <td colspan="9">Belum ada data siswa.</td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    </div>
</body>
</html>