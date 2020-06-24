@extends('layouts.backend')
@section('titlePage', 'Danh sách sản phẩm - Admin')
@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        {{--<table class="multi-table table table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Salary</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>$320,800</td>
                                <td>
                                    <div class="t-dot bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Normal"></div>
                                </td>
                                <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>$433,060</td>
                                <td>
                                    <div class="t-dot bg-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Low"></div>
                                </td>
                                <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>$103,600</td>
                                <td>
                                    <div class="t-dot bg-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Medium"></div>
                                </td>
                                <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>$342,000</td>
                                <td>
                                    <div class="t-dot bg-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="High"></div>
                                </td>
                                <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>$217,500</td>
                                <td>
                                    <div class="t-dot bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Normal"></div>
                                </td>
                                <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>$92,575</td>
                                <td>
                                    <div class="t-dot bg-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="High"></div>
                                </td>
                                <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>$324,050</td>
                                <td>
                                    <div class="t-dot bg-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Medium"></div>
                                </td>
                                <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>$75,650</td>
                                <td>
                                    <div class="t-dot bg-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="High"></div>
                                </td>
                                <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>$183,000</td>
                                <td>
                                    <div class="t-dot bg-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Low"></div>
                                </td>
                                <td class="text-center"> <button class="btn btn-outline-primary">view</button> </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Salary</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </tfoot>
                        </table>--}}
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
                                                <button class="dropdown-item">Xóa</button>
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
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
