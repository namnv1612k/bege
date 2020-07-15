@extends('layouts.backend')
@section('titlePage', 'Thêm tài khoản - Admin')
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
                                <h4>Thêm tài khoản</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form class="needs-validation" novalidate method="post" action="{{ route('admin-user-update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-xl-9 float-left">
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <label for="validationCustom01">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" onchange="AdminJs.checkExist('users', 'username', this.value, this)" id="validationCustom01" placeholder="Username" name="username" value="{{ old('username') }}" required>
                                        <div class="invalid-feedback">
                                            @error('username'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom02">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" onchange="AdminJs.checkExist('users', 'email', this.value, this)" id="validationCustom02" placeholder="email" name="email" value="{{ old('slug') }}" required>
                                        <div class="invalid-feedback">
                                            @error('email'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom03">First name</label>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="validationCustom03" placeholder="First name" name="first_name" value="{{ old('first_name') }}" required>
                                        <div class="invalid-feedback">
                                            @error('first_name'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom04">Last name</label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="validationCustom04" placeholder="Last name" name="last_name" value="{{ old('last_name') }}" required>
                                        <div class="invalid-feedback">
                                            @error('last_name'){{ $message }} @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <label for="validationCustom05">Address</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="validationCustom05" placeholder="Address" name="address" value="{{ old('address') }}" required>
                                        <div class="invalid-feedback">
                                            @error('address'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom06">Phone</label>
                                        <input type="text" class="form-control currency @error('phone') is-invalid @enderror" id="validationCustom06" placeholder="Phone" name="phone" value="{{ old('phone') }}" required>
                                        <div class="invalid-feedback">
                                            @error('phone'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom06">Password</label>
                                        <input type="text" class="form-control currency @error('password') is-invalid @enderror" id="validationCustom06" placeholder="password" name="password" required>
                                        <div class="invalid-feedback">
                                            @error('password'){{ $message }} @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <label>Status</label><br>
                                        <label style="margin: 3% 0 0 10%" class="switch s-icons s-outline s-outline-success mb-4 mr-3">
                                            <input type="checkbox" name="is_active" value="{{ ACTIVE }}" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Role</label><br>
                                        <label style="margin: 3% 0 0 10%" class="switch s-icons s-outline s-outline-success mb-4 mr-3">
                                            <select name="role" id="">
                                                <option value="{{ ADMIN }}">Admin</option>
                                                <option value="{{ USER }}">User</option>
                                                <option value="{{ EMPLOYEE }}">Employee</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3" type="submit">Xác nhận</button>
                                <a href="{{ route('admin-product-list') }}" class="btn btn-dismiss mt-3" type="submit">Hủy</a>
                            </div>
                            <div class="col-xl-3 float-left">
                                <div class="col-12 float-left">
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Avatar <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" name="avatar" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
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
        </script>
        @include('ckfinder::setup')
        <script src="{{ asset('backend/assets/js/scrollspyNav.js') }}"></script>
        <script src="{{ asset('backend/assets/js/forms/bootstrap_validation/bs_validation_script.js') }}"></script>
        <script src="{{ asset('backend/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    </div>
@endsection
