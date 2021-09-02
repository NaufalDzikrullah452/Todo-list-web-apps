<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $title ?></a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">

                <div class="row">
                    <?php if ($this->session->flashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?= $this->session->flashdata('error') ?>
                        </div>
                    <?php elseif ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?= $this->session->flashdata('success') ?>
                        </div>
                    <?php endif;?>
                </div>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <?php if($user->user_picture != "") : ?>
                                        <img src="<?= base_url('./uploads/' . $user->user_picture) ?>" alt="profile picture" class="rounded-circle mt-4" width="128px" height="128px"/>
                                    <?php else: ?>
                                        <img alt="" class="rounded-circle mt-4" src="<?php echo base_url('assets/dashboard/images/users/5.jpg'); ?>">
                                    <?php endif;?>
                                    <h4 class="card-widget__title text-dark mt-3"><?= $user->user_username ?></h4>
                                    <p class="text-muted"><?= $user->user_email ?></p>
                                    <a class="btn gradient-4 btn-lg border-0 btn-rounded px-5" data-toggle="modal" data-target="#modalEdit" href="javascript:void()">Change</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">All Task</div>
                                    <div class="stat-digit gradient-3-text"><?= $allTasksCount[0]->total ? $allTasksCount[0]->total  : 0 ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Pending</div>
                                    <div class="stat-digit gradient-4-text"><?= $pendingTasksCount[0]->total ? $pendingTasksCount[0]->total  : 0 ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Complete</div>
                                    <div class="stat-digit gradient-2-text"><?= $completedTasksCount[0]->total ? $completedTasksCount[0]->total  : 0 ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add New User Start -->
                            <form  action="<?= site_url('index.php/dashboard/profile/update')?>" method="post" enctype="multipart/form-data" id="form-profile">
                                <div class="modal fade" id="modalEdit">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Profile</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label><strong>Upload Photo</strong></label>
                                                        <small class="text-muted">Max Size: 2 MB. File type: jpg/png</small>
                                                        <div class="form-group">
                                                            <input type="file" name="filefoto" id="filefoto" accept="image/*">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="nama" class="form-control" placeholder="Username" required value="<?= $this->session->userdata('user_username')?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-control" placeholder="Email" required value="<?= $this->session->userdata('user_email')?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" onchange='check_pass();'>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password2" id="confirm_password" class="form-control" placeholder="Confirm Password" onchange='check_pass();'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="update_profile" name="submit" form="form-profile">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                             </form>
                             <!-- Modal Add New User End -->
                
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->