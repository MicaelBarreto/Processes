<?php 
    //require_once "src/utils/FlashMessage.php";
    //include_once "../src/partials/_verify_auth.php";
    include_once "../src/partials/_head.php"; 
    include_once "../src/partials/_header.php";
    include_once "../src/dao/JobDAO.php";
    require_once "../src/utils/Database.php";
?>

<div class="hero-unit text-center counter">
    <span id="time"> </span>
    <p>Seconds</p>
    <script type="text/javascript">
        var timeleft = 10;
        var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("time").textContent = timeleft;
        if(timeleft <= 0)
            clearInterval(downloadTimer);
        },1000);
    </script>
</div>

<div class="row">
  <div class="col-md-5">
  <div class="table-responsive">
  <?php $job = JobDAO::all(); ?>
    <table class="table table-dark table-bordered">
        <thead class="thead-dark">
            <tr>
                <th colspan="2">Prioridade 1</th>
            </tr>
        </thead>
        <tr>
            <th>ID</th>
            <th>Tempo</th>
        </tr>

        <?php 
            foreach($job as $u) : 
                if($u['priority']==1){
        ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['time'] ?></td>
        </tr>
        <?php
                } 
            endforeach 
        
        ?>
    </table>
    </div>
  </div>
</div>
    
    <table class="table table-dark table-bordered">
        <thead class="thead-dark">
            <tr class="row">
                <th colspan="2" class="col-xs-1">Prioridade 2</th>
            </tr>
        </thead>
        <tr class="row">
            <th class="col-xs-1">ID</th>
            <th class="col-xs-1">Tempo</th>
        </tr>

        <?php 
            foreach($job as $u) : 
                if($u['priority']==2){
        ?>
        <tr class="row">
            <td class="col-xs-1"><?= $u['id'] ?></td>
            <td class="col-xs-1"><?= $u['time'] ?></td>
        </tr>
        <?php
                } 
            endforeach 
        
        ?>
    </table>
    <table class="table table-dark table-bordered">
        <thead class="thead-dark">
            <tr class="row">
                <th colspan="2" class="col-xs-1">Prioridade 3</th>
            </tr>
        </thead>
        <tr class="row">
            <th class="col-xs-1">ID</th>
            <th class="col-xs-1">Tempo</th>
        </tr>

        <?php 
            foreach($job as $u) : 
                if($u['priority']==3){
        ?>
        <tr class="row">
            <td class="col-xs-1"><?= $u['id'] ?></td>
            <td class="col-xs-1"><?= $u['time'] ?></td>
        </tr>
        <?php
                } 
            endforeach 
        
        ?>
    </table>
    <table class="table table-dark table-bordered">
        <thead class="thead-dark">
            <tr class="row">
                <th colspan="2" class="col-xs-1">Prioridade 4</th>
            </tr>
        </thead>
        <tr class="row">
            <th class="col-xs-1">ID</th>
            <th class="col-xs-1">Tempo</th>
        </tr>

        <?php 
            foreach($job as $u) : 
                if($u['priority']==4){
        ?>
        <tr class="row">
            <td class="col-xs-1"><?= $u['id'] ?></td>
            <td class="col-xs-1"><?= $u['time'] ?></td>
        </tr>
        <?php
                } 
            endforeach 
        
        ?>
    </table>
