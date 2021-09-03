<script>
    var intervalId = window.setInterval(function() {
        /// call your function here
        <?php
        // get time now
        date_default_timezone_set('Asia/Singapore');
        $time_now = date('Y-m-d H:i:s', time());

        foreach ($task as $data_task) :
            $time = $data_task->task_time;
            $task_due_date = $data_task->task_due_date;
            // merge due date and time from task
            $task_time = date('Y-m-d H:i:s', strtotime("$task_due_date $time"));
            // create task time 1 hour before
            $task_time_1_hour = date_create($task_time);
            date_add($task_time_1_hour, date_interval_create_from_date_string('-1 hours'));
            $task_time_1_hour = date_format($task_time_1_hour, 'Y-m-d H:i');

            // get time left before the due date
            $date1 = date_create($task_time);
            $date2 = date_create();
            $diff  = date_diff($date1, $date2);


            // check time now 1 hour before equals with task time 1 hour before
            // cause we need notif 1 hour before 
            if ($time_now >= $task_time_1_hour && $time_now <= $task_time) :
                // if (true) :
        ?>
                Push.create(
                    'Reminder Task <?= $data_task->task_name ?> (<?= $time ?>)', {
                        body: "Time Remaining : <?= $diff->i ?> Minutes",
                        timeout: 10000,
                        onClick: function() {
                            window.focus();
                            this.close();
                        }
                    });
                clearInterval(intervalId);
        <?php
            endif;
        endforeach;

        ?>
    }, 5000);
</script>