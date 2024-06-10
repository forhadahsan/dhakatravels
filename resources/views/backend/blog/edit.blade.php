@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h4>Edit & Update  
                        <a href="{{ route('blogs.index') }}" class="btn btn-danger float-end" style="margin-left: 65%">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <form action="{{ route('blogs.update',$blogpage->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""> Image </label>
                            <img src="{{ asset('uploads/team/'.$blogpage->image)}}" alt="" height="200px" width="300px">
                           
                            <input type="text" id="image" value="{{ $blogpage->image }}" name="image" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Subject </label>
                            <input type="text" id="subject" value="{{ $blogpage->subject }}" name="subject" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Subject Details  </label>
                            <input type="text" id="subject_details" value="{{ $blogpage->subject_details }}" name="subject_details" class="form-control" >
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