@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
 

            <div class="card"  style="margin-top: 5%; width: 70%; ">
                <div class="card-header">
                    <h3>Add  
                        <a href="{{ route('packages.index') }}" class="btn btn-danger float-end" style="margin-left: 60%">BACK</a>
                    </h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Location </label>
                            <input type="text" id="location" name="location" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Duration </label>
                            <input type="text" id="duration" name="duration" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Person </label>
                            <input type="text" id="person" name="person" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Area </label>
                            <input type="text" id="area" name="area" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Image </label>
                            <input type="file" id="image" name="image" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Rating </label>
                            <input type="text" id="rating" name="rating" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Price </label>
                            <input type="text" id="price" name="price" class="form-control" required>
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