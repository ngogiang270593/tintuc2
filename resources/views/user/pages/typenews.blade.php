@extends('user.master')
@section('content')
<div class="col-lg-1 col-md-1 col-sm-1"></div>
<div class="col-lg-4 col-md-4 col-sm-4">
    <div class="single_post_content">
        <h2><span>{!! $name_lt->TenLT !!}</span></h2>
        
        <ul class="spost_nav">
        	@foreach($news as $item)
            <li>
                <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <a href="{!! url('chi-tiet-tin',$item->id) !!}" class="media-left"> <img alt="" src="{!! url('upload/news',[$item->image]) !!}"> </a>

                    <div class="media-body"> 
                    	<a href="{!! url('chi-tiet-tin',[$item->id] ) !!}"> 
	                    	<figcaption class="bsbig_fig"><h5><b>{!! $item->titelname !!}</h5></b></figcaption></a>
	                    	 {!! $item->description !!} 	
                    </div>
                    
                </div>

            </li>
         	@endforeach   
        </ul>
        {!! $news->links() !!}
    </div>
     
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-4 col-md-4 col-sm-4">
    <div class="latest_post">
      <h2><span>Tin mới nhất</span></h2>
      <div class="latest_post_container">
        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
        <ul class="latest_postnav" style="height: 192px; overflow: hidden;">
            @foreach($tinmoinhat as $item1)
            <li style="margin-top: -13.0894px;">
                <div class="media"> <a href="{!! url('chi-tiet-tin',$item1->id) !!}" class="media-left"> <img alt="" src="{!! url('upload/news',[$item1->image]) !!}"> </a>
                  <div class="media-body">
                  <?php $tin = DB::table('news')->where('id','=',$item1->id)->first(); ?>
                   <a href="{!! url('chi-tiet-tin',$tin->id) !!}" class="catg_title">{!! $item1->titelname !!}</a></div>
                </div>
            </li>
            @endforeach
         </ul>
        
      </div>
    </div>
</div>

@stop