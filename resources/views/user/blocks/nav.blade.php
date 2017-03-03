 <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <?php $theloai = DB::table('groupnews')->where('activie','=',1)->get(); ?>
         
          <li class="active"><a href="{!! url('/') !!}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          @foreach($theloai as $item)
          <li class="dropdown"> <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{!! $item->groupnewsname !!}</a>
            <ul class="dropdown-menu" role="menu">
             <?php $loaitin = DB::table('typenews')->where('idTL','=',$item->id)->get(); ?>
              @foreach($loaitin as $item1)
              <li><a href="{!! url('loai-tin',[$item1->idLT,$item1->TenLT_KhongDau]) !!}">{!! $item1->TenLT !!}</a></li>
              @endforeach
            </ul>
          </li>
          @endforeach
       
         
        </ul>
      </div>
    </nav>
  </section>