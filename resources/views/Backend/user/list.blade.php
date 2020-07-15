@extends('layouts.backend')

@section('titlePage', 'Danh sách sản phẩm - Admin')

@section('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backend/plugins/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backend/plugins/table/datatable/custom_dt_custom.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('backend/plugins/table/datatable/custom_dt_multiple_tables.css') }}">
@endsection

@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="column-filter" class="multi-table table table-striped table-bordered table-hover non-hover style-1" style="width:100%">
                            <thead>
                            <tr>
                                <th class="text-align-left">Họ tên</th>
                                <th class="text-align-left">Quyền</th>
                                <th class="text-align-left">Email</th>
                                <th class="text-align-left">Số điện thoại</th>
                                <th class="text-align-left">Địa chỉ</th>
                                <th class="text-align-left">Điểm</th>
                                <th class="text-align-left">Trạng thái</th>
                                <th class="text-align-left">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="sorting_1 sorting_2">
                                        <div class="d-flex">
                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                <img alt="avatar" class="img-fluid rounded-circle" src="{{ $user->avatar }}">
                                            </div>
                                            <p class="align-self-center mb-0 admin-name"> {{ $user->first_name }} </p>
                                        </div>
                                    </td>
                                    <td><span class="{{ $user->role['class'] }}">{{ $user->role['title'] }}</span></td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->points }}</td>
                                    <td><span class="{{ $user->is_active['class'] }}">{{ $user->is_active['title'] }}</span></td>
                                    <td>
                                        <div class="dropdown custom-dropdown">
                                            <span class="dropdown-toggle" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </span>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                <a href="{{ route('admin-user-show', ['id' => $user->id]) }}" class="dropdown-item">Xem</a>
                                                <a href="{{ route('admin-user-edit', ['id' => $user->id]) }}" class="dropdown-item">Sửa</a>
                                                <a href="{{ route('admin-user-delete', ['id' => $user->id]) }}" class="dropdown-item">Xóa</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="text-align-left">Họ tên</th>
                                <th class="text-align-left">Quyền</th>
                                <th class="text-align-left">Email</th>
                                <th class="text-align-left">Số điện thoại</th>
                                <th class="text-align-left">Địa chỉ</th>
                                <th class="text-align-left">Điểm</th>
                                <th class="text-align-left">Trạng thái</th>
                                <th class="text-align-left">Thao tác</th>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="float-right mr-3 mt-3">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('extra-js')
    <script src="{{ asset('backend/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('table.multi-table').DataTable({
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7,
                drawCallback: function () {
                    $('.t-dot').tooltip({template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'})
                    $('.dataTables_wrapper table').removeClass('table-striped');
                }
            });
        });
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
