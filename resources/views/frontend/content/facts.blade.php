<section id="facts" class="facts">
    <div class="container">

      <div class="section-title">
        <h2>Facts</h2>
        <p></p>
      </div>
      @php
      $clients = App\Models\Contact::where('status',1)->get();
         $projects = App\Models\PortfolioProject::all();
         $users = App\Models\User::all();

      @endphp

      <div class="row no-gutters">

        <div class="col-lg-4 col-md-4 d-md-flex align-items-md-stretch" data-aos="fade-up">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="{{count($clients)}}" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Happy Clients</strong> Approved Clients</p>
          </div>
        </div>

      

        <div class="col-lg-4 col-md-4 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="{{count($projects)}}" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Projects</strong> My All Projects</p>
          </div>
        </div>

   

        <div class="col-lg-4 col-md-4 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="count-box">
            <i class="bi bi-people"></i>
            <span data-purecounter-start="0" data-purecounter-end="{{count($users)}}" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Hard Workers</strong> Team Members</p>
          </div>
        </div>

      </div>

    </div>
  </section>