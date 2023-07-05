@extends('layout/admin/sbadmin')


@section('content')
    <div class="container-fluid">


        <div class="row g-3 align-items-center d-flex" style="justify-content:space-between">
            <div>
                <h2 style="text-decoration:underline"> {{ $status }} Status </h2>
            </div>

            <div>
                <form action="/statusDetail/{{ $status }}" method="GET">

                    <select class="form-select" type="search" name="search" style="margin-right:25px; appearance: menulist"
                        aria-label="Default select example" onChange="this.form.submit();">
                        <option value="" selected>Squad</option>
                        <option value="Squad Big Data and Analytics">Squad Big Data and Analytics</option>
                        <option value="Squad Business Intelligence">Squad Business Intelligence</option>
                        <option value="Squad Channeling Business Partnership">Squad Channeling Business Partnership</option>
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
                        <option value="Squad Bullion Bank">Squad Bullion Bank</option>.
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


                    {{-- <div>
                <button type="submit" class="btn btn-primary">Search</button>
            </div> --}}
                </form>
            </div>
        </div>

        <div class="row table-responsive">
            <table class="statusdtab" width="100%" cellspacing="0">
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
