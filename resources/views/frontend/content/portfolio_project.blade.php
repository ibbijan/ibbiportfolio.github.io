<section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>I've Done This Projects...</p>
      </div>

      @php
        $categories =  App\Models\PortfolioCategory::latest()->get();
      @endphp


      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
          
@foreach ($categories as $item)
  

            <li data-filter=".filter-category{{$item->id}}">{{$item->category_name}}</li>

@endforeach

          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

@php
 $projects = App\Models\PortfolioProject::latest()->get();
@endphp

        @foreach ($projects as $project)
            
        
        <div class="col-lg-4 col-md-6 portfolio-item filter-category{{$project->portfolio_category_id}}"  >
          <div class="portfolio-wrap">
            <img src="{{asset('backend/project_image/'.$project->project_image)}}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{asset('backend/project_image/'.$project->project_image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$project->project_heading}}"><i class="bx bx-plus"></i></a>
              <a href="{{route('portfolio_project_detail',$project->id)}}" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>

        @endforeach
       

      </div>

    </div>
  </section>