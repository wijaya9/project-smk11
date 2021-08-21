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
            $sql = "insert into siswa (nama, nis, alamat, jk, rombel) values ('$this->nama', '$this->nis', '$this->alamat', '$this->jk', '$this->rombel')";
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

        public function find()
        {
            $sql = "Select * from siswa where id='$this->id'";
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

        public function update()
        {
            $sql = "update siswa set nama='$this->nama', nis='$this->nis', alamat='$this->alamat', jk='$this->jk', rombel='$this->rombel' where id='$this->id'";
            $this->conn->query($sql);
        }

        public function delete()
        {
            $sql = "Delete from siswa where id='$this->id'";
            $this->conn->query($sql);
        }

    }
?>