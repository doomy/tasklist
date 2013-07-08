<ul>
    <?php
        foreach($tasks as $task) {
            echo "<li id='task$task->id'>$task->task</li>";
        }
    ?>
</ul>
