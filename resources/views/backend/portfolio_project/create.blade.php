

@extends('backend.admin_master')
@section('content')

@section('title')

Admin Portfolio Project
    
@endsection


<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin Portfolio Project</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_portfolio_project_store')}}" method="POST" enctype="multipart/form-data" >
            @csrf

            <section >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Heading :</label>
                            <input type="text" name="project_heading" class="form-control"  placeholder="Enter Your Heading"> </div>
                    </div>

                  
                   
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Decription :</label>
                            <textarea type="text" cols="05" rows="10" name="project_description" class="form-control"  placeholder="Enter Your description"></textarea> </div>
                    </div>

                  
                   
                </div>

               

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > Client Name</label><br>
                            <input type="text" placeholder="Enter Your Project Client Name" name="client_name" class="form-control"  > </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Project URL</label><br>
                            <input type="text" name="project_url"  placeholder="Enter Your Project URL" class="form-control"  > </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Project Date</label><br>
                            <input type="date" name="project_date"   class="form-control"  > </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label > Image :</label>
                            <input type="file" name="project_image"  placeholder="Enter Your Degree" class="form-control"  placeholder="Enter Your degree"> </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label > Multi Image :</label>
                            <input type="file" type="file" name="multiImage[]" class="form-control" multiple="" placeholder="Enter Your Degree" class="form-control"  placeholder="Enter Your degree"> </div>
                    </div>

                    @php
                       $cat = App\Models\PortfolioCategory::latest()->get();
                    @endphp

                    <div class="col-md-4">
                        <div class="form-group">
                            <label > Category Name :</label>
                            <select name="portfolio_category_id" id="" class="form-control">
                                <option value="" disabled>Select Category</option>
                                @foreach ($cat as $item)
                                <option value="{{$item->id}}" >{{$item->category_name}}</option>
        
                                    
                                @endforeach
                            </select>
                    </div>
        
                  
                   
                </div>

           




                <button type="submit" class="btn btn-success">Add</button>
               
            </section>
        </form>

    </div>
    <!-- /.box-body -->
  </div>

@endsection




