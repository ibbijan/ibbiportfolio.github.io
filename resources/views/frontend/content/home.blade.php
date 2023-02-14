@php
   $home = App\Models\Home::latest()->limit(1)->first();
@endphp

<style>
    #hero{
        background-image: url('{{ asset('backend/home_image/' . $home->home_image) }}')
    }
</style>


<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{$home->name}}</h1>
      <p>I'm <span class="typed" data-typed-items="{{$home->skills}}"></span></p>
    </div>
  </section>