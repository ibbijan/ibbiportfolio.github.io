@extends('backend.admin_master')
@section('content')

@section('title')

Admin Change Password
    
@endsection


<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin Change Password</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_password_update',$admin->id)}}" method="POST">
            @csrf

            <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false" style="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="firstName5"> Current Password :</label>
                            <input type="password" name="old_password" class="form-control"  >
                        @error('old_password')
                            {{$message}}
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastName1">New Password :</label>
                            <input type="password" name="password" class="form-control"   
                            @error('password')
                            {{$message}}
                        @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastName1">Confirm Password :</label>
                            <input type="password" name="password_confirmation" class="form-control"  >
                            @error('password_confirmation')
                            {{$message}}
                        @enderror
                        </div>
                    </div>
                </div>

                <button class="btn btn-success">Update</button>
               
            </section>
        </form>

    </div>
    <!-- /.box-body -->
  </div>

@endsection

