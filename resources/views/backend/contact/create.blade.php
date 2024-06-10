@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
 

            <div class="card"  style="margin-top: 5%; width: 70%; ">
                <div class="card-header">
                    <h3>Add  
                        <a href="{{ route('contacts.index') }}" class="btn btn-danger float-end" style="margin-left: 60%">BACK</a>
                    </h3>
                </div>
                <div class="card-body">

                    <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""> Sub Title </label>
                            <input type="text" id="sub_title" name="sub_title" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Address </label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for=""> Email </label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        
                        
                        <div class="form-group mb-3">
                            <label for=""> Phone </label>
                            <input type="text" id="phone" name="phone" class="form-control" required>
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