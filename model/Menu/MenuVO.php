<?php
class MenuVO{
    private $id_job;
    private $job;
    private $level;

    public function getId_job(){
        return $this->id_job;
    }
    public function setId_job($job_id){
        $this->id_job = $job_id;
    }

    public function getJob(){
        return $this->job;
    }
    public function setJob($job){
        $this->job = $job;
    }

    public function getLevel(){
        return $this->level;
    }
    public function setLevel($level){
        $this->level = $level;
    }
}

?>