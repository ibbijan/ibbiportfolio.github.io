

@extends('backend.admin_master')
@section('content')

@section('title')

Admin About Create
    
@endsection


<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin About Create</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_about_update',$about->id)}}" method="POST" >
            @csrf

            <section >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Heading :</label>
                            <input type="text" value="{{$about->heading}}" name="heading" class="form-control"  placeholder="Enter Your Heading"> </div>
                    </div>

                  
                   
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Decription :</label>
                            <textarea type="text" cols="05"  rows="10" name="description" class="form-control"  placeholder="Enter Your description">{{$about->description}}</textarea> </div>
                    </div>

                  
                   
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Decription 2 :</label>
                            <textarea type="text" cols="05" rows="10"   name="desrcription2" class="form-control"  placeholder="Enter Your description2">{{$about->desrcription2}}</textarea> </div>
                    </div>

                  
                   
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > Website</label><br>
                            <input type="text" placeholder="Enter Your Website Link" value="{{$about->website}}" name="website" class="form-control"  > </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label >Phone</label><br>
                            <input type="text" name="phone"  placeholder="Enter Your Phone Number"value="{{$about->phone}}" class="form-control"  > </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label >City</label><br>
                            <input type="text" name="city"  placeholder="Enter Your City Name" value="{{$about->city}}" class="form-control"  > </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > Degree :</label>
                            <input type="text" name="degree"  placeholder="Enter Your Degree" value="{{$about->degree}}" class="form-control"  placeholder="Enter Your degree"> </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label > Email :</label>
                            <input type="email" name="email"  placeholder="Enter Your Email" value="{{$about->email}}" class="form-control"  placeholder="Enter Your email"> </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Birthday</label><br>
                            <input type="date"  name="birthday" value="{{$about->birthday}}" class="form-control"  > </div>
                    </div>

                </div>




                <button type="submit" class="btn btn-success">Add</button>
               
            </section>
        </form>

    </div>
    <!-- /.box-body -->
  </div>

@endsection




