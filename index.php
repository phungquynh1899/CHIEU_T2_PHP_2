<?php
    //lưu đường dẫn cho thư mục hiện tại
    define("BASE_PATH", __DIR__);
    //import App.php
    require_once BASE_PATH . '/app/core/App.php';
    require_once BASE_PATH . '/app/core/Controller.php';
    require_once BASE_PATH . '/app/core/Model.php';
    $app = new App;

?>