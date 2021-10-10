@extends('index')
@section('title','Thêm mới slide')
@section('content')
<div class="content">
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Form Elements</a> </li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Thêm mới slide</span></h3>
    </div>
    <!-- BEGIN BASIC FORM ELEMENTS-->
    <!-- BEGIN INPUT HELPERS CONTROLS-->
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple">
                <div class="grid-title no-border">
                    <!-- <h4>Cập nhật nhà tuyển dụng</h4> -->
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#grid-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="grid-body no-border">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Hình ảnh</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Giá</label>
                                        <input class="form-control" type="text" id="formFile">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Từ ngày</label>
                                        <input class="form-control" type="date" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Đến ngày</label>
                                        <input class="form-control" type="date" id="formFile">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Link</label>
                                        <input class="form-control" type="text" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Role</label>
                                    <select class="form-select col-md-12" aria-label="">
                                        <option selected></option>
                                        <option value="1">Role 1</option>
                                        <option value="2">Role 2</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="form-actions">
                                <div class="pull-right">
                                    <button class="btn btn-danger btn-cons" type="submit"><i class="icon-ok"></i> Save</button>
                                    <button class="btn btn-white btn-cons" type="button">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection