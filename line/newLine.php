<?php
    require_once "../src/partials/_head.php";
    require_once '../src/dao/JobDAO.php';
    require_once '../src/utils/Database.php';
    require_once '../src/entities/Job.php';
    

    
    $count = $_POST['qp'];

    for ($i=0; $i<$count; $i++){
        $job = new Job;
        $job->setTime(rand(1,60));
        $job->setPriority($job->getTime());
        JobDAO::add($job);
    }

    header('Location: line.php');
    exit;
?>