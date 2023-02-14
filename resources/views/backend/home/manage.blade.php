

@extends('backend.admin_master')
@section('content')

@section('title')

Admin Home Manage
    
@endsection



<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Manage Home</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <div id="example5_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example5_length"></div></div><div class="col-sm-12 col-md-6"><div id="example5_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example5"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example5" class="table table-bordered table-striped dataTable" style="width: 100%;" role="grid" aria-describedby="example5_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 103.333px;">Sr.No</th>
                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 161.333px;">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71.3333px;">Skills</th>
                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 26.3333px;">Home Image</th>
                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 26.3333px;">Profile Image</th>

                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 66.3333px;">Actions</th>
            </thead>
            <tbody>
                
         
                @foreach ($home as $key=>$item)
                    
            <tr role="row" class="odd">
                    <td class="sorting_1">{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->skills}}</td>
                    <td><img style="width: 50px; height: 50px;" src="{{asset('backend/home_image/'.$item->home_image)}}" alt=""></td>
                    <td><img style="width: 50px; height: 50px;" src="{{asset('backend/profile_image/'.$item->profile_image)}}" alt=""></td>
                   
                    <td style="width: 20%">
                        <a href="{{route('admin_home_edit',$item->id)}}" class="btn btn-circle btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="{{route('admin_home_delete',$item->id)}}" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>

                    </td>
                </tr>
                @endforeach

              </tbody>
           
        </table></div></div>
        
        </div>
    </div>
    <!-- /.box-body -->
  </div>




@endsection
