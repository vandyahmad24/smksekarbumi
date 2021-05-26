@extends('layouts.admin')
@section('title','Halaman Admin SMK Sekar Bumi Nusantara')
@section('content')

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>Dashboard</h3>
        </div>

        <div class="col-auto ml-auto text-right mt-n1">
            <span class="dropdown mr-2">
                <button class="btn btn-light bg-white shadow-sm dropdown-toggle" id="day"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="align-middle mt-n1" data-feather="calendar"></i> Today
                </button>
                <div class="dropdown-menu" aria-labelledby="day">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </span>

            <button class="btn btn-primary shadow-sm">
                <i class="align-middle" data-feather="filter">&nbsp;</i>
            </button>
            <button class="btn btn-primary shadow-sm">
                <i class="align-middle" data-feather="refresh-cw">&nbsp;</i>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card illustration flex-fill">
                <div class="card-body p-0 d-flex flex-fill">
                    <div class="row no-gutters w-100">
                        <div class="col-6">
                            <div class="illustration-text p-3 m-1">
                                <h4 class="illustration-text">Welcome Back, Chris!</h4>
                                <p class="mb-0">AppStack Dashboard</p>
                            </div>
                        </div>
                        <div class="col-6 align-self-end text-right">
                            <img src="img/illustrations/customer-support.png" alt="Customer Support"
                                class="img-fluid illustration-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">$ 24.300</h3>
                            <p class="mb-2">Total Earnings</p>
                            <div class="mb-0">
                                <span class="badge badge-soft-success mr-2"> <i
                                        class="mdi mdi-arrow-bottom-right"></i> +5.35% </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <i class="align-middle text-success" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">43</h3>
                            <p class="mb-2">Pending Orders</p>
                            <div class="mb-0">
                                <span class="badge badge-soft-danger mr-2"> <i
                                        class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <i class="align-middle text-danger" data-feather="shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">$ 18.700</h3>
                            <p class="mb-2">Total Revenue</p>
                            <div class="mb-0">
                                <span class="badge badge-soft-success mr-2"> <i
                                        class="mdi mdi-arrow-bottom-right"></i> +8.65% </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="stat">
                                <i class="align-middle text-info" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Sales / Revenue</h5>
                </div>
                <div class="card-body d-flex w-100">
                    <div class="align-self-center chart chart-lg">
                        <canvas id="chartjs-dashboard-bar"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <span class="badge badge-info float-right">Today</span>
                    <h5 class="card-title mb-0">Daily feed</h5>
                </div>
                <div class="card-body">
                    <div class="media">
                        <img src="img/avatars/avatar-5.jpg" width="36" height="36"
                            class="rounded-circle mr-2" alt="Ashley Briggs">
                        <div class="media-body">
                            <small class="float-right text-navy">5m ago</small>
                            <strong>Ashley Briggs</strong> started following <strong>Stacie
                                Hall</strong><br />
                            <small class="text-muted">Today 7:51 pm</small><br />

                        </div>
                    </div>

                    <hr />
                    <div class="media">
                        <img src="img/avatars/avatar.jpg" width="36" height="36"
                            class="rounded-circle mr-2" alt="Chris Wood">
                        <div class="media-body">
                            <small class="float-right text-navy">30m ago</small>
                            <strong>Chris Wood</strong> posted something on <strong>Stacie
                                Hall</strong>'s timeline<br />
                            <small class="text-muted">Today 7:21 pm</small>

                            <div class="border text-sm text-muted p-2 mt-1">
                                Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem
                                quam semper libero, sit amet adipiscing...
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="media">
                        <img src="img/avatars/avatar-4.jpg" width="36" height="36"
                            class="rounded-circle mr-2" alt="Stacie Hall">
                        <div class="media-body">
                            <small class="float-right text-navy">1h ago</small>
                            <strong>Stacie Hall</strong> posted a new blog<br />

                            <small class="text-muted">Today 6:35 pm</small>
                        </div>
                    </div>

                    <hr />
                    <a href="#" class="btn btn-primary btn-block">Load more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Calendar</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="chart">
                            <div id="datetimepicker-dashboard"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4 d-none d-xl-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Weekly sales</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="py-3">
                            <div class="chart chart-xs">
                                <canvas id="chartjs-dashboard-pie"></canvas>
                            </div>
                        </div>

                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>Source</th>
                                    <th class="text-right">Revenue</th>
                                    <th class="text-right">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fas fa-square-full text-primary"></i> Direct</td>
                                    <td class="text-right">$ 2602</td>
                                    <td class="text-right text-success">+43%</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-square-full text-warning"></i> Affiliate</td>
                                    <td class="text-right">$ 1253</td>
                                    <td class="text-right text-success">+13%</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-square-full text-danger"></i> E-mail</td>
                                    <td class="text-right">$ 541</td>
                                    <td class="text-right text-success">+24%</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-square-full text-dark"></i> Other</td>
                                    <td class="text-right">$ 1465</td>
                                    <td class="text-right text-success">+11%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
            <div class="card flex-fill w-100">
                <div class="card-header">
                    <div class="card-actions float-right">
                        <div class="dropdown show">
                            <a href="#" data-toggle="dropdown" data-display="static">
                                <i class="align-middle" data-feather="more-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Appointments</h5>
                </div>
                <div class="card-body">
                    <ul class="timeline">
                        <li class="timeline-item">
                            <strong>Chat with Carl and Ashley</strong>
                            <span class="float-right text-muted text-sm">30m ago</span>
                            <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet
                                nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris...</p>
                        </li>
                        <li class="timeline-item">
                            <strong>The big launch</strong>
                            <span class="float-right text-muted text-sm">2h ago</span>
                            <p>Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer
                                eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper
                                ipsum rutrum
                                nunc...</p>
                        </li>
                        <li class="timeline-item">
                            <strong>Coffee break</strong>
                            <span class="float-right text-muted text-sm">3h ago</span>
                            <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet,
                                leo. Maecenas malesuada...</p>
                        </li>
                        <li class="timeline-item">
                            <strong>Chat with team</strong>
                            <span class="float-right text-muted text-sm">30m ago</span>
                            <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet
                                nec, imperdiet iaculis, ipsum...</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card flex-fill">
        <div class="card-header">
            <div class="card-actions float-right">
                <div class="dropdown show">
                    <a href="#" data-toggle="dropdown" data-display="static">
                        <i class="align-middle" data-feather="more-horizontal"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <h5 class="card-title mb-0">Latest Projects</h5>
        </div>
        <table id="datatables-dashboard-projects" class="table table-striped my-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="d-none d-xl-table-cell">Start Date</th>
                    <th class="d-none d-xl-table-cell">End Date</th>
                    <th>Status</th>
                    <th class="d-none d-md-table-cell">Assignee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Project Apollo</td>
                    <td class="d-none d-xl-table-cell">01/01/2018</td>
                    <td class="d-none d-xl-table-cell">31/06/2018</td>
                    <td><span class="badge badge-success">Done</span></td>
                    <td class="d-none d-md-table-cell">Carl Jenkins</td>
                </tr>
                <tr>
                    <td>Project Fireball</td>
                    <td class="d-none d-xl-table-cell">01/01/2018</td>
                    <td class="d-none d-xl-table-cell">31/06/2018</td>
                    <td><span class="badge badge-danger">Cancelled</span></td>
                    <td class="d-none d-md-table-cell">Bertha Martin</td>
                </tr>
                <tr>
                    <td>Project Hades</td>
                    <td class="d-none d-xl-table-cell">01/01/2018</td>
                    <td class="d-none d-xl-table-cell">31/06/2018</td>
                    <td><span class="badge badge-success">Done</span></td>
                    <td class="d-none d-md-table-cell">Stacie Hall</td>
                </tr>
                <tr>
                    <td>Project Nitro</td>
                    <td class="d-none d-xl-table-cell">01/01/2018</td>
                    <td class="d-none d-xl-table-cell">31/06/2018</td>
                    <td><span class="badge badge-warning">In progress</span></td>
                    <td class="d-none d-md-table-cell">Carl Jenkins</td>
                </tr>
                <tr>
                    <td>Project Phoenix</td>
                    <td class="d-none d-xl-table-cell">01/01/2018</td>
                    <td class="d-none d-xl-table-cell">31/06/2018</td>
                    <td><span class="badge badge-success">Done</span></td>
                    <td class="d-none d-md-table-cell">Bertha Martin</td>
                </tr>
                <tr>
                    <td>Project X</td>
                    <td class="d-none d-xl-table-cell">01/01/2018</td>
                    <td class="d-none d-xl-table-cell">31/06/2018</td>
                    <td><span class="badge badge-success">Done</span></td>
                    <td class="d-none d-md-table-cell">Stacie Hall</td>
                </tr>
                <tr>
                    <td>Project Romeo</td>
                    <td class="d-none d-xl-table-cell">01/01/2018</td>
                    <td class="d-none d-xl-table-cell">31/06/2018</td>
                    <td><span class="badge badge-success">Done</span></td>
                    <td class="d-none d-md-table-cell">Ashley Briggs</td>
                </tr>
                <tr>
                    <td>Project Wombat</td>
                    <td class="d-none d-xl-table-cell">01/01/2018</td>
                    <td class="d-none d-xl-table-cell">31/06/2018</td>
                    <td><span class="badge badge-warning">In progress</span></td>
                    <td class="d-none d-md-table-cell">Bertha Martin</td>
                </tr>
                <tr>
                    <td>Project Zircon</td>
                    <td class="d-none d-xl-table-cell">01/01/2018</td>
                    <td class="d-none d-xl-table-cell">31/06/2018</td>
                    <td><span class="badge badge-danger">Cancelled</span></td>
                    <td class="d-none d-md-table-cell">Stacie Hall</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection