@extends('layout/admin/sbadmin')


@section('content')
    <div class="container-fluid">
        <div class="row g-3 align-items-center d-flex" style="justify-content:flex-end; position: relative;">

            <h2 class="mr-auto" style="text-decoration:underline"> {{ $priority }} Priority</h2>


            @php
                $alert = $data->count();
            @endphp
            @if (empty($alert))
                <h3 style="color: red; margin-right: 10px;">Data Tidak Ditemukan</h3>
                {{-- @elseif(!empty($alert))
            <h1>Error</h1>
         --}}
            @endif
            <form action="/priorityDetail/{{ $priority }}" method="GET">
                <input class="prioritydsearch" type="search" name="search" placeholder="Search" class="form-control">
                <button class="prioritydbutton"type="submit" style="margin-bottom: 10px"><i
                        class="prioritydicon fa fa-search" aria-hidden="true"></i></button>
            </form>




        </div>
        <!-- Content Row -->
        <div class="py-2">
            <table class="prioritydtab" width="97%" cellspacing="0" style="border: 1px solid black;">
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
    </div>

    {{-- example --}}


    {{-- end --}}

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    {{-- end --}}
@endsection
