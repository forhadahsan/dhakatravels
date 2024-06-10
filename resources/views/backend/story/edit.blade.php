@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h4>Edit & Update  
                        <a href="{{ route('stories.index') }}" class="btn btn-danger float-end" style="margin-left: 65%">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <form action="{{ route('stories.update',$storypage->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""> Image </label>
                            <img src="{{ asset('uploads/team/'.$storypage->image)}}" alt="" height="200px" width="300px">
                           
                            <input type="text" id="image" value="{{ $storypage->image }}" name="image" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Title </label>
                            <input type="text" id="title" value="{{ $storypage->title }}" name="title" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Sub Title </label>
                            <input type="text" id="sub_title" value="{{ $storypage->sub_title }}" name="sub_title" class="form-control" >
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