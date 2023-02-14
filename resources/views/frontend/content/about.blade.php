@php
   $about = App\Models\About::latest()->limit(1)->first();
@endphp

<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
        <p>{{$about->description}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$about->heading}}</h3>
          <p class="fst-italic">
        <p>{{$about->desrcription2}}</p>
            
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about->birthday}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$about->website}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$about->phone}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>

                @php

                    $age = Carbon\Carbon::parse($about->birthday)->age;
                @endphp


                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$age}}</span></li>



                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{$about->email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>

    </div>
  </section>