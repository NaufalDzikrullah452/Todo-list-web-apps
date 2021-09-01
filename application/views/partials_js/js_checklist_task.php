<script>
    $(document).ready(function() {
        $(document).on('click', '.chk', function() {
            var task_id = $(this).data('id');
            // alert("click : " + task_id);
            $.ajax({
                url: "<?= base_url(); ?>index.php/dashboard/today/edit_status",
                method: "post",
                dataType: "json",
                data: {
                    task_id: task_id
                },
                success: function(data) {
                    if (data.responce == "complete") {
                        $('#task_name_' + task_id).css(
                            'text-decoration', 'line-through'
                        );
                    } else {
                        $('#task_name_' + task_id).css(
                            'text-decoration', 'none'
                        );
                    }
                }
            });
        });
    });
</script>