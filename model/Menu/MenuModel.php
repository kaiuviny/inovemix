<?php
    class MenuModel{
        public function checkUserLevelModel(MenuVO $value){
            $dao = new MenuDAO();
            return $dao->checkUserLevel($value);
        }
    }
?>