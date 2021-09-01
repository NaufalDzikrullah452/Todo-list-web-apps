<script>
    $(document).ready(function() {
        $(document).on('click', '.priority', function() {
            var task_id = $(this).data('id');
            // alert("click : " + task_id);
            $.ajax({
                url: "<?= base_url(); ?>index.php/dashboard/today/edit_priority_status",
                method: "post",
                dataType: "json",
                data: {
                    task_id: task_id
                },
                success: function(data) {
                    if (data.responce == 1) {
                        // alert(data.message);
                        $('#priority-' + task_id).css(
                            'color', '#FFB319'
                        );
                    } else {
                        // alert(data.message);
                        $('#priority-' + task_id).css(
                            'color', ''
                        );
                    }
                }
            });
        });
    });
</script>