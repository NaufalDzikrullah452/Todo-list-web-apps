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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Performance</h4>
                                <!-- Nav tabs -->
                                <div class="default-tab">
                                    <ul class="nav nav-tabs mb-3" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#category">Category</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#monthly">Monthly</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                    <div class="tab-pane fade show active" id="category" role="tabpanel">
                                            <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1"> By Category </h4>
                                        </div>

                                    </div>
                                    <!-- Pie Chart -->
                                    <div id="category_task"></div>
                                    </div>

                                    <div class="tab-pane fade" id="monthly">
                                            <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1"> By Monthly </h4>
                                        </div>

                                    </div>
                                    <!-- Line Chart -->
                                    <div id="monthly_task"></div>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--**********************************
            Content body start
        ***********************************-->
        