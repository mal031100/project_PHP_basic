<?php 
    class loai_tinmodel extends DB{
        public function get(){
            $sql = "SELECT * FROM loai_tin";
            return mysqli_query($this->conn, $sql);
        }
        public function insert($ten_loai){
            $sql = "INSERT INTO `loai_tin`(`ten_loai`) VALUES ('$ten_loai')";
            $result = false;
            if (mysqli_query($this->conn,$sql)){
                $result = true;
            }
            return json_encode($result);
        }
    }
?>