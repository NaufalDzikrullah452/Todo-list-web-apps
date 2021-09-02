<script>
    $(document).ready(function() {
        $(document).on('click', '.chk-sub', function() {
            var subtask_id = $(this).data('id');
            // alert("click : " + subtask_id);
            $.ajax({
                url: "<?= base_url(); ?>index.php/dashboard/today/edit_status_subtask",
                method: "post",
                dataType: "json",
                data: {
                    subtask_id: subtask_id
                },
                success: function(data) {
                    if (data.responce == "complete") {
                        // alert(data.message);
                        $('#subtask_name_' + subtask_id).css(
                            'text-decoration', 'line-through'
                        );
                    } else {
                        // alert(data.message);
                        $('#subtask_name_' + subtask_id).css(
                            'text-decoration', 'none'
                        );
                    }
                }
            });
        });
    });
</script>