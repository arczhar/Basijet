@extends('layouts.app')
@section('content')
@include('layouts.headers.cards')   
<div class="container-fluid mt--7">
  {{--Client Side--}}
  @if(Auth::user()->type=='Client')
    <div class="row">
      <div class="col-12">        
        <div class="card">
          <div class="card-header border-0">
            {{--Message--}}
              @if($errors ->any())
                <div class="col-12 alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{error}}</li>
                    @endforeach
                  </ul>
                </div>
              @else
                <div class="col-12 alert alert-success alert-dismissable fade show" role="alert">Your Request has been<strong>sucessfully</strong> sent. Please wait for the <strong> approval</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">
                    <span aria-hidden="true">
                      &times;
                    </span>
                  </button>
                </div>
              @endif
                {{-- Modal Send Request Form --}}
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Request Form</h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button> 
                      </div>
                      <form  method="POST" action="{{ route('request.store') }}">
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
                                      <input type="text" class="form-control" placeholder="College"  name="college"required>
                                    </div> 
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-group mb-4">
                                      <input type="text" class="form-control"  placeholder="Equipment/Unit/Model" name="equipment"required>
                                      <div class="input-group-append">
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
                                    <input type="number" class="form-control"  placeholder="Quantity/Unit" min="1" max="10" name="quantity"require>
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
                                  <label for="others" checked></label>
                                </div>
                              </div>
                              <br>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close</button>
                                <button type="submit" class="btn btn-primary">Send Request</button>
                              </div>
                            </form>
                          </div>{{--End Modal Body--}}
                      </form> 
                    </div> {{--End Modal Content--}} 
                  </div>{{--End Modal Dialog--}} 
                </div>{{--End Modal--}} 
                  {{-- End Modal Send Request Form --}}
                {{--Client CARD--}}
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
                      <br>
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
                  </div> {{--End Client Card--}}
          </div>{{--End Client Card Header--}}
        </div>{{--End Client Card--}}
      </div>{{--End Client col-12--}}
    </div>{{--End Client ROW--}}   
    {{--------END     CLIENT    SIDE-------}} 
    {{--Admin Side--}}          
  @else(Auth::user()->type=='Admin') 
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0"><center>Pending Request</center></h3>
            </div>
          </div>
        </div>
          {{-- Modal Approve Form--}}
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editModal">
            <div  class="modal-dialog modal-lg">
              <div class="modal-content">
                <div  class="modal-header">
                  <h1 class="modal-title" id="exampleModalLabel">Confirm Form</h1>
                </div>
                <form action="/Resquest" method="POST" id="editForm">
                  {{csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">    
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Date:</span>
                              </div>
                                <input type="text" id="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Room No:</span>
                              </div>
                              <input type="text" id="rmno" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Office:</span>
                              </div>
                              <input type="text" id="college"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroup-sizing-default">Equipment:</span>
                                </div>
                                <input type="text" id="equipment" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Property No:</span>
                              </div>
                              <input type="text" id="propertynumber" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                          <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroup-sizing-default">Quantity:</span>
                                </div>
                                <input type="text" id="quantity" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                      <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Service:</span>
                          </div>
                          <input type="text" id="service" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                      </div>
                      <br>
                      <h2><center>Select Technician</center></h2>
                      <h4><center>Available Today</h4>
                        <div class="container">
                          <div class="row">
                            <div class="col-12">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Select</th>
                                    <th scope="col">Employee Name</th>
                                    <th scope="col">Field</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">1</label>
                                      </div>
                                    </td>
                                    <td>Arczhar Mummuh</td>
                                    <td>Soccer Field</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">1</label>
                                      </div>
                                    </td>
                                    <td>Arczhar Mummuh</td>
                                    <td>Soccer Field</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">1</label>
                                      </div>
                                    </td>
                                    <td>Arczhar Mummuh</td>
                                    <td>Soccer Field</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">1</label>
                                      </div>
                                    </td>
                                    <td>Arczhar Mummuh</td>
                                    <td>Soccer Field</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                  </form>
                    <br>
                    <div class="modal-footer">                         
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit"  class="btn btn-success">Approve</button>                                 
                  </div>
                </div>{{-- End Modal Body --}}
              </div>{{-- End Modal Content --}}
            </div>{{-- End Modal Dialog --}}
          </div>{{-- End Modal Fade --}}
              <div class="table-responsive">
                  <table id="datable" class="table align-items-center table-flush">
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
                          <th scope="col" class="sort" data-sort="request">Options</th>
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
                            <td>
                              <button  type="button" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#editModal" data-date="{{$row->date}}" data-rmno="{{$row->rmno}}" data-college="{{$row->college}}" data-equipment="{{$row->equipment}}" data-propertynumber="{{$row->propertynumber}}" data-quantity="{{$row->quantity}}" data-service="{{$row->service}}"  >APPROVE</button>                                            
                            </td>                  
                          </tr>  
                        @endforeach           
                      </tbody>
                  </table>
              </div> {{-- End Admin Table --}}
      </div>{{--End Admin Card --}}  
    </div>{{-- End Admin Col --}}
  </div> {{-- End Admin Row --}} 
  @endif
  @include('layouts.footers.auth')        
</div>{{--Container fluid--}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <script type="text/javascript">
        $('#editModal').on('show.bs.modal',function(event)
          {
            var button = $(event.relatedTarget)
            var date = button.data('date')
            var rmno = button.data('rmno')
            var college = button.data('college')
            var equipment = button.data('equipment')
            var propertynumber = button.data('propertynumber')
            var quantity = button.data('quantity')
            var service = button.data('service')

            var modal = $(this)

            modal.find('.modal-title').text('CONFIRM FORM');
            modal.find('.modal-body #date').val(date);
            modal.find('.modal-body #rmno').val(rmno); 
            modal.find('.modal-body #college').val(college);  
            modal.find('.modal-body #equipment').val(equipment); 
            modal.find('.modal-body #propertynumber').val(propertynumber); 
            modal.find('.modal-body #quantity').val(quantity); 
            modal.find('.modal-body #service').val(service); 
          })    
    </script>
  
@endsection
