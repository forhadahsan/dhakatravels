@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h4>Edit & Update  
                        <a href="{{ route('services.index') }}" class="btn btn-danger float-end" style="margin-left: 65%">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <form action="{{ route('services.update',$servicepage->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""> Services </label>
                            <input type="text" id="service_name" value="{{ $servicepage->service_name }}" name="service_name" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Service Content </label>
                            <input type="text" id="service_content" value="{{ $servicepage->service_content }}" name="service_content" class="form-control" >
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