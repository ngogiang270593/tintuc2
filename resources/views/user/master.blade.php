@include('user.header')
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <?php $menu = DB::table('menu')->get(); ?>
              @foreach($menu as $item)
              <li><a href="{!! $item->link !!}">{!!  $item->menuname !!}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="header_top_right">
            <p>{!! date('d-m-Y') !!}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="#" class="logo"><img src="{!!url('public/home/images/logo.jpg')!!}" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="{!!url('public/home/images/addbanner_728x90_V1.jpg')!!}" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <!--nav-->
  @include('user.blocks.nav')
  <!--nav-->
  <!--newsSection-->
  
  <!--newsSection-->
  @yield('content')

@include('user.footer')  