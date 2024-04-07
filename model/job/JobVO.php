<?php
class JobVO{
    private $id_job;
    private $job;
    private $level;
    private $reference;

    public function getId_job(){
        return $this->id_job;
    }
    public function setId_job($id_job){
        $this->id_job = $id_job;
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

    public function getReference(){
        return $this->reference;
    }
    public function setReference($reference){
        $this->reference = $reference;
    }
}
?>