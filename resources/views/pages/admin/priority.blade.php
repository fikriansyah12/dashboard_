@extends('layout/admin/sbadmin')


@section('content')
    <!-- Content Row -->

    <div class="container-fluid">
        <div class="row">
            <div>
                <h2 style="text-decoration:underline"> Priority</h2>
            </div>
            <div class="row table-responsive">
                <table style="background-color:#EFF5FF; border: 1px solid black; margin-left: 10px; width: 98%" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col" style="width:60px; text-align:center">No.</th>
                            <th style="border-right: 1px solid #EFF5FF">Priority</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $row)
                            <tr style="border-top: 1px solid white;height: 40px">
                                <td scope="row" style="width:60px; text-align:center">{{ $no++ }}</td>
                                <td style="border-right: 1px solid #EFF5FF; width: 500px">{{ $row->priority }}</td>
                                <td style="text-align:right">

                                    <a href="/priorityDetail/{{ $row->priority }}" class="btn tbutton">
                                        <h6>Detail</h6>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-lg-6 mb-4">
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



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    {{-- end --}}
@endsection
