@extends('admin.layout.main')
@section('title','All Supplier')
@section('main')

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                {{--                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>--}}
                {{--                <li class="breadcrumb-item active" aria-current="page"> Manage Supplier</li>--}}
                {{--                <li class="breadcrumb-item active" aria-current="page"> Supplier All</li>--}}
{{--                <a href="{{route('supplier/add')}}" class="btn  btn-inverse-info" >Add Supplier</a>--}}
            </ol>
        </nav>


{{--        <div class="row">--}}
{{--            <div class="col-md-12 grid-margin stretch-card">--}}
{{--                <div class="card">--}}

{{--                    <div class="card-body">--}}
{{--                        --}}{{--                        <a href="{{route('supplier.add')}}" class="btn btn-rounded btn-outline-info" style="float: right">Add Supplier</a>--}}
{{--                        <h6 class="card-title">Supplier All Data</h6>--}}
{{--                        <br><br>--}}

{{--                        <div class="table-responsive">--}}
{{--                            <table id="dataTableExample" class="table">--}}
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Data Table</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                    <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTableExample_length"><label>Show <select name="dataTableExample_length" aria-controls="dataTableExample" class="form-select form-select-sm"><option value="10">10</option><option value="30">30</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTableExample_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="dataTableExample"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dataTableExample" class="table dataTable no-footer" aria-describedby="dataTableExample_info">
                                    <thead>
                                    <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 271.484px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 419.578px;">Position</th><th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 206.688px;">Office</th><th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 94.1719px;">Age</th><th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 190.984px;">Start date</th><th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 142.531px;">Salary</th></tr>

                                    <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email Address</th>
                                    <th>Address</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody style="font-size: 14px">
                                @foreach($suppliers as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->mobile_no }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <a href="javascript:void(0)"
                                               class="btn btn-inverse-warning"
                                               title="Edit Data" onclick="editSupplier">
                                                <i class="me-1 icon-md" data-feather="edit"></i>

                                            </a>
                                            <a href="" class="btn btn-inverse-danger" title="Delete Data" id="delete">
                                                <i class="me-1 icon-md" data-feather="trash-2"></i>

                                            </a>
                                        </td>
                                    </tr>
                                @endforeach




                                </tbody>
                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">Showing 1 to 10 of 22 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTableExample_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTableExample_previous"><a href="#" aria-controls="dataTableExample" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTableExample" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="dataTableExample_next"><a href="#" aria-controls="dataTableExample" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                </div>
            </div>
        </div>
    </div>
</div>




        @push('scripts')
            <script type="text/javascript">
                @if(Session::has('SupplierStored'))
                $(document).ready( function () {
                console.log('SupplierStored');
                    showSwal('SupplierStored');
                });
                @endif
            </script>



        @endpush


@endsection
