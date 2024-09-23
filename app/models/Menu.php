<?php
    
    class Menu extends Model{
        public function addMenu($menu=[]){
            $sql = "INSERT INTO menus (id, ten, slug, idCha, idCat, mota, anhien, thutu) VALUES (NULL, :ten, :slug, :idCha, :idCat, :mota, :anhien, :thutu)";
            return $this->query($sql, $menu);
        }

        public function getMenuLevel1(){
            $sql = "SELECT * FROM menus WHERE idCha is NULL AND anhien = 1 ORDER BY thutu DESC";
            return $this->fetchAll($sql);
        }

        public function getMenuLevel2(){
            $sql = "SELECT * FROM menus WHERE idCha is not NULL ORDER BY thutu DESC";
            return $this->fetchAll($sql);
        }
    }
?>