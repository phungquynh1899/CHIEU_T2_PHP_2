<?php
    class Controller{
        //khoi tao model khi can truy cap du lieu
        public function model($model){
            require_once BASE_PATH .'/app/models/'.$model.'.php';
            return new $model();
        }

        //hien thi view ra man hinh
        public function view($layout, $view, $data=[]){
            //luu gia tri de truy cap sau nay
            foreach($data as $key => $value){
                $$key = $value;
            }
            //Tạo đường dẫn để hiển thị view
            $viewPath = BASE_PATH . '/app/views/' . $view . '.php';

            if($layout == ''){
                require_once BASE_PATH . '/app/views/layouts/index.php';
            }
            else{
                require_once BASE_PATH . '/app/views/' . $layout . '.php';

            }
        }
    }

?>