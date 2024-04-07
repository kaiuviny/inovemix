<?php
class EmployeeVO{
    private $id_employee;
    private $job_id;
    private $people_id;
    private $hire_date;

    public function getId_employee(){
        return $this->id_employee;
    }
    public function setId_employee($id_employee){
        $this->id_employee = $id_employee;
    }

    public function getJob_id(){
        return $this->job_id;
    }
    public function setJob_id($job_id){
        $this->job_id = $job_id;
    }

    public function getPeople_id(){
        return $this->people_id;
    }
    public function setPeople_id($people_id){
        $this->people_id = $people_id;
    }

    public function getHire_date(){
        return $this->hire_date;
    }
    public function setHire_date($hire_date){
        $this->hire_date = $hire_date;
    }

}
?>