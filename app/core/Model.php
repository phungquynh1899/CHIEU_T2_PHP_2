<?php
    class Model{
        protected $db;

        public function __construct(){
            //khoi tao ket noi voi csdl
            //nhớ chỉnh lại tên databse cho phù hợp với database của mình
            //ghi đúng thứ tự
            $this->db = new PDO('mysql:host=localhost;dbname=csdl','root','');
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->db -> exec("set names utf8mb4");
           
        }
        //method truy van truy van phuc tap select  non select
        public function query($sql, $params = []){
            $q = $this->db->prepare($sql);
            $q->execute($params);
            return $q;
        }
        //method lay het tat ca cac ket qua (select)
        public function fetchAll($sql, $params = []){
            $q = $this->query($sql, $params);
            return $q->fetchAll(PDO::FETCH_ASSOC);
        }

        //method chi lay dong dau tien cua bang ket qua (select 1 from )
        public function fetchOne($sql, $params = []){
            $q = $this->query($sql, $params);
            return $q->fetch(PDO::FETCH_ASSOC);
        }
    }
?>