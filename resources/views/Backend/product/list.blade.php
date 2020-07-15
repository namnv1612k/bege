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
                        <table class="multi-table table table-striped table-bordered table-hover non-hover style-1" style="width:100%">
                            <thead>
                            <tr>
                                <th class="text-align-left">Mã sản phẩm</th>
                                <th class="text-align-left">Tên sản phẩm</th>
                                <th class="text-align-left">Ảnh nổi bật</th>
                                <th class="text-align-left">Hãng sản xuất</th>
                                <th class="text-align-left">Đánh giá</th>
                                <th class="text-align-left">Lượt xem</th>
                                <th class="text-align-left">Kho</th>
                                <th class="text-align-left">Giá</th>
                                <th class="text-align-left">Trạng thái</th>
                                <th class="text-align-left">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td class="title-copy" data-toggle="tooltip" data-placement="top" data-original-title="Click để sao chép" onclick="AdminJs.copyToClipboard(this)">{{ $product->sku }}</td>
                                    <td data-toggle="tooltip" data-placement="top" data-original-title="{{ $product->name }}">{{ \Illuminate\Support\Str::limit($product->name, 15) }}</td>
                                    <td class="profile-img">
                                        <span>
                                            <img src="{{ $product->feature_image }}" class="rounded-circle" alt="product">
                                        </span>
                                    </td>
                                    <td>{{ $product->supplier->name }}</td>
                                    <td>
                                        <div class="progress br-30" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ \App\Helpers\ProductHelper::classProgressbarBackend($product->rate)['title'] }}">
                                            <div class="{{ \App\Helpers\ProductHelper::classProgressbarBackend($product->rate)['class'] }}" role="progressbar" style="width: {{ $product->rate/5*100 }}%" aria-valuenow="{{ $product->rate/5*100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>{{ $product->views }}</td>
                                    <td>{{ $product->stocks }}</td>
                                    <td>{{ \App\Helpers\ProductHelper::vndFormat($product->sale_price) }}</td>
                                    <td>
                                        <div class="m-4 {{ \App\Helpers\ProductHelper::classStatusBackend($product->id)['class'] }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ \App\Helpers\ProductHelper::classStatusBackend($product->id)['title'] }}"></div>
                                    </td>
                                    <td>
                                        <div class="dropdown custom-dropdown">
                                            <span class="dropdown-toggle" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </span>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                <a href="{{ route('admin-product-show', ['id' => $product->id]) }}" class="dropdown-item">Xem</a>
                                                <a href="{{ route('admin-product-edit', ['id' => $product->id]) }}" class="dropdown-item">Sửa</a>
                                                <a href="{{ route('admin-product-delete', ['id' => $product->id]) }}" class="dropdown-item">Xóa</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh nổi bật</th>
                                <th>Hãng sản xuất</th>
                                <th>Đánh giá</th>
                                <th>Lượt xem</th>
                                <th>Kho</th>
                                <th>Giá</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="float-right mr-3 mt-3">
                            {{ $products->links() }}
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
