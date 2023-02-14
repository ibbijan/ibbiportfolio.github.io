

@extends('backend.admin_master')
@section('content')

@section('title')

Admin Approved Contacts
    
@endsection



<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Admin Approved Contacts</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <div id="example5_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example5_length"></div></div><div class="col-sm-12 col-md-6"><div id="example5_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example5"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example5" class="table table-bordered table-striped dataTable" style="width: 100%;" role="grid" aria-describedby="example5_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 103.333px;">Sr.No</th>
                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 161.333px;">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71.3333px;">Email</th>
                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 26.3333px;">Phone</th>
                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 26.3333px;">Subject</th>
                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 26.3333px;">Message</th>


                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 66.3333px;">Actions</th>
            </thead>
            <tbody>
                
         
                @foreach ($contacts as $key=>$item)
                    
            <tr role="row" class="odd">
                    <td class="sorting_1">{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->subject}}</td>
                    <td style="width: 30%">{{$item->message }}</td>


                   
                    <td >
                       <a  class="btn btn-success">Approved</a>
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
