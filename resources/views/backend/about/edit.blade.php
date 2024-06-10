@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h4>Edit & Update  
                        <a href="{{ route('abouts.index') }}" class="btn btn-danger float-end" style="margin-left: 65%">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <form action="{{ route('abouts.update',$aboutpage->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""> Top  Content </label>
                            <input type="text" id="top_content" value="{{ $aboutpage->top_content }}" name="top_content" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Services </label>
                            <input type="text" id="services" value="{{ $aboutpage->services }}" name="services" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Service Content </label>
                            <input type="text" id="service_content" value="{{ $aboutpage->service_content }}" name="service_content" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Mid Header </label>
                            <input type="text" id="mid_header" value="{{ $aboutpage->mid_header }}" name="mid_header" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Mid Content </label>
                            <input type="text" id="mid_content" value="{{ $aboutpage->mid_content }}" name="mid_content" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Image1 </label>
                            <input type="file" id="image1" value="" name="image1" class="form-control"  >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Image2 </label>
                            <input type="file" id="image2" name="image2" class="form-control" >
                        </div>
                    
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection