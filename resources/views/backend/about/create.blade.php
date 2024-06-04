@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
 

            <div class="card"  style="margin-top: 5%; width: 70%; ">
                <div class="card-header">
                    <h3>Add  
                        <a href="{{ route('abouts.index') }}" class="btn btn-danger float-end" style="margin-left: 60%">BACK</a>
                    </h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""> Top  Content </label>
                            <input type="text" id="top_content" name="top_content" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Services </label>
                            <input type="text" id="services" name="services" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Mid Header </label>
                            <input type="text" id="mid_header" name="mid_header" class="form-control" required>
                        </div>
                        
                        
                        <div class="form-group mb-3">
                            <label for=""> Mid Content </label>
                            <input type="text" id="mid_content" name="mid_content" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Image1 </label>
                            <input type="file" id="image1" name="image1" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Image2 </label>
                            <input type="file" id="image2" name="image2" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection