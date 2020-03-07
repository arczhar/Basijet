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
        @elseif(Auth::user()->type == 'Client')
            <div class="row">
                <div class="col-12">
                    <h1>Client's Homepage </h1>
                    {{-- <div class="col-xl-8"> --}}
                        <div class="card">
                          <div class="card-header border-0">
                            <div class="row align-items-center">
                              <div class="col">
                                <h3 class="mb-0">Page visits</h3>
                              </div>
                              <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                              </div>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <!-- Projects table -->
                            <div class="table-responsive">
                              <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col" class="sort" data-sort="name">Service Type</th>
                                    <th scope="col" class="sort" data-sort="property">Property</th>
                                    <th scope="col" class="sort" data-sort="property-number">Property Number</th>
                                    <th scope="col">Status</th>
                                  </tr> 
                                </thead>
                                <tbody class="list">
                                  <tr>
                                    <th scope="row">
                                      <div class="media align-items-center">
                                        <div class="media-body">
                                          <span class="name mb-0 text-sm">Cleaning</span>
                                        </div>
                                      </div>
                                    </th>
                                    <td class="property">
                                     Electrifan
                                    </td>
                
                                    <td>
                                      <td>
                                        <span class="badge badge-dot mr-4">
                                          <i class="bg-warning"></i>
                                          <span class="property-number">Pending</span>
                                        </span>
                                      </td>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">
                                      <div class="media align-items-center">
                                        <div class="media-body">
                                          <span class="name mb-0 text-sm">Repair</span>
                                        </div>
                                      </div>
                                    </th>
                                    <td class="property">
                                      Computer
                                    </td>
                
                                    <td>
                                      <td>
                                        <span class="badge badge-dot mr-4">
                                          <i class="bg-success"></i>
                                          <span class="property-number">Completed</span>
                                        </span>
                                      </td>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">
                                      <div class="media align-items-center">
                                        <div class="media-body">
                                          <span class="name mb-0 text-sm">Transfer</span>
                                        </div>
                                      </div>
                                    </th>
                                    <td class="property">
                                      Refrigerator
                                    </td>
                                    <td>
                
                                    </td>
                                    <td> 
                                      <span class="badge badge-dot mr-4">
                                        <i class="bg-primary"></i>
                                        <span class="property-number">Processing</span>
                                      </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">
                                      <div class="media align-items-center">
                                        <div class="media-body">
                                          <span class="name mb-0 text-sm">Repair</span>
                                        </div>
                                      </div>
                                    </th>
                                    <td class="property">
                                      Aircon
                                    </td>
                                    <td>
                
                                    </td>
                                    <td>
                                      <span class="badge badge-dot mr-4">
                                        <i class="bg-yellow"></i>
                                        <span class="property-number">Waiting Confirmation Delivery</span>
                                      </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">
                                      <div class="media align-items-center">
                                        <div class="media-body">
                                          <span class="name mb-0 text-sm">Repair</span>
                                        </div>
                                      </div>
                                    </th>
                                    <td class="property">
                                     Aircon
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                      <span class="badge badge-dot mr-4">
                                        <i class="bg-primary"></i>
                                        <span class="property-number">Approved</span>
                                      </span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>


                     




                </div>
            </div>
            
        @elseif(Auth::user()->type == 'Secretary')
            <div class="row">
                <div class="col-12">
                    <h1>Secretary's dashboard</h1>
                </div>
            </div> 
        @elseif(Auth::user()->type == 'Technician')
            <div class="row">
                <div class="col-12">
                    <h1>Technician's dashboard</h1>
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