<?php
class Job {
    private $time;
    private $priority;
    private $id;

    public function setTime($time) {
        $this->time = $time;
    }
    public function getTime() {
        return $this->time;
    }
    public function setPriority($priority) {
        if($this->time<=10){
            $this->priority = 1;
        }
        if($this->time<=20){
            $this->priority = 2;
        }
        if($this->time<=30){
            $this->priority = 3;
        }
        if($this->time>30){
            $this->priority = 4;
        }
    }
    public function getPriority() {
        return $this->priority;
    }

    public function getId(){
        return $this->id;
    }
}