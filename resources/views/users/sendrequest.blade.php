@extends('layouts.app')
@section('content')
    @include('layouts.headers.cards')   
    <div class="container-fluid mt--7">

    @if(Auth::user()->type== 'Client')
            <div class="row">
                <div class="col-12">
                    <h1>Client's Send Request </h1>
                    {{-- <div class="col-xl-8"> --}}
                        <div class="card">
                            <div class="card-header border-0">               
                                {{--Modal--}}
                                <div>
                                  @if($errors ->any())
                                    <div class="col-12 alert alert-danger">
                                        <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                              
                                        </div>
                                          @endforeach
                                        </ul>
                                  @else    
                                    <div class="col-12 alert alert-success alert-dismissable fade show" role="alert">
                                       Your Request has been<strong> sucessfully</strong> sent. Please wait for the <strong> approval</strong>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                  @endif
                                </div>
                                
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title" id="exampleModalLabel">Request Form</h1>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{ route('request.store') }}" >  
                                             @csrf
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                              <div class="form-group">
                                                                
                                                                <input type="date" class="form-control"  name="date" required>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" class="form-control"  placeholder="RM NO."  name="rmno" required>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                              <div class="form-group">
                                                                  <div class="input-group mb-4">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class=""></i></span>
                                                                    </div>
                                                                      <input type="text" class="form-control" placeholder="College"  name="college"required>
                                                                  </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group">
                                                                <div class="input-group mb-4">
                                                                    <input type="text" class="form-control"  placeholder="Equipment/Unit/Model" name="equipment"required>
                                                                  <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="#"></i></span>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"  placeholder="Property Number" name="propertynumber"required>
                                                            </div>
                                                          </div>
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"  placeholder="Quantity/Unit" min="1" max="10" name="quantity"required>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <h3 class="modal-title" id="exampleModalLabel">Nature of Request</h3>
                                                        <div class="row">
                                                            <div class="col-md-8"> 
                                                              <input type="radio" name="service" value="repair" checked> Repair
                                                              <input type="radio" name="service" value="cleaning" checked> Cleaning
                                                              <input type="radio" name="service" value="wiring" checked> Wiring
                                                              <br>
                                                              <label for="others">Others</label>
                                                            </div>
                                                          </div>
                                                        <br>
                                                        <div class="modal-footer">                         
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Send Request</button>                                 
                                                      </div>
                                                    </form>
                                                </div>
                                            </form>                                            
                                        </div>
                                    </div>
                                </div>                            
                                {{--table--}}                                      
                                            <div class="card">
                                              <div class="card-header border-0">
                                                <div class="row align-items-center">
                                                  <div class="col">
                                                    <h3 class="mb-0">My Request</h3>
                                                  </div>
                                                  <div class="col text-right">
                                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Request</button>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="table-responsive">
                                                <!-- Projects table -->
                                                <div class="table-responsive">
                                                  <table class="table align-items-center table-flush">
                                                    <thead class="thead-light">
                                                      <tr>
                                                        <th scope="col" class="sort" data-sort="name">Date</th>
                                                        <th scope="col" class="sort" data-sort="property">RM NO</th>
                                                        <th scope="col" class="sort" data-sort="college">College</th>
                                                        <th scope="col" class="sort" data-sort="equipment">Equipment/Unit/Model</th>
                                                        <th scope="col" class="sort" data-sort="property">Property No.</th>
                                                        <th scope="col" class="sort" data-sort="quantity">Quantity</th>
                                                        <th scope="col" class="sort" data-sort="request">Nature of Request</th>
                                                        <th scope="col" class="sort" data-sort="request">Status</th>
                                                      </tr> 
                                                    </thead>
                                                    <tbody class="list">
                                                      @foreach ($request as $row)
                                                        <tr>
                                                          <td>{{ $row->date}}</td>
                                                          <td>{{ $row->rmno}}</td>                
                                                          <td>{{ $row->college}}</td>
                                                          <td>{{ $row->equipment}}</td>
                                                          <td>{{ $row->propertynumber}}</td>
                                                          <td>{{ $row->quantity}}</td>
                                                          <td>{{ $row->service}}</td>
                                                          <td>{{ $row->status}}</td>
                                                        </tr>  
                                                       @endforeach           
                                                    </tbody>
                                                  </table>
                                                </div>
                                              </div>
                                            </div>
                        </div>
                    </div>                      
                </div>                          
        @endif
        
    </div>
        @include('layouts.footers.auth')
    </div>  
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush