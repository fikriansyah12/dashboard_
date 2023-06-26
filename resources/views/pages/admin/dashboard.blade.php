@extends('layout/admin/sbadmin')


@section('content')
    <div class="container-fluid">



        <!-- Content Row -->
        <div class="row">
            <div class="col-sm-4 p-2">
                <div class="card shadow h-100 py-8 p-2" style="background-color: #EFF5FF">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <h2 class="text-dark">{{ $squad }}</h2>
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    TOTAL SQUAD</div>
                                <div class="h5 mb-0 font-weight-bold text-primary"></div>
                            </div>
                            <div class="col-auto">
                                <img src="/./admin/img/Group.png" alt="imagea" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-sm-4 p-2">
                <div class="card shadow h-100 py-8 p-2" style="background-color: #EFF5FF">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <h2 class="text-dark">{{ $projects }}</h2>
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">TOTAL PROJECTS
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-success"></div>
                                    </div>
                                    <div class="col">
                                        <div class="">
                                            <div class="" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <img src="/./admin/img/Desk_alt.png" alt="imagea" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-sm-4 p-2">
                <div class="card shadow h-100 py-8 p-2" style="background-color: #EFF5FF">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <h2 class="text-dark">{{ $done }}</h2>
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    DONE PROJECTS</div>
                                <div class="h5 mb-0 font-weight-bold text-success"></div>
                            </div>
                            <div class="col-auto">
                                <img src="/./admin/img/Vector.png" alt="imagea" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">
            <!-- Pie Chart -->
            <div class="col-5 mb-5 pt-5">
                <div class="mb-5 pt-5 pb-7 mt-5">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="py-2 d-flex flex-row align-items-center justify-content-between; width: 600px; height:300px">

                    </div>
                    <div class="card-body d-flex"
                        style="position:absolute; top: 16px;margin-bottom:200px; width: 400px; height:420px;background-color:white">

                        <div class="mt-5 small">
                            <h6 class="m-0 font-weight-bold text-dark"
                                style="text-decoration: underline; position:absolute; top: 22px">Status Project</h6>
                            <div style="margin-top: 50px">
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color: #053036"></i> Screening
                                </span>
                                <br />
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color: #FF9F9F"></i> Live
                                </span>
                                <br />
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color:#BFFF6D"></i> Development
                                </span>

                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color:#F26419"></i> Testing
                                </span>
                                <br />
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color:#920069"></i> Deployment
                                </span>
                                <br />
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color:#496D46"></i> Submission
                                </span>
                                <br />
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color:#33658A"></i> Done
                                </span>
                                <br />
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color:#55DDE0"></i> Verification
                                </span>
                                <br />
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color:#4F2020"></i> Drop
                                </span>
                                <br />
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color:#FFCE20"></i> On Hold
                                </span>
                            </div>
                        </div>
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="mychartb" style="width: 200px; height:150px; margin-top: 70px"></canvas>
                        </div>

                    </div>
                </div>

            </div>



            <!-- Area Chart -->
            <div class="col-sm-1 col-md-7 px-2">
                <div class="mx-6 px-1">
                    <!-- Card Header - Dropdown -->
                    <div class="py-3 d-flex flex-row align-items-center justify-content-between">

                        <!-- Card Body -->
                        <div class="card-body"
                            style="width:600px; height:420px;background-color:white; margin-bottom: 50px; margin-left: 20px;">
                            <h6 class="m-0 font-weight-bold text-dark" style="text-decoration:underline">Project Graph</h6>
                            <div style="margin-top: 20px">
                                <form action="/dashboard" method="GET">
                                    @csrf
                                    <div class="content" style="display: flex; justify-content: space-between">
                                        <div class="right">
                                            <select onfocus="this.size=3;" onblur="this.size=0;"
                                                onchange="this.size=1; this.blur()" class="form-select" type="searchlagi"
                                                name="searchlagi" style="margin-right:10px;"
                                                aria-label="Default select example">
                                                <option value="" selected>Squad</option>
                                                <option value="Squad Big Data & Analytics">Squad Big Data & Analytics
                                                </option>
                                                <option value="Squad Business Intelligence">Squad Business Intelligence
                                                </option>
                                                <option value="Squad Channeling Business Partnership">Squad Channeling
                                                    Business Partnership</option>
                                                <option value="Squad Emas">Squad Emas</option>
                                                <option value="Squad Mikro">Squad Mikro</option>
                                                <option value="Squad IMO">Squad IMO</option>
                                                <option value="Squad Logistik & Support">Squad Logistik & Support</option>
                                                <option value="Squad LOS">Squad LOS</option>
                                                <option value="Squad Risk">Squad Risk</option>
                                                <option value="Squad RKA">Squad RKA</option>
                                                <option value="Squad Sales">Squad Sales</option>
                                                <option value="Squad SPI">Squad SPI</option>
                                                <option value="Squad Syariah (Rahn)">Squad Syariah (Rahn)</option>
                                                <option value="Squad Bullion Bank">Squad Bullion Bank</option>
                                                <option value="Squad Digital Lending">Squad Digital Lending</option>
                                                <option value="Squad ERP">Squad ERP</option>
                                                <option value="Squad Gadai">Squad Gadai</option>
                                                <option value="Squad Digital Konven">Squad Digital Konven</option>
                                                <option value="Squad Feebased">Squad Feebased</option>
                                                <option value="Squad Digital Syariah">Squad Digital Syariah</option>
                                                <option value="Squad HC">Squad HC</option>
                                                <option value="Squad Kelembagaan">Squad Kelembagaan</option>
                                                <option value="Squad Keuangan">Squad Keuangan</option>
                                                <option value="Squad Layanan">Squad Layanan</option>
                                                <option value="Squad Modernisasi TI">Squad Modernisasi TI</option>
                                                <option value="Squad Omni Channel">Squad Omni Channel</option>
                                                <option value="Squad Syariah (Non Rahn)">Squad Syariah (Non Rahn)</option>
                                            </select>

                                            <select style="margin-left: 30px;" class="form-select" type="searchtahun" name="searchtahun"
                                                aria-label="Default select example">
                                                <option value="" selected>Year</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                            {{-- <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle" role="button" type="searchtahun" name="searchtahun" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Dropdown link
                                                </a>
                                              
                                                <ul class="dropdown-menu" name="searchtahun">
                                                  <li><a class="dropdown-item" value="2021" >2021</a></li>
                                                  <li><a class="dropdown-item" value="2022" >2022</a></li>
                                                  <li><a class="dropdown-item" value="2023" >2023</a></li>
                                                </ul>
                                              </div> --}}
                                        </div>

                                        <button name="chartbutton" type="submit" class="btn btn-primary cbutton">
                                            <h6>Search</h6>
                                        </button>
                                    </div>


                                </form>
                            </div>
                            <div class="chart-bar" style="margin-bottom:200px; padding-top: 5px">
                                <canvas id="mycharta"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-end mt-5 py-0" style="transform: translateY(-60px)">
            <div>
                @php
                    $alert = $data->count();
                @endphp
                @if (empty($alert))
                    <h3 style="color: red;">Data Tidak Ditemukan</h3>
                    {{-- @elseif(!empty($alert))
            <h1>Error</h1>
         --}}
                @endif

            </div>
            <div class="col-auto" style="margin-right: 14px;">
                <form action="/dashboard" method="GET">
                    <input class="searchdashboard" type="search" name="search" placeholder="Search"
                        class="form-control">
                    <button class="buttondashboard" type="submit"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                </form>
            </div>
        </div>


        <div class="row table-responsive py-2" style="transform: translateY(-60px)">
            <table class="text-dark" width="97%"
                style="text-align: center; margin-left:25px; margin-top: 20px; border: 1px solid black;" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <!-- <th scope="col">IT Project</th> -->
                        <th scope="col">IT Project</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Squad</th>
                        <th scope="col">Assignee</th>
                        <th scope="col">Reporter</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                        <tr>
                            <td scope="row">{{ $index + $data->firstItem() }}</td>
                            <!-- <td>{{ $row->it_project }}</td> -->
                            <td>{{ $row->summary }}</td>
                            <td>{{ $row->name_project }}</td>
                            <td>{{ $row->squad }}</td>
                            <td>{{ $row->assignee }}</td>
                            <td>{{ $row->reporter }}</td>
                            <td style="width: 100px">{{ $row->priority }}</td>
                            <td>{{ $row->status }}</td>
                            <td>{{ $row->created }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="pagination">
                <div>
                    {{ $data->links() }}
                </div>
            </div>
        </div>


    </div>




    {{-- example --}}


    {{-- end --}}


















    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>


    <script>
        const ctx = document.getElementById('mycharta');
        //   var Jan= '<?= $january ?>';
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: '# of Projects',
                    backgroundColor: 'lightblue',
                    data: ['<?= $january ?>', '<?= $february ?>', '<?= $march ?>', '<?= $april ?>',
                        '<?= $may ?>', '<?= $june ?>', '<?= $july ?>', '<?= $august ?>',
                        '<?= $september ?>', '<?= $october ?>', '<?= $november ?>', '<?= $december ?>'
                    ],
                    borderWidth: 1,

                }]
            },
            options: {
                scales: {
                    yxAxes: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script>
        const cha = document.getElementById('mychartb');

        new Chart(cha, {
            type: 'doughnut',
            data: {
                labels: ["screening", "live", "development", "testing", "deployment", "submission", "done",
                    "verification", "drop", "onHold"
                ],
                datasets: [{
                    label: '# of Votes',
                    data: ['<?= $screening ?>', '<?= $live ?>', '<?= $development ?>', '<?= $testing ?>',
                        '<?= $deployment ?>', '<?= $submission ?>', '<?= $donea ?>',
                        '<?= $verification ?>', '<?= $drop ?>', '<?= $onHold ?>'
                    ],
                    borderWidth: 1,
                    backgroundColor: ['#053036', '#FF9F9F', '#BFFF6D', '#F26419', '#920069', '#496D46',
                        '#33658A', '#55DDE0', '#4F2020', '#FFCE20'
                    ],
                    hoverBackgroundColor: ['#053036', '#FF9F9F', '#BFFF6D', '#F26419', '#920069', '#496D46',
                        '#33658A', '#55DDE0', '#4F2020', '#FFCE20'
                    ],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",

                }]
            },
            options: {
                // maintainAspectRatio: false,
                legend: {
                    display: false
                },
            }
        });
    </script>
    <script>
        $(function() {
            /*   $('select').chosen({width: '00px'}); */

            $('ul.chosen-results').css('min-height', '100px');
            $('ul.chosen-results').css('max-height', '100px');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    {{-- end --}}
@endsection
