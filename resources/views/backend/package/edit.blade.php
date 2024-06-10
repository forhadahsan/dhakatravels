@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h4>Edit & Update  
                        <a href="{{ route('packages.index') }}" class="btn btn-danger float-end" style="margin-left: 65%">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <form action="{{ route('packages.update',$packagepage->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""> Location </label>
                            <input type="text" id="location" value="{{ $packagepage->location }}" name="location" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Duration </label>
                            <input type="text" id="duration" value="{{ $packagepage->duration }}" name="duration" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Person </label>
                            <input type="text" id="person" value="{{ $packagepage->person }}" name="person" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Area </label>
                            <input type="text" id="area" value="{{ $packagepage->area }}" name="area" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Image </label>
                            <input type="file" id="image" value="{{ $packagepage->image }}" name="image" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Rating </label>
                            <input type="text" id="rating" value="{{ $packagepage->rating }}" name="rating" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Price </label>
                            <input type="text" id="price" value="{{ $packagepage->price }}" name="price" class="form-control" >
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