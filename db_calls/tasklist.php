<?php

class TaskList_db_calls extends BasePackageWithDb {
    public function get_task_names() {
        $sql = "SELECT id, task FROM t_tasks ORDER BY weight;";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_object($result)) {
            $tasks[] = $row;
        }
        return $tasks;
    }
}

?>
