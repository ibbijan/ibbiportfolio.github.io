

@extends('backend.admin_master')
@section('content')

@section('title')

Admin Home Create
    
@endsection


<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin Home Create</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_home_store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <section >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Name :</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Your Name"> </div>
                    </div>

                  
                   
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label > Home Image</label><br>
                            <input type="file" name="home_image" class="form-control"  > </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Profile Image</label><br>
                            <input type="file" name="profile_image" class="form-control"  > </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > Facebook :</label>
                            <input type="text" name="facebook" class="form-control"  placeholder="Enter Your Facebook Link"> </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > Instagram :</label>
                            <input type="text" name="instagram" class="form-control"  placeholder="Enter Your Instagram Link"> </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > Twitter :</label>
                            <input type="text" name="twitter" class="form-control"  placeholder="Enter Your Twitter Link"> </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Skills</label><br>
                            <input type="text" data-role="tagsinput" name="skills" class="form-control"  placeholder="Enter Your Skills"> </div>
                    </div>

                </div>




                <button type="submit" class="btn btn-success">Add</button>
               
            </section>
        </form>

    </div>
    <!-- /.box-body -->
  </div>

@endsection




