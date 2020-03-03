@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
    @if(Auth::user()->type== 'Admin')
    <div class="row">
                <div class="col-12">
                    <div class="card bg-gradient-default shadow">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                                    <h2 class="text-white mb-0">Requests Statistics</h2>
                                </div>
                                <div class="col">
                                    <ul class="nav nav-pills justify-content-end">
                                        <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix=" ">
                                            <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                                <span class="d-none d-md-block">Month</span>
                                                <span class="d-md-none">M</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix=" ">
                                            <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                                <span class="d-none d-md-block">Week</span>
                                                <span class="d-md-none">W</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
             </div> 
             <div class="col-xl-4 pt-4">
                    <div class="card shadow">
                        <div class="card-header bg-transparent">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                                    <h2 class="mb-0">Total orders</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Chart -->
                            <div class="chart">
                                <canvas id="chart-orders" class="chart-canvas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(Auth::user()->type == 'User')
            <div class="row">
                <div class="col-12">
                    <BR>
                    <h1><strong>USERS DASHBOARD<strong></h1>
                    <BR>
                    <BR>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">SEND REQUEST</button>
                      
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel"><strong>Request Maintenance Equipment Form<Strong></h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">DATE</label>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
                                        </div>
                                        <label for="recipient-name" class="col-form-label">RM. NO.</label>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control datepicker" placeholder="Select date" type="text" value="00000">
                                        </div>


                                        <label for="recipient-name" class="col-form-label">COLLEGE OR OFFICE</label>
                                            <div class="input-group mb-3" input type="text">
                                                <select class="custom-select" id="input-college"  name="college">
                                                    <option selected">Choose...</option>
                                                    <option value="Admin">ICS</option>
                                                    <option value="Client">CET</option>
                                                    <option value="Secretary">CTE</option>
                                                    <option value="Technician">CPERS</option>
                                                </select>
                                            </div>
                                            <label for="recipient-name" class="col-form-label">EQUIPMENT UNIT MODEL</label>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class=""></i></span>
                                            </div>
                                            <input class="form-control datepicker" placeholder="EQUIPMENT UNIT MODEL" type="text" value="">
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Send Request</button>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        @endif

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush