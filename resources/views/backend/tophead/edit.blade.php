@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update  
                        <a href="{{ route('topheader.index') }}" class="btn btn-danger float-end" style="margin-left: 65%">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <form action="{{ route('topheader.update',$topheadedit->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""> Email</label>
                            <input type="email" name="email" value="{{$topheadedit->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Phone Number </label>
                            <input type="phone" name="phone" id="phone" value="{{$topheadedit->phone}}" class="form-control">
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