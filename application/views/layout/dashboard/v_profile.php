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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img alt="" class="rounded-circle mt-4" src="<?php echo base_url('assets/dashboard/images/users/5.jpg'); ?>">
                                    <h4 class="card-widget__title text-dark mt-3">Username</h4>
                                    <p class="text-muted">user@gmail.com</p>
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
                                    <div class="stat-digit gradient-3-text">8500</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Pending</div>
                                    <div class="stat-digit gradient-4-text">7800</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Complete</div>
                                    <div class="stat-digit gradient-2-text"> 500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add New User Start -->
                                <form  action="" method="post" enctype="multipart/form-data">
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
                                                        <div class="form-group">
                                                            <input type="file" name="filefoto">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="nama" class="form-control" placeholder="Username" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password2" class="form-control" placeholder="Confirm Password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="update_profile">Save changes</button>
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