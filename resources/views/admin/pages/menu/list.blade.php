@extends('admin.master')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Menu </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><a style="color:white;" href="{!! url('admin/menu/add') !!}">Create New Menu</a></button>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menu</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                   
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>MenuName</th>
                          <th>Link</th>
                          <th>Ord</th>
                          <th>Activie</th>
                          <th>Function</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                      @foreach($menu as $item)
                        <tr>
                          <td>{!! $item['menuname'] !!}</td>
                          <td>{!! $item['link'] !!}</td>
                          <td>{!! $item['ord'] !!}</td>
                          <td>{!! $item['activie'] !!}</td>
                         
                          <td>
                            <i class="fa fa-pencil "><a href="{!! route('admin.menu.getEdit',$item['id']) !!}">Edit</a>
                              &nbsp;                   
                           <i class="fa fa-trash-o "><a onclick="return confirm('Are you sure ?')" href="{!! route('admin.menu.getDelete',$item['id']) !!}"> Delete</a></i></td>
                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@stop
     