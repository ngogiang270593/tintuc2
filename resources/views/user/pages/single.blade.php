@extends('user.master')
@section('content')
<section id="contentSection">
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">
      <div class="single_page">
        <ol class="breadcrumb">
          <li><a>{!! $news->groupnewsname !!}</a></li>
          <li><a href="{!! url('loai-tin',[$news->idLT,$news->TenLT_KhongDau]) !!}">{!! $news->TenLT !!}</a></li>
        </ol>
        {!! $news->content !!}
       
      </div>
    </div>
  </div>
 <!--  <nav class="nav-slit"> <a class="prev" href="#"> <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
   <div>
     <h3>City Lights</h3>
     <img src="../images/post_img1.jpg" alt=""/> </div>
   </a> <a class="next" href="#"> <span class="icon-wrap"><i class="fa fa-angle-right"></i></span>
   <div>
     <h3>Street Hills</h3>
     <img src="../images/post_img1.jpg" alt=""/> </div>
   </a> </nav> -->
  <div class="col-lg-4 col-md-4 col-sm-4">
    <aside class="right_content">
      <div class="single_sidebar">
        <h2><span>Tin Mới Nhất</span></h2>
        <ul class="spost_nav">
         @foreach($tinmoinhat as $item1)
         <li>
            <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="{!! url('public/upload/news',[$item1->image]) !!}"> </a>
              <div class="media-body">
                 <a href="{!! url('chi-tiet-tin',$item1->id) !!}" class="catg_title"> 
                      {!! $item1->titelname !!}
                </a> 
              </div>
            </div>
          </li>
         @endforeach
        </ul>
      </div>
      <div class="single_sidebar">
        <h2><span>tin Liên Quan</span></h2>
        <ul class="spost_nav">
         @foreach($tinlienquan as $item2)
         <li>
            <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="{!! url('public/upload/news',[$item2->image]) !!}"> </a>
              <div class="media-body">
                 <a href="{!! url('chi-tiet-tin',$item2->id) !!}" class="catg_title"> 
                      {!! $item2->titelname !!}
                </a> 
              </div>
            </div>
          </li>
         @endforeach
        </ul>
        {!! $tinlienquan->links() !!}
      </div>
    </aside>
  </div>
</div>
</section>
@stop