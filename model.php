<?php
    include 'connection.php';
    class Model extends Connection{
        public $id;
        public $nama;
        public $nis;
        public $alamat;
        public $jk;
        public $rombel;

        public function __construct(){
            $this->conn = $this->get_connection();
        }

        public function insert()
        {
            $sql = "insert into siswa (nama, nis, alamat, jk, rombel) values ('$this->$nama', '$this->$nis', '$this->$alamat', '$this->$jk', '$this->$rombel')";
            $this->conn->query($sql);
        }

        public function ambil_data()
        {
            $sql = "Select * from siswa";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object())
            {
                $baris[] = $obj;
            }

            if(!empty($baris))
            {
                return $baris;
            }
        }

        public function find($id)
        {
            $sql = "Select * from siswa where id='$id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object())
            {
                $baris = $obj;
            }

            if(!empty($baris))
            {
                return $baris;
            }
        }

        public function update($id, $nama, $nis, $alamat, $jk, $rombel)
        {
            $sql = "update siswa set nama='$nama', nis='$nis', alamat='$alamat', jk='$jk', rombel='$rombel' where id='$id'";
            $this->conn->query($sql);
        }

        public function delete($id)
        {
            $sql = "Delete from siswa where id='$id'";
            $this->conn->query($sql);
        }

    }
?>