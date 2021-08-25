<?php
    include 'model.php';
    $model = new Model();
    
    //proses simpan data
    if(isset($_POST['submit_simpan']))
    {
        $model->nama = $_POST['nama'];
        $model->nis = $_POST['nis'];
        $model->alamat = $_POST['alamat'];
        $model->jk = $_POST['jk'];
        $model->rombel = $_POST['rombel'];
        $model->insert();
        header('location:index.php');
    }

    //proses edit data
    if(isset($_POST['submit_edit']))
    {
        $id = $_POST['id'];
        $model->nama = $_POST['nama'];
        $model->nis = $_POST['nis'];
        $model->alamat = $_POST['alamat'];
        $model->jk = $_POST['jk'];
        $model->rombel = $_POST['rombel'];
        $model->update($id);
        header('location:index.php');
    }

    //proses delete data
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $model->delete($id);
        header('location:index.php');
    }
    
?>