<?php

    class user extends controller{
        public $loai_tinmodel;
        public $tinmodel;
        public $usermodel;
        function __construct()
        {
            $this->loai_tinmodel = $this->model("loai_tinmodel");
            $this->tinmodel = $this->model("tinmodel");
            $this->usermodel = $this->model("usermodel");
        }

        public function product(){
            $this->viewadmin("layout",[
                "page"=>"user/index",
                "user"=>$this->usermodel->get(),
            ]);
        }

        public function view_insert(){
            $this->viewadmin("layout",[
                "page"=>"user/insert",
            ]);
        }

        public function insert(){
            $result_mess = false;
            if (isset($_POST["submit"])){

                if(empty($_POST["username"]) || empty($_POST["password"])){
                    $this->viewadmin("layout",[
                        "page"=>"user/insert",
                        "result"=>$result_mess,
                    ]);
                }else{
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $kq = $this->usermodel->insert($username, $password);
                    $this->viewadmin("layout",[
                        "page"=>"user/insert",
                        "result"=>$kq,
                    ]);
                }

               
            }
        }
        public function edit($id){
            $this->viewadmin("layout",[
                "page"=>"user/edit",
                "edit"=>$this->usermodel->edit($id),
            ]);
        }
        public function update($id){
            $result_mess = false;
            if(isset($_POST["submit"])){
                if(empty($_POST["username"])){
                    $this->viewadmin("layout",[
                        "page"=>"user/edit",
                        "result"=>$result_mess,
                        "edit"=>$this->usermodel->edit($id)
                    ]);
                }else{
                    $username = $_POST["username"];
                    $kq = $this->usermodel->update($id, $username);
                    $this->viewadmin("layout",[
                        "page"=>"user/edit",
                        "result"=>$kq,
                        "edit"=>$this->usermodel->edit($id)
                    ]);
                }
            }
        }
        public function delete($id){
            $kq = $this->usermodel->delete($id);
            $this->viewadmin("layout",[
                "page"=>"user/index",
                "user"=>$this->usermodel->get(),
                "result"=>$kq,
            ]);
        }
    }
?>