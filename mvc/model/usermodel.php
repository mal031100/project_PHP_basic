<?php  
    class usermodel extends DB{
        public function get(){
            $sql = "SELECT *FROM user";
            return mysqli_query($this->conn, $sql);
        }
        public function insert($username, $password){
            $sql = "INSERT INTO `user`( `username`, `password`) VALUES ('$username','$password')";
            $result = false;
            if(mysqli_query($this->conn,$sql)){
                $result = true;
            }
            return json_encode($result);
        }
        public function edit($id){
            $sql = "SELECT * FROM user WHERE id = $id";
            return mysqli_query($this->conn, $sql);
        }
        public function update($id, $username){
            $sql = "UPDATE `user` SET `username`='$username' WHERE id = $id";
            $result = false;
            if (mysqli_query($this->conn,$sql)){
                $result = true;
            }
            return json_encode($result);
        }
        public function delete($id){
            $sql = "DELETE FROM `user` WHERE id = $id";
            $result = false;
            if (mysqli_query($this->conn,$sql)){
                $result = true;
            }
            return json_encode($result);
        }
    }
?>