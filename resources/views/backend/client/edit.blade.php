@extends('backend.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h4>Edit & Update  
                        <a href="{{ route('ourclients.index') }}" class="btn btn-danger float-end" style="margin-left: 65%">BACK</a>
                    </h4>
                    
                </div>
                <div class="card-body">

                    <form action="{{ route('ourclients.update',$clientpage->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""> Image </label>
                            <img src="{{ asset('uploads/client/'.$clientpage->image)}}" alt="" height="150px" width="150px">
                            <input type="text" id="image" value="{{ $clientpage->image }}" name="image" class="form-control" >
                       
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Title </label>
                            <input type="text" id="title" value="{{ 'image code :'.$clientpage->title }}" name="title" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Client Name </label>
                            <input type="text" id="client_name" value="{{ $clientpage->client_name }}"  name="client_name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Profession </label>
                            <input type="text" id="profession" value="{{ $clientpage->profession }}"  name="profession" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary"> Update </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection