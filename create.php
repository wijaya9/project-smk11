<!doctype html>
<html lang="en">
    <head>
        <title>Tambah Data Nilai</title>
    </head>
    <body>
        <h1>Tambah Data</h1>
        <a href="index.php">Kembali</a>
        <br><br>
        <form action="process.php" method="post">
            <label>Nama</label>
            <br>
            <input type="text" name="nama">
            <br>
            <label>NIS</label>
            <br>
            <input type="text" name="nis">
            <br>
            <label>Alamat</label>
            <br>
            <input type="text" name="alamat">
            <br>
            <label>Jenis Kelamin</label>
            <br>
            <select name="jk" id="jk">
                <option value=1>Laki-laki</option>
                <option value=2>Perempuan</option>
            </select>
            <br>
            <label>Rombel</label>
            <br>
            <input type="text" name="rombel">
            <br><br>
            <button type="submit" name="submit_simpan">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </body>
</html>