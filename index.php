<?php
    include_once("lib/env.php");
    include_once("lib/base/with_db.php");
    include_once("lib/app/TaskListController.php");
    
    $env = new Env("");

    $TaskListController = new TaskListController($env);
    $TaskListController->run();
?>
