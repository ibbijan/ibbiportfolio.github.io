@extends('frontend.master')
@section('content')



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{$project->project_heading}}</h2>
          <ol>
            <li><a href="{{route('dashboard')}}">Home</a></li>
            <li>{{$project->project_heading}}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                @foreach ($multi as $item)
                    
              
                <div class="swiper-slide">
                  <img src="{{asset('backend/project_image/multi_images/'.$item->multiImage)}}" alt="">
                </div>
                @endforeach
               

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: {{$project->category->category_name}}</li>
                <li><strong>Client</strong>: {{$project->client_name}}</li>
                <li><strong>Project date</strong>: {{$project->project_date}}</li>
                <li><strong>Project URL</strong>: <a href="{{$project->project_url}}">{{$project->project_url}}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{$project->project_heading}}</h2>
              <p>
                {!!$project->project_description !!}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection