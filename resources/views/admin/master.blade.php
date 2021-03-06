@include('admin.header')
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{!! url('m_admin') !!}" class="site_title"><i class="fa fa-paw"></i> <span>Manager Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{!! url('public') !!}/upload/{!! Auth::user()->image !!}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{!! Auth::user()->name !!}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-table"></i>Quản Lý Hệ Thống <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{!! url('admin/user/list') !!}">Quản Lý User</a></li>
                      <li><a href="{!! url('admin/menu/list') !!}">Quản Lý Menu</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i>Quản Lý Tin Tức<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{!! url('admin/groupnews/list') !!}">Quản Lý Thể Loại</a></li>
                      <li><a href="{!! url('admin/typenews/list') !!}">Quản Lý Loại Tin</a></li>
                      <li><a href="{!! url('admin/news/list') !!}">Quản Lý Tin</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i>Quản Lý Quảng Cáo<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Quản Lý Quảng Cáo</a></li>
                      <li><a href="#">Quản Lý Người Đặt Quảng Cáo</a></li>
                    </ul>
                  </li>
                
                </ul>
              </div>
           

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{!! url('public') !!}/upload/{!! Auth::user()->image !!}" alt="">{!! Auth::user()->name !!}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="{!! url('logout')!!}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.footer')