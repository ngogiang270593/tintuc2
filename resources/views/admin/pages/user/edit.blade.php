@extends('admin.master')
@section('content')
<div class="right_col" role="main">
  <div class="">
    
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>ADD USERS</h2>
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
            <form action="" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
              @include('admin.blocks.error') 
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">UserName <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="txtUserName" required="required" class="form-control col-md-7 col-xs-12" value="{!! $user['name'] !!}">
                </div>
              </div>
              <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">PassWord <span class="required">*</span>
               </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="password" name="txtPass" required="required" class="form-control col-md-7 col-xs-12">
               </div>
              </div>
              <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12">RePassWord <span class="required">*</span></label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input name="txtRePass" class="form-control col-md-7 col-xs-12" required="required" type="password">
               </div>
              </div>
              <div class="form-group">
               <label  class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <input name="txtEmail" class="form-control col-md-7 col-xs-12" required="required" type="email" value="{!! $user['email'] !!}">
               </div>
              </div>
              <div class="form-group">
               <label  class="control-label col-md-3 col-sm-3 col-xs-12">Image<span class="required">*</span></label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                   <p>
                      <img width="400px" src="http://localhost/larwebnews/public/upload/{!!$user['image']!!}">
                   </p>
                 <input name="fImage" class="form-control col-md-7 col-xs-12" type="file" required="required">
               </div>
              </div>
              <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12">Role <span class="required">*</span></label>
               <div class="col-md-6 col-sm-6 col-xs-12" >
                 <select name="txtRole" class="form-control">                      
                      <option value="1" @if($user['role']==1) selected="selected" @endif>1</option>
                      <option value="2" @if($user['role']==2) selected="selected" @endif>2</option>
                 </select>
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
@stop