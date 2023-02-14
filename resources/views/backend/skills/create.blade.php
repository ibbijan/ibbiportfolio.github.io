

@extends('backend.admin_master')
@section('content')

@section('title')

Admin Skills Create
    
@endsection


<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin Skills Create</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_skills_store')}}" method="POST" >
            @csrf

            <section >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label > Skill Name :</label>
                            <input  type="text" name="skill" class="form-control"  placeholder="HTML"> </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label > Skill Percentage :</label>
                            <input min="1"  max="100" type="number" name="percentage" class="form-control"  placeholder="How Much You Know This Skill"> </div>
                    </div>

                  

                  
                   
                </div>

               
              




                <button type="submit" class="btn btn-success">Add</button>
               
            </section>
        </form>

    </div>
    <!-- /.box-body -->
  </div>

@endsection




