@extends('kasper')
@section('kaspermain')
  <!--
        Home Slider
        ==================================== -->
        <section id="service">
            <div class="container">
                <div class="row"> 
                    <h1>Halaman Card</h1>
                    @for ($i=1; $i <= 100; $i++)
        @if ($i % 2)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endif
    @endfor
                   
                </div>
            </div>
        </section>
        <!--
        End #home Slider
        ========================== -->

@endsection