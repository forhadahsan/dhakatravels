@extends('frontend.partials.main')

@section('main-container')
 
<div class="container-fluid py-5 " style="margin: 5px 0;  ">
    <div class="container py-5">
       
        <div class="row">
          @foreach ($storypage as $item)
          <div class="card shadow-lg p-3 bg-body rounded" style="max-width: 98%; margin: auto;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{asset('uploads/story/'.$item->image)}}" class="img-fluid rounded-start" alt="image">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"> {{$item->title}}</h5>
                  <p class="card-text"> {{ $item->sub_title}} </p>
                  <p class="card-text"> Updated at<small class="text-muted"> {{ $item->updated_at}} </small></p>
                </div>
              </div>
            </div>
        </div>
          @endforeach
            
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