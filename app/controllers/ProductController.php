<?php

    class ProductController extends Controller{
        public function index(){
            $this->view('','/product/index');
        }

        public function checkout(){
            $this->view('','/product/checkout');
        }

    }
?>