@extends('layout/admin/sbadmin')


@section('content')
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">
            <div>
                <h2 style="text-decoration:underline"> Status Project </h2>
            </div>
            <!-- Content Row -->


            <div class="row table-responsive">
                <table style="background-color:#EFF5FF; border: 1px solid black; margin-left: 10px; width: 98%" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" style="width:60px; text-align:center">No.</th>
                            <th style="border-right: 1px solid #EFF5FF; text-align:center;">Status</th>
                            <th style="border-right: 1px solid #EFF5FF">Project</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $row)
                            <tr style="border-top: 1px solid white; height: 40px">
                                <td scope="row" style="width:60px; text-align:center">{{ $no++ }}</td>
                                <td style="border-right: 1px solid #EFF5FF; text-align: center">
                                    @if ($row->status == 'Screening')
                                        <i class="fas fa-square" style="color: #053036"></i>
                                    @elseif($row->status == 'Live')
                                        <i class="fas fa-square" style="color: #FF9F9F"></i>
                                    @elseif($row->status == 'Development')
                                        <i class="fas fa-square" style="color:#BFFF6D"></i>
                                    @elseif($row->status == 'Testing')
                                        <i class="fas fa-square" style="color:#F26419"></i>
                                    @elseif($row->status == 'Deployment')
                                        <i class="fas fa-square" style="color:#920069"></i>
                                    @elseif($row->status == 'Submission')
                                        <i class="fas fa-square" style="color:#496D46"></i>
                                    @elseif($row->status == 'Done')
                                        <i class="fas fa-square" style="color:#33658A"></i>
                                    @elseif($row->status == 'Verification')
                                        <i class="fas fa-square" style="color:#55DDE0"></i>
                                    @elseif($row->status == 'Drop')
                                        <i class="fas fa-square" style="color:#4F2020"></i>
                                    @elseif($row->status == 'On Hold')
                                        <i class="fas fa-square" style="color:#FFCE20"></i>
                                    @endif
                                </td>
                                <td style="border-right: 1px solid #EFF5FF; width: 500px">{{ $row->status }}</td>
                                <!-- <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama= "{{ $row->nama }}">Delete</a> -->
                                <td style="text-align:right">
                                    <a href="/statusDetail/{{ $row->status }}" class="btn tbutton">
                                        <h6>Detail</h6>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  TABUNGAN EMAS</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.40,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>

                Project Card Example
              <div class=" col col-xl-4 col-lg-5">
                <div class="card  mb-5">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">Server Migration <span
                                class="float-right">20%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Sales Tracking <span
                                class="float-right">40%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Customer Database <span
                                class="float-right">60%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 60%"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Payout Details <span
                                class="float-right">80%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Account Setup <span
                                class="float-right">Complete!</span></h4>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div> -->

            <!-- Color System -->

            <div class="col-lg-6 mb-4">
                <!--             Illustrations -->
                <!-- <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="admin/img/undraw_posting_photo.svg" alt="...">
                        </div>
                        <p></p>
                      
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                    </div> -->



                <!-- Approach -->
                <div class=" mb-4">
                    <div class=" py-3">
                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                    </div>
                    <div class="card-body">
                        <p></p>
                        <p class="mb-0"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>



    {{-- example --}}


    {{-- end --}}

    {{-- start --}}

    {{-- <div class="col-12 mb-3">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1 d-flex justify-content-center">
                        Project</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800 d-flex justify-content-center">Rp.215,000</div>
                </div>
                <div class="col-auto"> --}}
    {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
    {{-- </div>
            </div>
        </div>
    </div>
</div> 



<div class="col-12 mb-3 ">
    <div class="card border-left-success shadow h-200 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1 d-flex justify-content-center">
                        infomati</div>
                    <div class="h5 mb-0 font-weight-bold d-flex justify-content-center text-gray-800">Rp.215,000</div>
                </div>
                <div class="col-auto"> --}}
    {{-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> --}}
    {{-- </div>
            </div>
        </div>
    </div>
</div>  --}}


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    {{-- end --}}
@endsection
