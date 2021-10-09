@extends('index')
@section('title','Quản lý nhà tuyển dụng')
@section('content')
<div class="content">
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Tables</a> </li>
    </ul>
    <!-- <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Advance - <span class="semi-bold">Tables</span></h3>
    </div> -->
    <div class="row-fluid">
        <div class="span12">
            <div class="grid simple ">
                <div class="grid-title">
                    <h4>Table <span class="semi-bold">Styles</span></h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#grid-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="grid-body ">
                    <table class="table table-striped" id="example2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Banner</th>
                                <th>Ảnh công ty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeA">
                                <td>1</td>
                                <td>
                                    
                                </td>

                                <td>
                                    <img src="https://th.bing.com/th/id/R.7787b05f05ad0e396694e48d93659bff?rik=sgQAgz1diczIyg&pid=ImgRaw&r=0" width="80px" height="50px" alt="">
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>2</td>
                                <td>
                                    <div class="inline"> Jacob </div><span class="label label-primary">ALERT!</span>
                                </td>

                                <td>
                                    <img src="https://th.bing.com/th/id/R.7787b05f05ad0e396694e48d93659bff?rik=sgQAgz1diczIyg&pid=ImgRaw&r=0" width="80px" height="50px" alt="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection