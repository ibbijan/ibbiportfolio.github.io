

@extends('backend.admin_master')
@section('content')

@section('title')

Admin Portfolio Category
    
@endsection


<div class="box box-default">
    <div class="box-header with-border">
      <h4 class="box-title">Admin Portfolio Category</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body wizard-content">

        <form action="{{route('admin_portfolio_category_store')}}" method="POST" >
            @csrf

            <section >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label > Category Name :</label>
                            <input  type="text" name="category_name" class="form-control"  placeholder="Enter Portfolio Category Name"> </div>
                    </div>

                    
                  
                   
                </div>

             

              




                <button type="submit" class="btn btn-success">Add</button>
               
            </section>
        </form>

    </div>
    <!-- /.box-body -->
  </div>

@endsection




