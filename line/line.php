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

<?php $job = JobDAO::all(); ?>

<div class="row">
    <div class="col-md-5">
        <div class="table-responsive">
  
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
    
<div class="row">
    <div class="col-md-5">
        <div class="table-responsive">

            <table class="table table-dark table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="2">Prioridade 2</th>
                    </tr>
                </thead>
                <tr>
                    <th>ID</th>
                    <th>Tempo</th>
                </tr>

                <?php 
                    foreach($job as $u) : 
                        if($u['priority']==2){
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

<div class="row">
    <div class="col-md-5">
        <div class="table-responsive">

        <table class="table table-dark table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2">Prioridade 3</th>
                </tr>
            </thead>
            <tr>
                <th>ID</th>
                <th>Tempo</th>
            </tr>

            <?php 
                foreach($job as $u) : 
                    if($u['priority']==3){
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

<div class="row">
    <div class="col-md-5">
        <div class="table-responsive">

        <table class="table table-dark table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th colspan="2">Prioridade 4</th>
                </tr>
            </thead>
            <tr>
                <th>ID</th>
                <th>Tempo</th>
            </tr>

            <?php 
                foreach($job as $u) : 
                    if($u['priority']==4){
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
