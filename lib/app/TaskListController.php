<?php
    class TaskListController extends BasePackageWithDb {
    
        function _init() {
            $this->include_packages(array('template'));
        }
    
        public function run() {
            $tasks = $this->dbh->run_db_call("Tasklist", "get_task_names");

            $template = new Template($this->env, 'tasklist.tpl.php');
            $template->show(array(
                'tasks' => $tasks
            ));
        }
    }
?>
