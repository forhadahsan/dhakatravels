@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
 

            <div class="card"  style="margin-top: 5%; width: 70%; ">
                <div class="card-header">
                    <h3>Add  
                        <a href="{{ route('topdestination.index') }}" class="btn btn-danger float-end" style="margin-left: 60%">BACK</a>
                    </h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('topdestination.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for=""> Image </label>
                            <input type="file" id="image" name="image" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Country Name </label>
                            <input type="text" id="country_name" name="country_name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Town </label>
                            <input type="text" id="town" name="town" class="form-control" required>
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