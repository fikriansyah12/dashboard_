@extends('layout/admin/sbadmin')


@section('content')
    <div class="container-fluid">

        <!-- Content Row -->
        <div style="display:flex; justify-content:space-between">
            <div>
                <h2 style="text-decoration:underline"> {{ $squad }} </h2>
            </div>
            <div class="card shadow h-100 py-8" style="background-color: #EFF5FF; width:270px;">
                <h2>Total Projects: {{ $total }}</h2>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row table-responsive">
            <table class="squaddtab" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <!-- <th scope="col">IT Project</th> -->
                        <th style="text-align:center;">IT Project</th>
                        <th style="text-align:center;">Project Name</th>
                        <th style="text-align:center;">Squad</th>
                        <th style="text-align:center;">Assignee</th>
                        <th style="text-align:center;">Reporter</th>
                        <th style="text-align:center;">Priority</th>
                        <th style="text-align:center;">Status</th>
                        <th style="text-align:center;">Created</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                        <tr>
                            <td scope="row" style="text-align:center">{{ $index + $data->firstItem() }}</td>
                            <!-- <td>{{ $row->it_project }}</td> -->
                            <td>{{ $row->summary }}</td>
                            <td>{{ $row->name_project }}</td>
                            <td>{{ $row->squad }}</td>
                            <td>{{ $row->assignee }}</td>
                            <td>{{ $row->reporter }}</td>
                            <td>{{ $row->priority }}</td>
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

    {{-- end --}}
@endsection
