

@extends('backend.admin_master')
@section('content')

@section('title')

Admin SEO
    
@endsection


<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin SEO</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_seo_update',$home->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <section >
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > Title :</label>
                            <input type="text" name="title" class="form-control"  placeholder="Enter Your title" value="{{$home->title}}"> </div>
                    </div>

                   
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > icon</label><br>
                            <input type="hidden" name="old_icons" id="" value="{{$home->icon}}">
                            <input type="file" name="icon" class="form-control"  > </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > keywords</label><br>
                            <input type="text" data-role="tagsinput" name="keywords" class="form-control"  placeholder="Enter Your keywords" value="{{$home->keywords}}"> </div>
                    </div>

                  
                   
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label > description :</label>
                            <textarea type="text" name="description" class="form-control"  placeholder="Enter Your description" >{{$home->description}}</textarea> </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label > google_analytics :</label>
                            <textarea type="text" name="google_analytics" class="form-control"  placeholder="Enter Your google_analytics" >{{$home->google_analytics}}</textarea> </div>
                    </div>

                </div>

             

             
                  
               




                <button type="submit" class="btn btn-success">Update</button>
               
            </section>
        </form>

    </div>
    <!-- /.box-body -->
  </div>

@endsection




