@extends('index')
@section('title','Thêm mới nhân viên')
@section('content')
<div class="content">
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Form Elements</a> </li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Thêm mới nhân viên</span></h3>
    </div>
    <!-- BEGIN BASIC FORM ELEMENTS-->
    <!-- BEGIN INPUT HELPERS CONTROLS-->
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple">
                <div class="grid-title no-border">
                    <!-- <h4>Thêm mới nhân viên</h4> -->
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
                                <label class="form-label">Tên nhân viên</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <div class="controls">
                                    <input type="email" class="form-control" id="date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Chọn quyền</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="date">
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