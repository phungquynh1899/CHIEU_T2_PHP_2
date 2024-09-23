<?php


    class HomeController extends Controller{
        public function index(){
            // $menu = $this->model('Menu');
            // //thêm 1 rơw vào csdl
            // // $data = [
            // //      'ten'=>'Day la ten',
            // //      'slug'=>'Day la slug',
            // //      'idCha'=>NULL,
            // //      'idCat'=>NULL,
            // //      'mota'=>'Day la mota',
            // //      'anhien'=>0,
            // //      'thutu'=>NULL
            // // ];
            // // $menu->addMenu($data);

            // //2. show toàn bộ bảng
            // $data = $menu->getMenu();
            // print_r($data);
            $this->view('','/home/index',['menu'=> $data]);
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