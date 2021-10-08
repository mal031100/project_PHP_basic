<?php
    class tinmodel extends DB{
        public function get(){
            $sql = " SELECT * FROM tin where trang_thai = 1";
            return mysqli_query($this->conn, $sql);
        }
        public function loai_tin($id){
        $sql = "SELECT * FROM tin where loai_tin = $id and trang_thai = 1";
        return mysqli_query($this->conn, $sql);
        }
        public function content($id){
            $sql = "SELECT * FROM tin WHERE id = $id";
            return mysqli_query($this->conn, $sql);
        }
    }
?>