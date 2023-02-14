

@extends('backend.admin_master')
@section('content')

@section('title')

Admin Resume Education Create
    
@endsection


@php
   $home = App\Models\Home::latest()->get();
@endphp

<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin Resume Education Create</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_resume_education_store')}}" method="POST" >
            @csrf

            




 

          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label > Degree Name :</label>
                    <input  type="text" name="degree_name" class="form-control"  placeholder="Enter Your Degree Name "> </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label > Degree Since :</label>
                    <input  type="text" name="degree_since" class="form-control"  placeholder="Enter Your Degree Since "> </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label > University Name:</label>
                    <input  type="text" name="uni_name" class="form-control"  placeholder="Enter Your University Name"> </div>
            </div>
          </div>


          

          
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label > Description :</label>
                    <textarea cols="10" rows="10" name="description" class="form-control"  placeholder="Tell About Your Education "> </textarea></div>
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

@endsection




