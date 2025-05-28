{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.admin')
@section('content')
    <h4 class="my-4">Welcome to Deshboard, <span style="color: #727CF5 ; font-size: 30px;">{{Auth::user()->name}}.</span></h4>
    <div class="row">
        <div class="col-lg-12">
             <div class="row">
                    <div class="col-12 col-xl-12 stretch-card">
                        <div class="flex-grow row">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="mb-0 card-title">New Customers</h6>
                                            <div class="mb-2 dropdown">
                                                <button class="p-0 btn" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="eye" class="mr-2 icon-sm"></i> <span
                                                            class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="edit-2" class="mr-2 icon-sm"></i> <span
                                                            class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="trash" class="mr-2 icon-sm"></i> <span
                                                            class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="printer" class="mr-2 icon-sm"></i> <span
                                                            class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="download" class="mr-2 icon-sm"></i> <span
                                                            class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">3,897</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span>+3.3%</span>
                                                        <i data-feather="arrow-up" class="mb-1 icon-sm"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="mb-0 card-title">New Orders</h6>
                                            <div class="mb-2 dropdown">
                                                <button class="p-0 btn" type="button" id="dropdownMenuButton1"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="eye" class="mr-2 icon-sm"></i> <span
                                                            class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="edit-2" class="mr-2 icon-sm"></i> <span
                                                            class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="trash" class="mr-2 icon-sm"></i> <span
                                                            class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="printer" class="mr-2 icon-sm"></i> <span
                                                            class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="download" class="mr-2 icon-sm"></i> <span
                                                            class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">35,084</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-danger">
                                                        <span>-2.8%</span>
                                                        <i data-feather="arrow-down" class="mb-1 icon-sm"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="mb-0 card-title">Growth</h6>
                                            <div class="mb-2 dropdown">
                                                <button class="p-0 btn" type="button" id="dropdownMenuButton2"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="eye" class="mr-2 icon-sm"></i> <span
                                                            class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="edit-2" class="mr-2 icon-sm"></i> <span
                                                            class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="trash" class="mr-2 icon-sm"></i> <span
                                                            class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="printer" class="mr-2 icon-sm"></i> <span
                                                            class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                            data-feather="download" class="mr-2 icon-sm"></i> <span
                                                            class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">89.87%</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span>+2.8%</span>
                                                        <i data-feather="arrow-up" class="mb-1 icon-sm"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-12 col-xl-12 grid-margin stretch-card">
                        <div class="overflow-hidden card">
                            <div class="card-body">
                                <div class="mb-4 d-flex justify-content-between align-items-baseline mb-md-3">
                                    <h6 class="mb-0 card-title">Revenue</h6>
                                    <div class="dropdown">
                                        <button class="p-0 btn" type="button" id="dropdownMenuButton3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="eye" class="mr-2 icon-sm"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="edit-2" class="mr-2 icon-sm"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="trash" class="mr-2 icon-sm"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="printer" class="mr-2 icon-sm"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="download" class="mr-2 icon-sm"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 row align-items-start">
                                    <div class="col-md-7">
                                        <p class="mb-3 text-muted tx-13 mb-md-0">Revenue is the income that a business
                                            has from its normal business activities, usually from the sale of goods and
                                            services to customers.</p>
                                    </div>
                                    <div class="col-md-5 d-flex justify-content-md-end">
                                        <div class="mb-3 btn-group mb-md-0" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-outline-primary">Today</button>
                                            <button type="button"
                                                class="btn btn-outline-primary d-none d-md-block">Week</button>
                                            <button type="button" class="btn btn-primary">Month</button>
                                            <button type="button" class="btn btn-outline-primary">Year</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flot-wrapper">
                                    <div id="flotChart1" class="flot-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2 d-flex justify-content-between align-items-baseline">
                                    <h6 class="mb-0 card-title">Monthly sales</h6>
                                    <div class="mb-2 dropdown">
                                        <button class="p-0 btn" type="button" id="dropdownMenuButton4"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="eye" class="mr-2 icon-sm"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="edit-2" class="mr-2 icon-sm"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="trash" class="mr-2 icon-sm"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="printer" class="mr-2 icon-sm"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="download" class="mr-2 icon-sm"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-4 text-muted">Sales are activities related to selling or the number of
                                    goods or services sold in a given time period.</p>
                                <div class="monthly-sales-chart-wrapper">
                                    <canvas id="monthly-sales-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2 d-flex justify-content-between align-items-baseline">
                                    <h6 class="mb-0 card-title">Cloud storage</h6>
                                    <div class="mb-2 dropdown">
                                        <button class="p-0 btn" type="button" id="dropdownMenuButton5"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="eye" class="mr-2 icon-sm"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="edit-2" class="mr-2 icon-sm"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="trash" class="mr-2 icon-sm"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="printer" class="mr-2 icon-sm"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="download" class="mr-2 icon-sm"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="progressbar1" class="mx-auto"></div>
                                <div class="mt-4 mb-3 row">
                                    <div class="col-6 d-flex justify-content-end">
                                        <div>
                                            <label
                                                class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Total
                                                storage <span
                                                    class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>
                                            <h5 class="mb-0 text-right font-weight-bold">8TB</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label
                                                class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span
                                                    class="p-1 mr-1 rounded-circle bg-primary"></span> Used
                                                storage</label>
                                            <h5 class="mb-0 font-weight-bold">6TB</h5>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block">Upgrade storage</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2 d-flex justify-content-between align-items-baseline">
                                    <h6 class="mb-0 card-title">Inbox</h6>
                                    <div class="mb-2 dropdown">
                                        <button class="p-0 btn" type="button" id="dropdownMenuButton6"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="eye" class="mr-2 icon-sm"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="edit-2" class="mr-2 icon-sm"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="trash" class="mr-2 icon-sm"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="printer" class="mr-2 icon-sm"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="download" class="mr-2 icon-sm"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="#" class="pb-3 d-flex align-items-center border-bottom">
                                        <div class="mr-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-2 text-body">Leonardo Payne</h6>
                                                <p class="text-muted tx-12">12.30 PM</p>
                                            </div>
                                            <p class="text-muted tx-13">Hey! there I'm available{{asset('backend')}}.
                                            </p>
                                        </div>
                                    </a>
                                    <a href="#" class="py-3 d-flex align-items-center border-bottom">
                                        <div class="mr-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-2 text-body">Carl Henson</h6>
                                                <p class="text-muted tx-12">02.14 AM</p>
                                            </div>
                                            <p class="text-muted tx-13">I've finished it! See you so{{asset('backend')}}
                                            </p>
                                        </div>
                                    </a>
                                    <a href="#" class="py-3 d-flex align-items-center border-bottom">
                                        <div class="mr-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-2 text-body">Jensen Combs</h6>
                                                <p class="text-muted tx-12">08.22 PM</p>
                                            </div>
                                            <p class="text-muted tx-13">This template is awesome!</p>
                                        </div>
                                    </a>
                                    <a href="#" class="py-3 d-flex align-items-center border-bottom">
                                        <div class="mr-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-2 text-body">Amiah Burton</h6>
                                                <p class="text-muted tx-12">05.49 AM</p>
                                            </div>
                                            <p class="text-muted tx-13">Nice to meet you</p>
                                        </div>
                                    </a>
                                    <a href="#" class="py-3 d-flex align-items-center border-bottom">
                                        <div class="mr-3">
                                            <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35"
                                                alt="user">
                                        </div>
                                        <div class="w-100">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="mb-2 text-body">Yaretzi Mayo</h6>
                                                <p class="text-muted tx-12">01.19 AM</p>
                                            </div>
                                            <p class="text-muted tx-13">Hey! there I'm available{{asset('backend')}}.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2 d-flex justify-content-between align-items-baseline">
                                    <h6 class="mb-0 card-title">Projects</h6>
                                    <div class="mb-2 dropdown">
                                        <button class="p-0 btn" type="button" id="dropdownMenuButton7"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="eye" class="mr-2 icon-sm"></i> <span
                                                    class="">View</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="edit-2" class="mr-2 icon-sm"></i> <span
                                                    class="">Edit</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="trash" class="mr-2 icon-sm"></i> <span
                                                    class="">Delete</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="printer" class="mr-2 icon-sm"></i> <span
                                                    class="">Print</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="download" class="mr-2 icon-sm"></i> <span
                                                    class="">Download</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover">
                                        <thead>
                                            <tr>
                                                <th class="pt-0">#</th>
                                                <th class="pt-0">Project Name</th>
                                                <th class="pt-0">Start Date</th>
                                                <th class="pt-0">Due Date</th>
                                                <th class="pt-0">Status</th>
                                                <th class="pt-0">Assign</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>NobleUI jQuery</td>
                                                <td>01/01/2021</td>
                                                <td>26/04/2021</td>
                                                <td><span class="badge badge-danger">Released</span></td>
                                                <td>Leonardo Payne</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>NobleUI Angular</td>
                                                <td>01/01/2021</td>
                                                <td>26/04/2021</td>
                                                <td><span class="badge badge-success">Review</span></td>
                                                <td>Carl Henson</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>NobleUI ReactJs</td>
                                                <td>01/05/2021</td>
                                                <td>10/09/2021</td>
                                                <td><span class="badge badge-info-muted">Pending</span></td>
                                                <td>Jensen Combs</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>NobleUI VueJs</td>
                                                <td>01/01/2021</td>
                                                <td>31/11/2021</td>
                                                <td><span class="badge badge-warning">Work in Progress</span>
                                                </td>
                                                <td>Amiah Burton</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>NobleUI Laravel</td>
                                                <td>01/01/2021</td>
                                                <td>31/12/2021</td>
                                                <td><span class="text-white badge badge-danger-muted">Coming soon</span>
                                                </td>
                                                <td>Yaretzi Mayo</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>NobleUI NodeJs</td>
                                                <td>01/01/2021</td>
                                                <td>31/12/2021</td>
                                                <td><span class="badge badge-primary">Coming soon</span></td>
                                                <td>Carl Henson</td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom">3</td>
                                                <td class="border-bottom">NobleUI EmberJs</td>
                                                <td class="border-bottom">01/05/2021</td>
                                                <td class="border-bottom">10/11/2021</td>
                                                <td class="border-bottom"><span
                                                        class="badge badge-info-muted">Pending</span></td>
                                                <td class="border-bottom">Jensen Combs</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
        </div>
    </div>
@endsection