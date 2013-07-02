<?php

class TaskList_db_calls extends BasePackageWithDb {
    public function get_task_names() {
        $sql = "SELECT task FROM t_tasks;";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_object($result)) {
            $names[] = $row->task;
        }
        return $names;
    }
}

?>
