@php
   $about = App\Models\About::first();
@endphp


<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us For Projects..</p>
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>{{$about->city}}</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>{{$about->email}}</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>{{$about->phone}}</p>
            </div>

          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="{{route('contact_store')}}" method="post" role="form" >
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label >Your Name</label>
                <input type="text" name="name" class="form-control"  required>
              </div>
              <div class="form-group col-md-6">
                <label >Your Email</label>
                <input type="email" class="form-control" name="email"  required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label >Phone</label>
                  <input type="text" class="form-control" name="phone"  required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label >Subject</label>
                  <input type="text" class="form-control" name="subject"  required>
                </div>
              </div>

            </div>

           
            <div class="form-group">
              <label >Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
           
            <div class="text-center"><button type="submit" class="btn btn-success mt-2">Send Message</button></div>

          </form>
        </div>

      </div>

    </div>
  </section>