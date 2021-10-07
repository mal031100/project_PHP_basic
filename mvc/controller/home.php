<?php
    class home extends controller{
        public $loai_tinmodel;
        public $tinmodel;
        function __construct()
        {
            $this->loai_tinmodel = $this->model("loai_tinmodel");
            $this->tinmodel = $this->model("tinmodel");
        }

        public function product(){
                $this->View("layout",[
                "page"=>"home/blog",
                "loai_tin"=>$this->loai_tinmodel->get(),
                "tin"=>$this->tinmodel->get(),
            ]);
        }

        public function loai_tin($id){
                $this->View("layout",[
                "page"=>"home/items",
                "loai_tin"=>$this->loai_tinmodel->get(),
                "tin"=>$this->tinmodel->loai_tin($id),
            ]);
        }

        public function content($id){
            $this->view("layout",[
                "page"=>"home/content",
                "loai_tin"=>$this->loai_tinmodel->get(),   
                "content"=>$this->tinmodel->content($id),          
            ]);
        }
    }   
?>