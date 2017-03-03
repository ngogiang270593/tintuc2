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
                    <h2>ADD NEWS</h2>
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
                    <form method="post" action="{!! url('admin/news/add') !!}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      @include('admin.blocks.error') 
                      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tên Thể Loại<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="txtGroupNewsName" id="tentheloai" class="form-control">
                         
                          @foreach($groupnews as $item)
                            
                            <option value="{!! $item['id'] !!}">{!! $item['groupnewsname'] !!}</option>
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
                              <option value="{!! $item1['idLT'] !!}">{!! $item1['TenLT'] !!}</option>
                            @endforeach    
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="txtTitleName" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  required="required" class="form-control" name="txtDes" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                          <script>CKEDITOR.replace('txtDes');</script>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Content <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  required="required" class="form-control" name="txtContent" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                          <script>CKEDITOR.replace('txtContent');</script>

                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
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
                              <input checked="checked" type="radio" name="rdActivie" value="1">Activie
                            </label>
                            <label>
                              <input type="radio" name="rdActivie" value="0">No Activie<br>
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
                $.get('ajax/loaitin/'+theloai_id,function(data){
                  //alert(data);
                  $('#tenloaitin').html(data);
                });
              });
            });
         
        </script> 
@stop
  