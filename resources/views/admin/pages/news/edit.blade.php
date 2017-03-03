@extends('admin.master')
@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>EDIIT NEWS</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form method="post" action="" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      @include('admin.blocks.error') 
                      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tên Thể Loại<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="txtGroupNewsName" id="tentheloai" class="form-control">
                          
                          @foreach($groupnews as $item)
                            
                            <option @if($item['id']==$news['groupnewsid']) selected="selected" @endif value="{!! $item['id'] !!}">{!! $item['groupnewsname'] !!}</option>
                          @endforeach  
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >TenLT<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="txtTenLT" id="tenloaitin" class="form-control">
                          
                            @foreach($typenews as $item1)
                              <option @if($item1['idLT']==$news['idLT']) selected="selected" @endif value="{!! $item1['idLT'] !!}">{!! $item1['TenLT'] !!}</option>
                            @endforeach    
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="txtTitleName" value="{!! $news['titelname'] !!}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  required="required" class="form-control" name="txtDes" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10">{!! $news['description'] !!}</textarea>
                          <script>CKEDITOR.replace('txtDes');</script>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Content <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  required="required" class="form-control" name="txtContent" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10">{!! $news['content'] !!}</textarea>
                          <script>CKEDITOR.replace('txtContent');</script>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>
                            <img width="400px" src="http://localhost:8000/upload/news/{!! $news['image'] !!}">
                            </p>
                            <input class="form-control" type="file" name="image" value="Browse">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Up News
                        </label>
                        @foreach($username as $item)       
                        @endforeach
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="txtUpNews" class="form-control">
                            <option value="{!! $item['name'] !!}">{!! $item['name'] !!}</option>
                          </select>
                        </div>
                       </div>
                      <div class="form-group">
                        <label  class="control-label col-md-3 col-sm-3 col-xs-12">Activie</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="radio iCheck-helper">
                            <label>
                              <input @if($news['activie']==1) checked="checked" @endif type="radio" name="rdActivie" value="1">Activie
                            </label>
                            <label>
                              <input @if($news['activie']==0) checked="checked" @endif type="radio" name="rdActivie" value="0">No Activie<br>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

           
          </div>
        </div>
        <!-- /page content -->
         <script>
         $(document).ready(function(){
              $('#tentheloai').change(function() {
                var theloai_id = $(this).val();
               
                $.get('{!! url('') !!}/admin/news/ajax/loaitin/'+theloai_id,function(data){
                  $('#tenloaitin').html(data);
                });
               /* $.post(
                    'http://localhost:8000/admin/news/ajax/loaitin/', // URL 
                    {theloai_id : $(this).val()},  // Data
                    function(result){ // Success
                        $('#tenloaitin').html(data);
                    }, 
                    'text' // dataTyppe
                );*/
              });
            });
         
        </script> 
@stop
  