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
                                            <h3 class="mb-1">Today Task</h3>
                                            <p>Thu 26 August</p>
                                            <a href="#" data-toggle="modal" data-target="#modalAdd"> <h4 class="m-0"><i class="icon-plus"></i> Add Task</h4></a>
                                            
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
                                    <div class="email-list m-t-15">
                                        <div class="message">
                                            <a href="email-read.html">
                                                <div class="col-mail col-mail-1">
                                                    <div class="email-checkbox">
                                                        <input type="checkbox" id="chk2">
                                                        <label class="toggle" for="chk2"></label>
                                                    </div><span class="star-toggle ti-star"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <div class="subject">My Todo List </div>
                                                    </a>
                                                    <div class="date">
                                                        <div class="dropdown custom-dropdown">
                                                            <div data-toggle="dropdown">More <i class="fa fa-angle-down m-l-5"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEdit"><i class="icon-note"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDelete"><i class="ti-trash"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="message">
                                            <a href="email-read.html">
                                                <div class="col-mail col-mail-1">
                                                    <div class="email-checkbox">
                                                        <input type="checkbox" id="chk2">
                                                        <label class="toggle" for="chk2"></label>
                                                    </div><span class="star-toggle ti-star"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <div class="subject">My Todo List </div>
                                                    </a>
                                                    <div class="date">
                                                        <div class="dropdown custom-dropdown">
                                                            <div data-toggle="dropdown">More <i class="fa fa-angle-down m-l-5"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEdit"><i class="icon-note"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDelete"><i class="ti-trash"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="message">
                                            <a href="email-read.html">
                                                <div class="col-mail col-mail-1">
                                                    <div class="email-checkbox">
                                                        <input type="checkbox" id="chk2">
                                                        <label class="toggle" for="chk2"></label>
                                                    </div><span class="star-toggle ti-star"></span>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <div class="subject">My Todo List </div>
                                                    </a>
                                                    <div class="date">
                                                        <div class="dropdown custom-dropdown">
                                                            <div data-toggle="dropdown">More <i class="fa fa-angle-down m-l-5"></i>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEdit"><i class="icon-note"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalDelete"><i class="ti-trash"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <div class="form-group">
                                                        <label>Title:</label>
                                                        <input type="text" class="form-control form-control-sm input-default" placeholder="title task">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description:</label>
                                                        <textarea class="form-control h-80px" rows="5" placeholder="description"></textarea>
                                                    </div>
                                                    <div class="row form-material">
                                                        <div class="col-md-6">
                                                            <label class="m-t-20">Set Date</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="m-t-20">Set Reminder</label>
                                                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                                                <input type="text" class="form-control" value="13:14"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Category:</label>
                                                        <select class="form-control" id="sel1">
                                                            <option>-- Choose category --</option>
                                                            <option>Work</option>
                                                            <option>Sport</option>
                                                            <option>Study</option>
                                                            <option>Rest</option>
                                                            <option>Grocery</option>
                                                            <option>Others</option>
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
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Add-->

                                    <!-- Modal Edit-->
                                    <div class="modal fade" id="modalEdit">
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
                                                        <input type="text" class="form-control form-control-sm input-default" placeholder="title task">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description:</label>
                                                        <textarea class="form-control h-80px" rows="5" placeholder="description"></textarea>
                                                    </div>
                                                    <div class="row form-material">
                                                        <div class="col-md-6">
                                                            <label class="m-t-20">Set Date</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="m-t-20">Set Reminder</label>
                                                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                                                <input type="text" class="form-control" value="13:14"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Category:</label>
                                                        <select class="form-control" id="sel1">
                                                            <option>-- Choose category --</option>
                                                            <option>Work</option>
                                                            <option>Sport</option>
                                                            <option>Study</option>
                                                            <option>Rest</option>
                                                            <option>Grocery</option>
                                                            <option>Others</option>
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
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Edit-->
                                    <!-- Modal Delete-->
                                    <div class="modal fade" id="modalDelete">
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
                                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Delete-->
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
        