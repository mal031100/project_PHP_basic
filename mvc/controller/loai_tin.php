<?php

    class loai_tin extends controller{
        public $loai_tinmodel;
        public $tinmodel;
        function __construct()
        {
            $this->loai_tinmodel = $this->model("loai_tinmodel");
            $this->tinmodel = $this->model("tinmodel");
        }

        public function product(){
            $this->viewadmin("layout",[
                "page"=>"loai_tin/index",
                "loai_tin"=>$this->loai_tinmodel->get(),
            ]);
        }

        public function view_insert(){
            $this->viewadmin("layout",[
                "page"=>"loai_tin/insert",
            ]);
        }

        public function insert(){
            $result_mess = false;
            if (isset($_POST["submit"])){

                if(empty($_POST["loai_tin"])){
                    $this->viewadmin("layout",[
                        "page"=>"loai_tin/insert",
                        "result"=>$result_mess,
                    ]);
                }

                $ten_loai = $_POST["loai_tin"];
                $kq = $this->loai_tinmodel->insert($ten_loai);
                $this->viewadmin("layout",[
                    "page"=>"loai_tin/insert",
                    "result"=>$kq,
                ]);
            }
        }
    }
?>