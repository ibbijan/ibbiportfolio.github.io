@php
   $home = App\Models\Home::latest()->get();
@endphp

@extends('backend.admin_master')
@section('content')

@section('title')

Admin Service Create
    
@endsection


<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin Service Create</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_service_store')}}" method="POST" >
            @csrf

            <section >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label > Heading :</label>
                            <input type="text" name="heading" class="form-control"  placeholder="Enter Your Heading"> </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label > Icon :</label>
                            <input type="text" name="icons" class="form-control"  placeholder="Enter Your Icon"> </div>
                    </div>

                  

                  
                   
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Decription :</label>
                            <textarea type="text" cols="05" rows="10" name="description" class="form-control"  placeholder="Enter Your description"></textarea> </div>
                    </div>

                  
                   
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
    


                <button type="submit" class="btn btn-success">Add</button>
               
            </section>
        </form>

    </div>
    <!-- /.box-body -->
  </div>

@endsection




