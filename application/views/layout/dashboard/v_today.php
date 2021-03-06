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
                                            <p><?php
                                                $dt = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
                                                $day = $dt->format('l');
                                                echo substr($day, 0, 3) . ' ' . $dt->format('d') . ' ' . $dt->format('F');
                                                ?></p>
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
                                    <!-- task -->
                                    <?php

                                    foreach ($task as $data_task) :
                                        $style = '';
                                        $checked = '';
                                        $priority = '';
                                        if ($data_task->task_status == 'complete') {
                                            $style = 'text-decoration: line-through';
                                            $checked = 'checked';
                                        }
                                        if ($data_task->task_priority_status == '1') {
                                            $priority = 'color: #FFB319';
                                        }
                                    ?>
                                        <div class="email-list m-t-15">
                                            <div class="message">
                                                <div class="col-mail col-mail-1">
                                                    <div class="email-checkbox">
                                                        <input type="checkbox" class="chk" id="chk-<?= $data_task->task_id ?>" data-id="<?= $data_task->task_id ?>" <?= $checked ?>>
                                                        <!-- <label class="toggle" for="chk2"></label> -->
                                                    </div>
                                                    <span class="priority star-toggle fa fa-star" style="<?= $priority ?>" id="priority-<?= $data_task->task_id ?>" data-id="<?= $data_task->task_id ?>"></span>
                                                </div>
                                                <div class=" col-mail col-mail-2">
                                                    <div class="subject" style="<?= $style ?>" id="task_name_<?= $data_task->task_id ?>">
                                                        <a href="#" data-toggle="modal" data-target="#modalEdit<?= $data_task->task_id; ?>">
                                                            <strong><?= $data_task->task_name; ?></strong>
                                                        </a>
                                                    </div>
                                                    <div class="date">
                                                        <div class="dropdown custom-dropdown">
                                                            <div data-toggle="dropdown">More <i class="fa fa-angle-down m-l-5"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <input type="hidden" name="task_id" value="<?php echo $data_task->task_id; ?>">
                                                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modalDelete<?= $data_task->task_id; ?>"><i class="ti-trash"></i> Delete</a>
                                                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modalAddSub<?= $data_task->task_id; ?>"><i class="icon-plus"></i> Subtask</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- subtask -->
                                            <?php
                                            foreach ($data_task->subtask as $sub_task) :
                                                $style_subtask = '';
                                                $checked_subtask = '';
                                                if ($sub_task->subtask_status == 'complete') {
                                                    $style_subtask = 'text-decoration: line-through';
                                                    $checked_subtask = 'checked';
                                                }
                                            ?>

                                                <li>
                                                    <div class="email-list m-t-15">
                                                        <div class="message">
                                                            <div class="col-mail col-mail-2">
                                                                <div class="email-checkbox">

                                                                    <!-- <label class="toggle" for="chk2"></label> -->
                                                                </div>
                                                            </div>
                                                            <div class=" col-mail col-mail-2">
                                                                <div class="subject" style="<?= $style_subtask ?>" id="subtask_name_<?= $sub_task->subtask_id ?>">
                                                                    <input style="margin-left: 10px;" type="checkbox" class="chk-sub" id="chk-sub-<?= $sub_task->subtask_id ?>" data-id="<?= $sub_task->subtask_id ?>" <?= $checked_subtask ?>>
                                                                    <a href="#" style="margin-left: 15px; font-size: 12px;" data-toggle="modal" data-target="#modalEditSub<?= $sub_task->subtask_id; ?>">
                                                                        <?= $sub_task->subtask_name; ?>
                                                                    </a>

                                                                </div>
                                                                <div class="date">
                                                                    <div class="dropdown custom-dropdown">
                                                                        <input type="hidden" name="task_id" value="<?php echo $sub_task->subtask_id; ?>">
                                                                        <a style="margin-left: 15px;" href="javascript:void(0);" data-toggle="modal" data-target="#modalDeleteSub<?= $sub_task->subtask_id; ?>"><i class="ti-trash"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </li>
                                            <?php
                                            endforeach;
                                            ?>
                                            <!-- subtask -->

                                        <?php endforeach; ?>
                                        <!-- task -->
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
                                        <form action="<?= base_url('index.php/dashboard/today/save') ?>" method="POST" id="form">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Title:</label>
                                                    <input type="text" class="form-control form-control-sm input-default" placeholder="title task" name="task_name" id="task_name_add" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description:</label>
                                                    <textarea class="form-control h-80px" rows="5" placeholder="description" name="task_description" id="task_description" required></textarea>
                                                </div>
                                                <div class="row form-material">
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Set Date</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" name="task_due_date" required> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="m-t-20">Set Reminder</label>
                                                        <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                                            <input type="text" class="form-control" placeholder="hh:mm" name="task_time" id="task_time" required> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Category:</label>
                                                    <select class="form-control" id="sel1" name="task_category_id" required>
                                                        <option value="">-- Choose category --</option>
                                                        <option value="1">Study</option>
                                                        <option value="2">Work</option>
                                                        <option value="3">Sport</option>
                                                        <option value="4">Rest</option>
                                                        <option value="5">Grocery</option>
                                                        <option value="6">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success" id="add_task">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Add-->

                            <!-- Modal Edit-->
                            <?php
                            foreach ($task as $data_task) :
                                /* y/m/d to y-m-d */
                                $var = $data_task->task_due_date;
                                $date = date('m/d/Y', strtotime($var));
                                /* h:i:s to h:i */
                                $var = $data_task->task_time;
                                $time = date("H:i", strtotime($var));
                            ?>
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
                                                        <textarea class="form-control h-80px" rows="5" placeholder="description" name="task_description"><?= htmlspecialchars($data_task->task_description); ?></textarea>
                                                    </div>
                                                    <div class="row form-material">
                                                        <div class="col-md-6">
                                                            <label class="m-t-20">Set Date</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" name="task_due_date" value="<?= $date ?>"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="m-t-20">Set Reminder</label>
                                                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                                                <input type="text" class="form-control" name="task_time" value="<?= $time; ?>"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Category:</label>
                                                        <select class="form-control" id="sel1" name="task_category_id">
                                                            <option value="">-- Choose category --</option>
                                                            <option value="1" <?= $data_task->task_category_id == '1' ? ' selected ' : ''; ?>>Study</option>
                                                            <option value="2" <?= $data_task->task_category_id == '2' ? ' selected ' : ''; ?>>Work</option>
                                                            <option value="3" <?= $data_task->task_category_id == '3' ? ' selected ' : ''; ?>>Sport</option>
                                                            <option value="4" <?= $data_task->task_category_id == '4' ? ' selected ' : ''; ?>>Rest</option>
                                                            <option value="5" <?= $data_task->task_category_id == '5' ? ' selected ' : ''; ?>>Grocery</option>
                                                            <option value="6" <?= $data_task->task_category_id == '6' ? ' selected ' : ''; ?>>Others</option>
                                                        </select>
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
                            <!-- Modal Delete -->

                            <!-- Modal Add subtask-->
                            <?php
                            foreach ($task as $data_task) :
                            ?>
                                <form action="<?= base_url() . 'index.php/dashboard/Today/save_subtask' ?>" method="POST">
                                    <div class="modal fade" id="modalAddSub<?= $data_task->task_id; ?>">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add Subtask</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Subtask Name:</label>
                                                        <input type="text" class="form-control input-default" placeholder="subtask" name="sub_task_name">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="subtask_parent_id" value="<?php echo $data_task->task_id; ?>">
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <?php
                            endforeach; ?>
                            <!-- Modal Add subtask-->

                            <!-- Modal Edit subtask-->
                            <?php
                            foreach ($task as $data_task) :
                                foreach ($data_task->subtask as $sub_task) :
                            ?>
                                    <form action="<?= base_url() . 'index.php/dashboard/Today/edit_subtask' ?>" method="POST">
                                        <div class="modal fade" id="modalEditSub<?= $sub_task->subtask_id; ?>">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Subtask</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Subtask Name:</label>
                                                            <input type="text" class="form-control input-default" placeholder="subtask" name="subtask_name" value="<?= $sub_task->subtask_name; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="subtask_id" value="<?php echo $sub_task->subtask_id; ?>">
                                                        <input type="hidden" name="subtask_status" value="<?php echo $sub_task->subtask_status; ?>">
                                                        <input type="hidden" name="subtask_parent_id" value="<?php echo $sub_task->subtask_parent_id; ?>">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                            <?php
                                endforeach;
                            endforeach; ?>
                            <!-- Modal Edit subtask-->

                            <!-- Modal Delete subtask-->
                            <?php
                            foreach ($task as $data_task) :
                                foreach ($data_task->subtask as $sub_task) :
                            ?>
                                    <form action="<?= base_url() . 'index.php/dashboard/Today/delete_subtask' ?>" method="POST">
                                        <div class="modal fade" id="modalDeleteSub<?= $sub_task->subtask_id; ?>">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete Subtask</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure want to delete it?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" name="task_id" value="<?php echo $sub_task->subtask_id; ?>">
                                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                            <?php
                                endforeach;
                            endforeach; ?>

                            <!-- Modal Delete subtask-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->