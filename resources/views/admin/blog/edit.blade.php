@extends('index')
@section('title','Cập nhật tin tuyển dụng')
@section('content')
<div class="content">
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Form Elements</a> </li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Cập nhật tin tuyển dụng</span></h3>
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
                                <label class="form-label">Tiêu đề</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Hình ảnh</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Ngày hết hạn</label>
                                        <input class="form-control" type="date" id="formFile">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Mức lương</label>
                                        <input class="form-control" type="text" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Hình thức làm việc</label>
                                    <select class="form-select col-md-12" aria-label="">
                                        <option selected>Chọn hình thức làm việc</option>
                                        <option value="1">Full time</option>
                                        <option value="2">Partime</option>
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Số lượng</label>
                                        <input class="form-control" type="number" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Vị trí</label>
                                        <input class="form-control" type="text" id="formFile">
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class="form-label">Kinh nghiệm</label>
                                    <input class="form-control" type="text" id="formFile">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Giới tính</label>
                                    <select class="form-select col-md-12" aria-label="">
                                        <option selected>Chọn giới tính</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                        <option value="3">Không yêu cầu</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Trạng thái</label>
                                    <div class="radio">
                                        <input id="male" type="radio" name="gender" value="male" checked>
                                        <label for="male">Tắt</label>
                                        <input id="female" type="radio" name="gender" value="female">
                                        <label for="female">Bật</label>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Chi tiết công việc</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
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