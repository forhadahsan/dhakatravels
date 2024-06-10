@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h4>Edit & Update  
                        <a href="{{ route('contacts.index') }}" class="btn btn-danger float-end" style="margin-left: 65%">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <form action="{{ route('contacts.update',$contactpage->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""> Sub Title</label>
                            <input type="text" name="sub_title" value="{{$contactpage->sub_title }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">  Address </label>
                            <input type="text" name="address" value="{{$contactpage->address }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Email</label>
                            <input type="email" name="email" value="{{$contactpage->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Phone Number </label>
                            <input type="text" name="phone" id="phone" value="{{$contactpage->phone}}" class="form-control">
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