<section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Skills</h2>
        <p>This is my Skills. And I'm Still Improving..</p>
      </div>

      <div class="row skills-content">
        @php
        $skill =  App\Models\Skill::latest()->get();
      @endphp
 @foreach ($skill as $item)
        <div class="col-lg-6" data-aos="fade-up">

        

       
            

          <div class="progress">
            <span class="skill">{{$item->skill}} <i class="val">{{$item->percentage}}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$item->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        

        </div>
        @endforeach
    

      </div>

    </div>
  </section>