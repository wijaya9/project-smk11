<?php
    include 'model.php';
    $id = $_GET['id'];
    $model = new Model();
    $data = $model->find($id);
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Edit Data Siswa</title>
    </head>
<body>
    <h1>Edit Data Siswa</h1>
    
    <a href="index.php">Kembali</a>
    <br><br>
    <?php if(!empty($data))
    {
    ?>
    <form action="process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data->id ?>">
        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama; ?>">
        <br>
        <label>NIS</label>
        <br>
        <input type="text" name="nis" value="<?php echo $data->nis ?>">
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br>
        <label>Jenis Kelamin</label>
        <br>
        <select name="jk" id="jk">
            <option value=1 <?php echo ($data->jk==1)? 'selected':''; ?>>Laki-laki</option>
            <option value=2 <?php echo ($data->jk==2)? 'selected':''; ?>>Perempuan</option>            
        </select>
        <br>
        <label>Rombel</label>
        <br>
        <input type="text" name="rombel" value="<?php echo $data->rombel ?>">
        <br><br>
        <button type="submit" name="submit_edit">Submit</button>
    </form>
    <?php }
    else{
        echo "Data Siswa tidak ada";
    } ?>
</body>
</html>