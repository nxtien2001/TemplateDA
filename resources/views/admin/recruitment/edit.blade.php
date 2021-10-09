@extends('index')
@section('title','Quản lý nhà tuyển dụng')
@section('content')
<div class="content">
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Form Elements</a> </li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Cập nhật nhà tuyển dụng</span></h3>
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
                            <div class="form-group">
                                <label class="form-label">Tên nhà tuyển dụng</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Ảnh công ty</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Banner</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                            </div><br>
                            <div class="col-md-6">
                                <div class="radio">
                                    <input id="male" type="radio" name="gender" value="male" checked>
                                    <label for="male">Bình thường</label>
                                    <input id="female" type="radio" name="gender" value="female">
                                    <label for="female">Vip</label>
                                </div>
                            </div><br><br>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Giới thiệu</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Chi tiết</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Map</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="tin">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Địa chỉ</label>
                                <div class="controls">
                                    <input type="text" placeholder="You can put anything here" class="form-control" id="ssn">
                                </div>
                            </div>
                            <div class="form-actions">
                                <!-- <div class="pull-left">
                                    <div class="checkbox checkbox check-success 	">
                                        <input type="checkbox" value="1" id="chkTerms">
                                        <label for="chkTerms">I Here by agree on the Term and condition. </label>
                                    </div>
                                </div> -->
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