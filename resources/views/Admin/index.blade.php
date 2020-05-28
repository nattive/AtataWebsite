@extends('Admin.layouts.app')

@section('content')
{{-- <div class="container">
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                            <h6 class="text-white">Dashboard</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                            <h6 class="text-white">Charts</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                            <h6 class="text-white">Widgets</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                            <h6 class="text-white">Tables</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Active Promotions</h4>
                        </div>
                        <div class="comment-widgets scrollable">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2"><img src=" ../../assets/images/users/1.jpg" alt="user" width="50"
                                        class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">Xmas bonanza</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                        and type setting industry. </span>
                                    <div class="comment-footer">
                                        <div class="d-flex">
                                            <div>
                                                <small class="text-muted ">Products in Promotion</small>
                                                <small class="text-muted ">Ends in April 14, 2016 00:00:00</small>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm">End
                                                    Promotion</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">To Do List</h4>
                            <div class="todo-widget scrollable" style="height:450px;">
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label todo-label" for="customCheck">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the
                                                    printing and typesetting industry.</span> <span
                                                    class="badge badge-pill badge-danger float-right">Today</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee"><img class="rounded-circle" width="40"
                                                    src="../../assets/images/users/1.jpg" alt="user"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Steave"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40"
                                                    src="../../assets/images/users/2.jpg" alt="user"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Jessica"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40"
                                                    src="../../assets/images/users/3.jpg" alt="user"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Priyanka"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40"
                                                    src="../../assets/images/users/4.jpg" alt="user"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label todo-label" for="customCheck1">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the
                                                    printing</span><span
                                                    class="badge badge-pill badge-primary float-right">1 week
                                                </span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label todo-label" for="customCheck2">
                                                <span class="todo-desc">Give Purchase report to</span> <span
                                                    class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee"><img class="rounded-circle" width="40"
                                                    src="../../assets/images/users/3.jpg" alt="user"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Priyanka"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40"
                                                    src="../../assets/images/users/4.jpg" alt="user"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label todo-label" for="customCheck3">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the
                                                    printing </span> <span
                                                    class="badge badge-pill badge-warning float-right">2
                                                    weeks</span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label todo-label" for="customCheck4">
                                                <span class="todo-desc">Give Purchase report to</span> <span
                                                    class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee"><img class="rounded-circle" width="40"
                                                    src="../../assets/images/users/3.jpg" alt="user"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Priyanka"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40"
                                                    src="../../assets/images/users/4.jpg" alt="user"
                                                    data-toggle="tooltip" data-placement="top" title=""
                                                    data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-0">Recent Open Ticket(s)</h4>
                            <div class="m-t-20">
                                <div class="card card-info ticket-card">
                                    <div class="card-heading d-flex justify-content-between align-items-center">
                                        <div class="ticket-title">
                                            Ticket Code
                                        </div>
                                        <div class="ticket-time">
                                            <p>MAY 7, 2020</p>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="d-flex no-block">
                                            <div class="ticket-details">
                                                <div class="ticket-user-name">User's Name</div>
                                                <div class="ticket-subject">Ticket's subject</div>
                                                <div class="ticket-body">
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        inventore ipsum nostrum repudiandae? Officia neque provident
                                                        laborum?</p>
                                                </div>
                                            </div>

                                            <hr class="my-4">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-primary btn-flat">View</button>
                                            <button class="btn btn-success btn-flat">Mark as Open</button>
                                            <button class="btn btn-delete btn-flat">Delete Ticket</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card new -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-0">News Updates</h4>
                        </div>
                        <ul class="list-style-none">
                            <li class="d-flex no-block card-body">
                                <i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.</a>
                                    <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">20</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-gift w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Congratulation Maruti, Happy
                                        Birthday</a>
                                    <span class="text-muted">many many happy returns of the day</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">11</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-plus w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                                    <span class="text-muted">But already everything was solved. It will ...</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">19</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-leaf w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Envato approved Maruti Admin
                                        template</a>
                                    <span class="text-muted">i am very happy to approved by TF</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">20</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-question-circle w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0"> I am alwayse here if you have any
                                        question</a>
                                    <span class="text-muted">we glad that you choose our template</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">15</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<App></App>
@endsection