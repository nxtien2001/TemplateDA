<div class="page-sidebar " id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
        <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
                <img src="{{asset('assets/img/profiles/avatar.jpg')}}" alt="" data-src="{{asset('assets/img/profiles/avatar.jpg')}}" data-src-retina="{{asset('assets/img/profiles/avatar.jpg')}}" width="69" height="69" />
                <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
                <div class="username">Fred <span class="semi-bold">Smith</span></div>
                <div class="status">Life goes on...</div>
            </div>
        </div>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU -->
        <p class="menu-title sm">BROWSE <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
        <ul>
            <li class="start  open active "> <a href="{{route('admin.index')}}"><i class="material-icons">home</i> <span class="title">Thống kê</span> <span class="selected"></span> <span class="arrow  open "></span> </a>
            </li>
            <li>
                <a href="javascript:;"> <i class="material-icons">airplay</i> <span class="title">Danh mục</span> <span class=" arrow"></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{{route('categories.index')}}">Dánh sách</a> </li>
                    <li> <a href="{{route('categories.index')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"> <i class="material-icons">invert_colors</i> <span class="title">Nhà tuyển dụng</span> <span class=" arrow"></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{{route('recruitments.index')}}">Dánh sách</a> </li>
                    <li> <a href="{{route('recruitments.index')}}">Thêm mới</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"> <i class="material-icons">flip</i><span class="title"> Tin tuyển dụng </span> <span class=" arrow"></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{{route('blogs.index')}}"> Danh sách </a> </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"> <i class="material-icons">flip</i><span class="title"> Slide quảng cáo </span> <span class=" arrow"></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{{route('blogs.index')}}"> Danh sách </a> </li>
                    <li> <a href="{{route('blogs.index')}}"> Vai trò </a> </li>
                </ul>
            </li>
            <li>
                <a href="#"> <i class="material-icons">email</i> <span class="title">Email</span><span class=" badge badge-disable pull-right ">203</span>
                </a>
            </li>
            <li>
                <a href="javascript:;"> <i class="material-icons">flip</i><span class="title"> Slide quảng cáo </span> <span class=" arrow"></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{{route('ads.index')}}"> Danh sách </a> </li>
                    <li> <a href="{{route('ads.index')}}"> Vai trò </a> </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"> <i class="material-icons">flip</i><span class="title"> Nhân viên </span> <span class=" arrow"></span> </a>
                <ul class="sub-menu">
                    <li> <a href="{{route('users.index')}}"> Danh sách </a> </li>
                    <li> <a href="{{route('users.index')}}"> Vai trò </a> </li>
                </ul>
            </li>
        </ul>
        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<a href="#" class="scrollup">Scroll</a>
<div class="footer-widget">
    <div class="progress transparent progress-small no-radius no-margin">
        <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>
    </div>
    <div class="pull-right">
        <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>
        <a href="#"><i class="material-icons">power_settings_new</i></a>
    </div>
</div>