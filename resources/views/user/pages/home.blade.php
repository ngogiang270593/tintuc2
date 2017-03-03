@extends('user.master')
@section('title','Web Tin Tức')
@section('content')
<section id="sliderSection">

<div class="row">
  	<div class="col-lg-8 col-md-8 col-sm-8">
	    <div class="slick_slider">
	    @foreach($namtinmoi as $item)
	      	<div class="single_iteam"> <a href="{!! url('chi-tiet-tin',$item->id) !!}"> <img src="{!! url('public/upload/news',[$item->image]) !!}" alt=""></a>
		        <div class="slider_article">
			          <h2><a class="slider_tittle" href="{!! url('chi-tiet-tin',$item->id) !!}">{!! $item->titelname !!}</a></h2>
			          {!! $item->description !!}
		        </div>
	        </div>
	    @endforeach
	    </div>
 	</div>
	<div class="col-lg-4 col-md-4 col-sm-4">
	    <div class="latest_post">
	      <h2><span>Tin mới</span></h2>
	      <div class="latest_post_container">
	        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
	       
	        <ul class="latest_postnav">
	            @foreach($tinmoi as $item1)
		          <li>
		            <div class="media"> <a href="{!! url('chi-tiet-tin',$item1->id) !!}" class="media-left"> <img alt="" src="{!! url('public/upload/news',[$item1->image])!!}"> </a>
		              <div class="media-body"> <a href="{!! url('chi-tiet-tin',$item1->id) !!}" class="catg_title">{!! $item1->titelname !!}</a> </div>
		            </div>
		          </li>
	            @endforeach
	        </ul>
	        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
	      </div>
	    </div>
	</div>
</div>
</section>
<section id="contentSection">
<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8">
    <div class="left_content">
      <div class="fashion_technology_area">
        <div class="fashion">
          <div class="single_post_content">
            <h2><span>Thể Thao</span></h2>
            <ul class="business_catgnav wow fadeInDown">
              <li>
                <figure class="bsbig_fig"> <a href="{!! url('chi-tiet-tin',$thethaomoinhat->id) !!}" class="featured_img"> <img alt="" src="{!! url('public/upload/news',[$thethaomoinhat->image]) !!}"> <span class="overlay"></span> </a>
                  <figcaption> <a href="{!! url('chi-tiet-tin',$thethaomoinhat->id) !!}">{!! $thethaomoinhat->titelname !!}</a> </figcaption>
                 	  {!! $thethaomoinhat->description !!}
                </figure>
              </li>
            </ul>
            <ul class="spost_nav">
             @foreach($thethaomoitt as $item3)
              <li>
                <div class="media wow fadeInDown"> <a href="{!! url('chi-tiet-tin',$item3->id) !!}" class="media-left"> <img alt="" src="{!! url('public/upload/news',[$item3->image]) !!}"> </a>
                  <div class="media-body"> <a href="{!! url('chi-tiet-tin',$item3->id) !!}" class="catg_title">{!! $item3->titelname !!}</a> </div>
                </div>
              </li>
             @endforeach 
            </ul>
          </div>
        </div>
        <div class="technology">
          <div class="single_post_content">
            <h2><span>Giải Trí</span></h2>
            <ul class="business_catgnav wow fadeInDown">
              <li>
                <figure class="bsbig_fig"> <a href="{!! url('chi-tiet-tin',$giaitrimoinhat->id) !!}" class="featured_img"> <img alt="" src="{!! url('public/upload/news',[$giaitrimoinhat->image]) !!}"> <span class="overlay"></span> </a>
                  <figcaption> <a href="{!! url('chi-tiet-tin',$giaitrimoinhat->id) !!}">{!! $giaitrimoinhat->titelname !!}</a> </figcaption>
                 	  {!! $giaitrimoinhat->description !!}
                </figure>
              </li>
            </ul>
           <ul class="spost_nav">
             @foreach($giaitrimoitt as $item4)
              <li>
                <div class="media wow fadeInDown"> <a href="{!! url('chi-tiet-tin',$item4->id) !!}" class="media-left"> <img alt="" src="{!! url('public/upload/news',[$item4->image]) !!}"> </a>
                  <div class="media-body"> <a href="{!! url('chi-tiet-tin',$item4->id) !!}" class="catg_title">{!! $item4->titelname !!}</a> </div>
                </div>
              </li>
             @endforeach 
            </ul>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <aside class="right_content">
      <div class="single_sidebar">
        <h2><span>Tin Hot</span></h2>
         
        <ul class="spost_nav">
        @foreach($tinhot as $item2)
          <li>
            <div class="media wow fadeInDown"> <a href="{!! url('chi-tiet-tin',$item2->id) !!}" class="media-left"> <img alt="" src="{!! url('public/upload/news',[$item2->image]) !!}"> </a>
              <div class="media-body"> <a href="{!! url('chi-tiet-tin',$item2->id) !!}" class="catg_title"> {!! $item2->titelname !!}</a> </div>
            </div>
          </li>
        @endforeach  
        </ul>
      </div>
     
     
    </aside>
  </div>
</div>
</section>
@stop