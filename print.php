<?php
    include 'model.php';
    $model = new Model();
    $index = 1;
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Cetak Data</title>
        <style>
            h1 {
            text-align: center;
            }
            table, td, th {
            border: 1px solid #ddd;
            text-align: left;
            }
            table {
            border-collapse: collapse;
            width: 100%;
            }
            th, td {
            padding: 15px;
            }
        </style>
    </head>
<body>
    <h1>Laporan Data Siswa SMK N 11 Malang</h1>
    
    <table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Rombel</th>
        </tr>
    </thead>
   
    <tbody>
    <?php
        $result = $model->ambil_data();
        if ( !empty($result) ) {
        foreach ($result as $data): ?>
    
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
    </tr>
    
    <?php endforeach;
    } else{ ?>
    
    <tr>
    <td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
    </tr>
    
    <?php } ?>
    </tbody>
    </table>
    
    <script>
    window.print();
    </script>

</body>
</html>