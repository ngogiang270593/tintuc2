@extends('admin.master')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Type News </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><a style="color:white;" href="{!! url('admin/typenews/add') !!}">Create New TypeNews</a></button>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Type News</small></h2>
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
                          <th>TenLoaiTin</th>
                          <th>TenLoaiTin_KhongDau</th>
                          <th>ThuTu</th>
                          <th>Activie</th>
                          <th>TenTheLoai</th>
                          <th>Function</th>
                        </tr>
                      </thead>


                      <tbody>
                      @foreach($typenews as $item)
                        <tr>
                          <td>{!! $item->TenLT !!}</td>
                          <td>{!! $item->TenLT_KhongDau !!}</td>
                          <td>{!! $item->ThuTu !!}</td>
                          <td>{!! $item->Activie !!}</td>
                          <td>{!! $item->groupnewsname !!}</td>
                          <td>
                            <i class="fa fa-pencil "><a href="{!! route('admin.typenews.getEdit',$item->idLT) !!}">Edit</a>
                              &nbsp;                   
                           <i class="fa fa-trash-o "><a onclick="return confirm('Are you sure ?')" href="{!! route('admin.typenews.getDelete',$item->idLT) !!}"> Delete</a></i></td> 
                         </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                    {!! $typenews->links() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@stop
     