@extends('backend.admin_master')
@section('content')

@section('title')

Admin Profile Edit
    
@endsection


<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin Profile Edit</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_update',$admin->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false" style="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="firstName5"> Name :</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$admin->name}}"> </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastName1">Email :</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{$admin->email}}"> </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastName1">Image :</label>
                            <input type="hidden" name="old_image" class="form-control" id="image" value="{{$admin->image}}"> 

                            <input type="file" name="image" class="form-control" id="image" > </div>
                    </div>

                    
                </div>

                <button class="btn btn-success">Update</button>
               
            </section>
        </form>

    </div>
    <!-- /.box-body -->
  </div>

@endsection

