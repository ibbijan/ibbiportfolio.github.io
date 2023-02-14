@php
    $services = App\Models\Service::latest()->get();
@endphp

<section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>These services are available for projects...</p>
      </div>

      <div class="row">
        @foreach ($services as $item)
            
        <div class="col-md-4 icon-box" data-aos="fade-up">
          <div class="icon"><i class="{{$item->icons}}"></i></div>
          <h4 class="title"><a href="#contact">{{$item->heading}}</a></h4>
          <p class="description">{{$item->description}}</p>
        </div>
        @endforeach

       
      </div>

    </div>
  </section>