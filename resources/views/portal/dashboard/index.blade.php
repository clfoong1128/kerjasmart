@extends('layouts.app')
@section('content')
    <h2>Dashboard</h2>
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-10">

            </div>
            <div class="col-2">
                <div
                    class="d-sm-flex align-items-center justify-content-between"
                >
                    <a
                        href="#"
                        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm "
                        data-toggle="modal" 
                        data-target="#exampleModalCenter"
                        ><i class="fas fa-download fa-sm text-white-50"></i>
                        Generate Report</a
                    >
                </div>
            </div>
        </div>

        <!-- Card Row -->
        <div class="row">
            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card  shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div
                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                                >
                                    User Registered
                                </div>
                                <div
                                    class="h5 mb-0 font-weight-bold text-gray-800"
                                >
                                    100
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card  shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div
                                    class="text-xs font-weight-bold text-success text-uppercase mb-1"
                                >
                                    Company Registered
                                </div>
                                <div
                                    class="h5 mb-0 font-weight-bold text-gray-800"
                                >
                                    100
                                </div>
                            </div>
                            <div class="col-auto">
                                <i
                                    class="fas fa-building fa-2x text-gray-300"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 mb-4">
                <div class="card  shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div
                                    class="text-xs font-weight-bold text-info text-uppercase mb-1"
                                >
                                    Job Posted
                                </div>
                                <div
                                    class="h5 mb-0 font-weight-bold text-gray-800"
                                >
                                    1000
                                </div>
                            </div>
                            <div class="col-auto">
                                <i
                                    class="fas fa-address-card fa-2x text-gray-300"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-xl-3 col-md-3 mb-4">
                <div class="card  shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div
                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                                >
                                    Services Posted
                                </div>
                                <div
                                    class="h5 mb-0 font-weight-bold text-gray-800"
                                >
                                    500
                                </div>
                            </div>
                            <div class="col-auto">
                                <i
                                    class="fas fa-address-card fa-2x text-gray-300"
                                ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Card Row -->
    </div>
    {{-- Modal --}}
    {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Generate Report</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div> --}}
@endsection