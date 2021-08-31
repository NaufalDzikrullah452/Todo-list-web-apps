        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Today</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h3 class="mb-1">Today Task </h3>
                                            <p>Thu 26 August</p>
                                            <a href="#" data-toggle="modal" data-target="#modalAdd">
                                                <h4 class="m-0"><i class="icon-plus"></i> Add Task</h4>
                                            </a>

                                        </div>

                                        <div>
                                            <div class="dropdown custom-dropdown">
                                                <div data-toggle="dropdown"><i class="ti-more-alt"></i>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-calendar menu-icon"></i> Sort by Date</a>
                                                    <a class="dropdown-item" href="#"><i class="star-toggle ti-star"></i> Sort by Priority</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <?php
                                    foreach ($task as $data_task) :
                                        $style = '';
                                        $checked = '';
                                        if ($data_task->task_status == 'complete') {
                                            $style = 'text-decoration: line-through';
                                            $checked = 'checked';
                                        }
                                    ?>
                                        <div class="email-list m-t-15">
                                            <div class="message">
                                                <a href="#">
                                                    <div class="col-mail col-mail-1">
                                                        <div class="email-checkbox">
                                                            <input type="checkbox" class="chk" id="chk-<?= $data_task->task_id ?>" data-id="<?= $data_task->task_id ?>" <?= $checked ?>>
                                                            <!-- <label class="toggle" for="chk2"></label> -->
                                                        </div>
                                                        <span class="star-toggle ti-star"></span>
                                                    </div>
                                                    <div class="col-mail col-mail-2">
                                                        <div class="subject" style="<?= $style ?>" id="task_name_<?= $data_task->task_id ?>"><?= $data_task->task_name; ?> </div>
                                                </a>
                                                <div class="date">
                                                    <div class="dropdown custom-dropdown">
                                                        <div data-toggle="dropdown">More <i class="fa fa-angle-down m-l-5"></i>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <input type="hidden" name="task_id" value="<?php echo $data_task->task_id; ?>">
                                                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modalEdit<?= $data_task->task_id; ?>"><i class="icon-note"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modalDelete<?= $data_task->task_id; ?>"><i class="ti-trash"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <!-- Pagination -->
                        </div>

                        <!-- Modal Add-->
                        <div class="modal fade" id="modalAdd">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Task</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST" id="form">
                                            <div class="form-group">
                                                <label>Title:</label>
                                                <input type="text" class="form-control form-control-sm input-default" placeholder="title task" name="task_name" id="task_name_add">
                                            </div>
                                            <div class="form-group">
                                                <label>Description:</label>
                                                <textarea class="form-control h-80px" rows="5" placeholder="description" name="task_description" id="task_description"></textarea>
                                            </div>
                                            <div class="row form-material">
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Set Date</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" name="task_due_date"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="m-t-20">Set Reminder</label>
                                                    <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                                        <input type="text" class="form-control" value="13:14" name="task_time" id="task_time"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Category:</label>
                                                <select class="form-control" id="sel1" name="task_category_id">
                                                    <option value="">-- Choose category --</option>
                                                    <option value="1">Work</option>
                                                    <option value="2">Sport</option>
                                                    <option value="3">Study</option>
                                                    <option value="4">Rest</option>
                                                    <option value="5">Grocery</option>
                                                    <option value="6">Others</option>
                                                </select>
                                            </div>
                                            <form action="" method="POST" id="subtask">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="sub task">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-dark" type="button">Add</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">Sub task 1</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success" id="add_task">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Add-->

                        <!-- Modal Edit-->
                        <?php foreach ($task as $data_task) : ?>
                            <form action="<?= base_url() . 'index.php/dashboard/Today/edit' ?>" method="POST">
                                <div class="modal fade" id="modalEdit<?= $data_task->task_id; ?>">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Task</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Title:</label>
                                                    <input type="text" class="form-control form-control-sm input-default" placeholder="title task" name="task_name" value="<?= $data_task->task_name; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Description:</label>
                                                    <textarea class="form-control h-80px" rows="5" placeholder="description" name="task_description"><?php echo htmlspecialchars($data_task->task_description); ?></textarea>
                                                </div>
                                                <div class="row form-material">
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Set Date</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" name="task_due_date"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Set Reminder</label>
                                                        <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                                            <input type="text" class="form-control" name="task_time" value="<?= $data_task->task_time; ?>"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Category:</label>
                                                    <select class="form-control" id="sel1" name="task_category_id">
                                                        <option value="">-- Choose category --</option>
                                                        <option value="1" <?= $data_task->task_category_id == '1' ? ' selected ' : ''; ?>>Work</option>
                                                        <option value="2" <?= $data_task->task_category_id == '2' ? ' selected ' : ''; ?>>Sport</option>
                                                        <option value="3" <?= $data_task->task_category_id == '3' ? ' selected ' : ''; ?>>Study</option>
                                                        <option value="4" <?= $data_task->task_category_id == '4' ? ' selected ' : ''; ?>>Rest</option>
                                                        <option value="5" <?= $data_task->task_category_id == '5' ? ' selected ' : ''; ?>>Grocery</option>
                                                        <option value="6" <?= $data_task->task_category_id == '6' ? ' selected ' : ''; ?>>Others</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="sub task">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-dark" type="button">Add</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">Sub task 1</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">Sub task 2</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" value="">Sub task 3</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="task_id" value="<?php echo $data_task->task_id; ?>">
                                                <input type="hidden" name="task_user_id" value="<?php echo $data_task->task_user_id; ?>">
                                                <input type="hidden" name="task_status" value="<?php echo $data_task->task_status; ?>">
                                                <input type="hidden" name="task_priority_status" value="<?php echo $data_task->task_priority_status; ?>">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>
                        <!-- Modal Edit-->
                        <!-- Modal Delete-->
                        <?php foreach ($task as $data_task) : ?>
                            <form action="<?= base_url() . 'index.php/dashboard/Today/delete' ?>" method="POST">
                                <div class="modal fade" id="modalDelete<?= $data_task->task_id; ?>">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete Task</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure want to delete it?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="task_id" value="<?php echo $data_task->task_id; ?>">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>

                        <!-- Modal Delete-->
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        <!-- #/ container -->
        </div>

        <script>
        </script>

        <!-- Toastr -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <!-- Jquery CDN -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {

                $(document).on('click', '.chk', function() {
                    var task_id = $(this).data('id');
                    // alert("click : " + task_id);
                    $.ajax({
                        url: "<?= base_url(); ?>edit_status",
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


                // ajax add
                $(document).on("click", "#add_task", function(e) {
                    e.preventDefault();

                    // alert("click");
                    var task_name = $("#task_name_add").val();
                    var task_description = $("#task_description").val();
                    var task_category_id = $("#sel1").val();
                    var task_due_date = $("#datepicker-autoclose").val();
                    var task_time = $("#task_time").val();
                    var task_status = "uncomplete";
                    var task_priority_status = "0";


                    // alert(task_name + ' , ' + task_category_id + ' , ' +
                    //     task_description + ' , ' + task_due_date + ' , ' +
                    //     task_time + ' , ' + task_status + ' , ' + task_priority_status);


                    if (task_name == "" || task_description == "" || task_category_id == "" || task_due_date == "" || task_time == "") {
                        alert('Please fill the empty field!');
                    } else {
                        //alert('formnya sudah diisi');
                        $.ajax({
                            url: "<?= base_url(); ?>save",
                            type: "post",
                            dataType: "json",
                            data: {
                                task_name: task_name,
                                task_description: task_description,
                                task_category_id: task_category_id,
                                task_due_date: task_due_date,
                                task_time: task_time,
                                task_status: task_status,
                                task_priority_status: task_priority_status
                            },
                            success: function(data) {
                                alert(data.message);
                                if (data.responce == "success") {
                                    $('#modalAdd').modal('hide');
                                    toastr["success"](data.message);
                                } else {
                                    toastr["error"](data.message);
                                }
                                $("#form")[0].reset();
                            }
                        });

                    }
                });
            });
        </script>
        <!--**********************************
            Content body end
        ***********************************-->