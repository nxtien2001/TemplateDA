<!DOCTYPE html>
<html>
@include('admin.layout.css')
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="">
    <!-- BEGIN HEADER -->
    @include('admin.layout.header')
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row">

        <!-- BEGIN SIDEBAR -->
        @include('admin.layout.sidebar')
        <!-- END SIDEBAR -->

        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div id="portlet-config" class="modal hide">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"></button>
                    <h3>Widget Settings</h3>
                </div>
                <div class="modal-body"> Widget settings form goes here </div>
            </div>
            <div class="clearfix"></div>
            <div class="content">
                @yield('content')
            </div>
        </div>
        <!-- BEGIN CHAT -->

        <!-- END CHAT -->
    </div>
    <!-- END CONTAINER -->
    @include('admin.layout.js')
</body>

</html>