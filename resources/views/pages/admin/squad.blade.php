@extends('layout/admin/sbadmin')


@section('content')
    <div class="container-fluid">

        <!-- Content Row -->

        <div class="row g-3 align-items-center d-flex justify-content-start">
            <div class="col-auto">
                <form action="/squad" method="GET">
                    <input class="mb-3 squadsearch" type="search" name="search" placeholder="Search" class="form-control">
                    <button class="squadbutton" type="submit"><i class="squadicon fa fa-search"
                            aria-hidden="true"></i></button>
                </form>
            </div>
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
        </div>
        <div class="row table-responsive">
            <table style="background-color:#EFF5FF; border: 1px solid black"width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" style="width:60px; text-align:center">No.</th>
                        <th style="border-right: 1px solid #EFF5FF">Squad</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                        <tr style="height: 40px">
                            <td scope="row" style="width:60px; text-align:center">{{ $index + $data->firstItem() }}</th>
                            <td style="border-right: 1px solid #EFF5FF; width: 500px">{{ $row->squad }}</td>
                            <td style="text-align:right">
                                <!-- <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-nama= "{{ $row->nama }}">Delete</a> -->

                                <a href="/squadDetail/{{ $row->squad }}" class="btn tbutton">
                                    <h6>Detail</h6>
                                </a>
                            </td>
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
@endsection
