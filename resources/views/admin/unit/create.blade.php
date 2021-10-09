@extends('index')
@section('title','Thêm mới đơn vị')
@section('content')
<ul class="breadcrumb">
    <li>
        <a href="">QUAY LẠI</a>
    </li>
    <li><a href="#" class="active">Thêm mới đơn vị</a> </li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Form - <span class="semi-bold">Thêm mới đơn vị</span></h3>
</div>
<!-- BEGIN BASIC FORM ELEMENTS-->
<div class="row">
    <div class="col-md-12">
        <div class="grid simple">
            <div class="grid-title no-border">
                <h4>Điền vào form</h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="grid-body no-border">
                <br>
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <div class="form-group">
                                <label class="form-label">Tên đơn vị</label>
                                <span class="help">Ví dụ: tấn, tạ, yến, con...</span>
                                <div class="controls">
                                    <input type="text" class="form-control" value="" name="name">

                                    <div class="text-danger"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-warning" href="">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END BASIC FORM ELEMENTS-->
<!-- END TAG INPUTS / FILE UPLOADER CONTROLS-->
<!-- END PAGE -->
@endsection