<?php
    class App{
        //workflow: 1. user gửi truy vấn, truy vấn gồm con = class X (controller) và  act = method Y
        // nếu user có nhập con và act thì lấy giá trị mặc định cho X và Y
        // nếu user ko nhập thì dùng mặc định con = home và act = index

        //2. thêm file controller vào

        //đây là tên controller mặc định và tên method mặc định
        protected $controller = 'HomeController';
        protected $method = 'index';
        
        //cách để lấy truy vấn từ url (lấy con=san-pham&act=detail từ link dưới)
        //vd: https:///vnexpress.net?con=san-pham&act=detail
        public function parseUrl(){
            if(isset($_GET['con']) & isset($_GET['act'])){
                //con là tên controller, act là tên method
                return [$_GET['con'], $_GET['act']];
            }
        }
        
        //đây là hàm khởi tạo
        public function __construct(){
            $url = $this->parseUrl();
            if($url != null){
                //kiểm tra file controller có tồn tại không
                //url[0] chứa tên controller
                //tên file controller = đường dẫn tuyệt đối (ổ điã + tên file php)
                if(file_exists(BASE_PATH . '/app/controllers/' . $url[0] . '.php')){
                    $this->controller = $url[0];
                    //hủy biến url[0] để tiết kiệm tài nguyên
                    unset($url[0]);
                }
                else{
                    echo 'no';
                }
                
                //import class X vao
                require_once BASE_PATH .'/app/controllers/'.$this->controller.'.php';
                if(isset($url[1])){
                    //$url[1] là tên method Y
                    //kiểm tra Y() có tồn tại trong class x hay không
                    if(method_exists($this->controller, $url[1])){
                        //nếu có thì lấy tên method Y ra
                        $this->method = $url[1];
                        unset($url[1]);
                    }
                }
              
            }

             
            //import file controller X vao
            require_once BASE_PATH .'/app/controllers/'.$this->controller.'.php';
            //khởi tạo 1 object từ class X
            $this->controller = new $this->controller();
            //gọi hàm Y của object này
            call_user_func_array([$this->controller, $this->method],[]);
        }


    }
?>