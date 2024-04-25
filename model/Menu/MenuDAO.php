<?php
include "iMenuDao.php";
class MenuDAO implements iMenuDAO{
    public function checkUserLevel(MenuVO $value){
        
        $job_id = $value->getId_job();
        
        //$sql = "SELECT * FROM `job` WHERE `id_job` = ?;";
        $sql = "SELECT `level` FROM `job` WHERE `id_job` = ?;";

        $db = new DB();
        $db->getConnection();

        $pstm = $db->execSQL($sql);
        $pstm->bind_param("i", $job_id);
        $pstm->execute();

        if($result = $pstm->get_result()){
            if($result->num_rows>0){
                $vo = new MenuVO;
                $rs = $result->fetch_array(MYSQLI_ASSOC);
                return $rs["level"];
                /*while($rs = $result->fetch_array(MYSQLI_ASSOC)){
                    $vo->setId_job($rs["id_job"]);
                    $vo->setJob($rs["job"]);
                    $vo->setLevel($rs["level"]);
                }
                return $vo;*/
            }
            else{
                return false;
            }
            
        }
        else{
            return false;
        }

    }
}
?>