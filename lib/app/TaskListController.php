<?php
    class TaskListController extends BasePackageWithDb {
    
        public function run() {
            $names = $this->dbh->run_db_call("Tasklist", "get_task_names");
            echo "<ul>";
            foreach ($names as $name)
                echo "<li>$name</li>";
            echo "</ul>";
        }
    }
?>
