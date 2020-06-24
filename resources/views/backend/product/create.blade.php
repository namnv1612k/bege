@extends('layouts.backend')
@section('titlePage', 'Thêm sản phẩm - Admin')
@section('content')
    <div class="layout-px-spacing">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/bootstrap-select/bootstrap-select.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/forms/switches.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/file-upload/file-upload-with-preview.min.css') }}" type="text/css" />
        <div class="row layout-top-spacing">
            <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Thêm sản phẩm</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form class="needs-validation" novalidate method="post" action="{{ route('admin-product-store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-xl-6 float-left">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="validationCustom01">Tên sản phẩm</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01" placeholder="Tên sản phẩm" name="name" value="{{ old('name') }}" required>
                                        <div class="invalid-feedback">
                                            @error('name'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom02">Slug</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" onchange="AdminJs.checkExist('products', 'slug', this.value, this)" id="validationCustom02" placeholder="Slug" name="slug" value="{{ old('slug') }}" required>
                                        <div class="invalid-feedback">
                                            @error('slug'){{ $message }} @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="validationCustom03">Mã sản phẩm</label>
                                        <input type="text" class="form-control @error('sku') is-invalid @enderror" onchange="AdminJs.checkExist('products', 'sku', this.value, this)" id="validationCustom03" placeholder="Mã sản phẩm" name="sku" value="{{ old('sku') }}" required>
                                        <div class="invalid-feedback">
                                            @error('sku'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom04">Giá gốc</label>
                                        <input type="text" class="form-control currency @error('price') is-invalid @enderror" id="validationCustom04" placeholder="Giá gốc" name="price" value="{{ old('price') }}" required>
                                        <div class="invalid-feedback">
                                            @error('price'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom05">Giá bán</label>
                                        <input type="text" class="form-control currency @error('sale_price') is-invalid @enderror" id="validationCustom05" placeholder="Giá bán" name="sale_price" value="{{ old('sale_price') }}">
                                        <div class="invalid-feedback">
                                            @error('sale_price') {{ $message }} @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label>Hãng cung cấp</label>
                                        <select class="selectpicker form-control dropdown-list" data-live-search="true" name="supplier_id" required>
                                            @foreach($suppliers as $supplier)
                                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 md-4">
                                        <label>Tồn kho</label>
                                        <input id="stocks" class="form-control" type="number" min="0" name="stocks" value="{{ old('stocks') }}" required>
                                        <div class="invalid-feedback">
                                            @error('stocks') {{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3 md-4">
                                        <label>Kích hoạt</label><br>
                                        <label style="margin: 3% 0 0 10%" class="switch s-icons s-outline s-outline-success mb-4 mr-3">
                                            <input type="checkbox" name="is_active" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="intro">Giới thiệu</label>
                                        <textarea class="form-control" name="intro" id="intro" required>{{ old('intro') }}</textarea>
                                        <div class="invalid-feedback" style="display: block">
                                            @error('intro') {{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="intro">Mô tả</label>
                                        <textarea class="form-control" name="desc" id="desc" required>{{ old('desc') }}</textarea>
                                        <div class="invalid-feedback" style="display: block">
                                            @error('desc') {{ $message }} @enderror
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3" type="submit">Xác nhận</button>
                                <a href="{{ route('admin-product-list') }}" class="btn btn-dismiss mt-3" type="submit">Hủy</a>
                            </div>
                            <div class="col-xl-6 float-left">
                                <div class="col-6 float-left">
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Ảnh hiện thị <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" name="feature_image" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                            <input type="hidden"/>
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="text-danger small">
                                            @error('feature_image')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                        <div class="custom-file-container__image-preview" id="image-feature"></div>
                                    </div>
                                </div>
                                <div class="col-6 float-left">
                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label>Album <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" name="albums[]" class="custom-file-container__custom-file__custom-file-input" multiple>
                                            <input type="hidden" value="" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="text-danger small">
                                            @error('albums')
                                            {{ $message }}
                                            @enderror
                                        </div>
                                        <div class="custom-file-container__image-preview" id="image-album"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('backend/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/input-mask/jquery.inputmask.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
            // $(".currency").inputmask({mask:"99,999.999 đ"});
            $("#stocks").TouchSpin({
                initval: 40
            });
            var firstUpload = new FileUploadWithPreview('myFirstImage');
            var secondUpload = new FileUploadWithPreview('mySecondImage');
            CKEDITOR.replace('intro', {});
            CKEDITOR.replace('desc', {
                filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
            });
        </script>
        @include('ckfinder::setup')
        <script src="{{ asset('backend/assets/js/scrollspyNav.js') }}"></script>
        <script src="{{ asset('backend/assets/js/forms/bootstrap_validation/bs_validation_script.js') }}"></script>
        <script src="{{ asset('backend/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    </div>
@endsection
