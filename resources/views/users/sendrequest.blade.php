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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Send Request</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title" id="exampleModalLabel">Request Form</h1>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Date">
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="RM NO.">
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
                                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="College Office">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                          <div class="input-group mb-4">
                                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Equipment/Unit/Model">
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
                                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Property Number">
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Quantity/Unit">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <h3 class="modal-title" id="exampleModalLabel">Nature of Request</h3>
                                                    <br>
                                                   
                                                        
                                                
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Send message</button>
                                            </div>
                                        </div>
                                    </div>
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