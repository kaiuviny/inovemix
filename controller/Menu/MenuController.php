<?php
    session_start();

    include_once ("model/DB.php");
    include_once ("model/Menu/MenuVO.php");
    include_once ("model/Menu/MenuDAO.php");
    include_once ("model/Menu/MenuModel.php");

    class MenuController{
        public function verificaNivelUsuario(){
            echo "<h1>Menu, level do usuario</h1>";

            if (isset($_GET["job_id"])){
                
                $vo = new MenuVO();
                $vo->setId_job($_GET["job_id"]);

                $model = new MenuModel();
                if($data = $model->checkUserLevelModel($vo)){
                    switch ($data){
                        case 0:
                            include ("view/Menu/menu0.php");
                            break;
                        
                        case 1:
                            include ("view/Menu/menu1.php");
                            break;

                        case 2:
                            include ("view/Menu/menu2.php");
                            break;
                        default:
                            echo "<h1>Nenhum Menu liberado para o acesso  com o nível $data!</h1>";     
                    }
                }
            }
        }
    }
?>