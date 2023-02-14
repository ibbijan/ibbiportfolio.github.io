

@extends('backend.admin_master')
@section('content')

@section('title')

Admin Resume Experience Create
    
@endsection


@php
   $home = App\Models\Home::latest()->get();
@endphp

<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin Resume Experience Create</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_resume_experience_store')}}" method="POST" >
            @csrf

            

          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label > Profession Name :</label>
                    <input  type="text" name="profession_name" class="form-control"  placeholder="Enter Your Profession Name "> </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label > Profession Since :</label>
                    <input  type="text" name="profession_since" class="form-control"  placeholder="Enter Your Profession Since "> </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label > Location Where You Work:</label>
                    <input  type="text" name="location" class="form-control"  placeholder="Enter  location"> </div>
            </div>
          </div>


          

          
        

         

           
          

          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label > Name :</label>
                    <select name="home_id" id="" class="form-control">
                        <option value="" disabled>Select Name</option>
                        @foreach ($home as $item)
                        <option value="{{$item->id}}" >{{$item->name}}</option>

                            
                        @endforeach
                    </select>
            </div>


         
          </div>


      
         <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Add</button>
              </div>
         </div>

            
               
           
        </form>

    </div>
    <!-- /.box-body -->

</div>


<div class="box box-default">
  <div class="box-header with-border">
    <h4 class="box-title">Description</h4>
  </div>
  <!-- /.box-header -->
  <div class="box-body wizard-content">

      <form action="{{route('admin_resume_experience_point')}}" method="POST" >
          @csrf

          

       

          @php
          $experience = App\Models\Experience::latest()->get();
       @endphp
        

        
      

       

         
        

        <div class="row">
          <div class="col-md-12">
              <div class="form-group">
                  <label > Name :</label>
                  <select name="experience_id" id="" class="form-control">
                      <option value="" disabled>Select Name</option>
                      @foreach ($experience as $item)
                      <option value="{{$item->id}}" >{{$item->profession_name}}</option>

                          
                      @endforeach
                  </select>
          </div>
          <div class="col-md-12">
            <div class="form-group">
                <label > Name :</label>
                <select name="home_id" id="" class="form-control">
                    <option value="" disabled>Select Name</option>
                    @foreach ($home as $item)
                    <option value="{{$item->id}}" >{{$item->name}}</option>

                        
                    @endforeach
                </select>
        </div>

          


          <div class="col-md-12">
            <div class="form-group">
                <label > Description :</label>
               <textarea class="form-control" name="p1" id="" cols="30" rows="10"></textarea>
        </div>


       
        </div>


    
       <div class="col-md-12">
          <div class="form-group">
              <button type="submit" class="btn btn-success">Add</button>
            </div>
       </div>

          
             
         
      </form>

  </div>
  <!-- /.box-body -->

</div>

@endsection




