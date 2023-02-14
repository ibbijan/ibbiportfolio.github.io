@extends('backend.admin_master')
@section('content')

@section('title')

Admin Profile Page
    
@endsection


<div class="box">
    <div class="box-body box-profile">            
      <div class="row">
        <div class="col-12">
            <div>
                <p>Email :<span class="text-gray pl-10"><b>{{$admin->email}}</b></span> </p>
                <p>Name :<span class="text-gray pl-10"><b>{{$admin->name}}</b></span></p>
                <p>Status :<span class="text-gray pl-10"><b>Super Admin</b></span></p>

            </div>
        </div>
        <div class="col-12">
            <div class="pb-15">						

                <div class="user-social-acount">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{route('admin_password',$admin->id)}}" class="btn btn-circle btn-large btn-social-icon btn-success"  title="Change The Password"><i class="fa fa-exchange"></i></a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{route('admin_edit',$admin->id)}}" class="btn btn-circle btn-social-icon btn-warning" title="Edit Profile"><i class="fa fa-edit"></i></a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{route('admin_logout')}}" class="btn btn-circle btn-social-icon btn-danger" title="Logout"><i class="fa fa-power-off"></i></a>
                        </div>
                    </div>

                    
                    
                    
                </div>
            </div>
        </div>
      
      </div>
    </div>
    <!-- /.box-body -->
  </div>


@endsection