@extends('index')
@section('title','Quản lý danh mục')
@section('content')
<div class="content">
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Form layouts & Validations</a> </li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Thêm mới danh mục</span></h3>
    </div>
    <div class="row">
        <div class="grid simple form-grid">
            <div class="grid-title no-border">
                <h4></h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <form action="#" id="form_traditional_validation" name="form_traditional_validation" role="form" autocomplete="off" class="validate">
                    <div class="form-group">
                        <label class="form-label">Tên danh mục</label>
                        <div class="input-with-icon right">
                            <i class=""></i>
                            <input class="form-control" id="form1CardHolderName" name="form1CardHolderName" type="text">
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-8">
                            <label class="form-label">Trạng thái</label>
                            <div class="radio">
                                <input id="male" type="radio" name="" value="ẩn" checked="checked">
                                <label for="male">Ẩn</label>
                                <input id="female" type="radio" name="" value="hiện">
                                <label for="female">Hiện</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="pull-right">
                            <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Save</button>
                            <button class="btn btn-white btn-cons" type="button">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection