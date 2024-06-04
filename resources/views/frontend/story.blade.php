@extends('frontend.partials.main')

@section('main-container')
 
<div class="container-fluid py-5 " style="margin: 90px 0;  ">
    <div class="container py-5">
       
        <div class="row">
            <div class="card mb-3 shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 98%; margin: auto;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('frontend/travelassets/img/about1.jpg')}}" class="img-fluid rounded-start" alt="image">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 20 july 2024 </small></p>
                    </div>
                  </div>
                </div>
            </div>
            {{-- <div class="col-md-6">
                <img src="{{ asset('frontend/travelassets/img/application.jpeg')}}" alt="" style="width: 330px;">
            </div>
            <div class="col-md-6">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi, perspiciatis mollitia facilis quia placeat 
                    ipsa minima dignissimos sint obcaecati 
                    omnis iusto ducimus expedita similique dolor quidem fuga! Unde, quod aperiam doloremque error quia voluptatem?
                </p>
            </div> --}}
        </div>
    </div>
</div>

@endsection