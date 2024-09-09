<?php


    class HomeController extends Controller{
        public function index(){
            //goi view cua controller (cha)
            $this->view('','/home/index');
        }
        public function testimonial(){
            $this->view('','/home/testimonial');
        }
        public function shop(){
            $this->view('','/home/shop');
        }
        public function shop_detail(){
            $this->view('','/home/shop_detail');
        }

        public function error(){
            $this->view('','/home/error');
        }
        public function contact(){
            $this->view('','/home/contact');
        }

    }
?>