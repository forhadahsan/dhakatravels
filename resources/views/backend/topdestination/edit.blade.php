@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h4>Edit & Update  
                        <a href="{{ route('topdestination.index') }}" class="btn btn-danger float-end" style="margin-left: 65%">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <form action="{{ route('topdestination.update',$distinationpage->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""> Image </label>
                            <img src="{{ asset('uploads/team/'.$distinationpage->image)}}" alt="" height="200px" width="300px">
                           
                            <input type="text" id="image" value="{{ $distinationpage->image }}" name="image" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Country Name </label>
                            <input type="text" id="country_name" value="{{ $distinationpage->country_name }}" name="country_name" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Town  </label>
                            <input type="text" id="town" value="{{ $distinationpage->town }}" name="town" class="form-control" >
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