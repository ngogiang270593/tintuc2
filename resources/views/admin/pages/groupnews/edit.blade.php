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
                    <h2>ADD GROUP NEWS</h2>
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
                    <form method ="post" action="" data-parsley-validate class="form-horizontal form-label-left">
                       <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="txtName" required="required" class="form-control col-md-7 col-xs-12" value="{!! $groupnews['groupnewsname'] !!}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Level <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="txtLevel" required="required" class="form-control col-md-7 col-xs-12"  value="{!! $groupnews['level'] !!}">
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Activie <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="radio iCheck-helper">
                            <label>
                              <input
                                @if($groupnews['activie']  == 1) 
                                  checked="checked"
                                @endif  
                              type="radio" name="rdActivie" value="1">1<br>
                              <input 
                                @if($groupnews['activie']  == 0) 
                                  checked="checked"
                                @endif 
                                type="radio" name="rdActivie" value="0">0<br>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Index <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="radio iCheck-helper">
                            <label>
                              <input 
                                @if($groupnews['index']  == 1) 
                                  checked="checked"
                                @endif
                              type="radio" name="rdIndex" value="1">Yes<br>
                              <input
                                @if($groupnews['index']  == 0) 
                                  checked="checked"
                                @endif
                               type="radio" name="rdIndex" value="0">No<br>
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
@stop
        