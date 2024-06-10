@extends('backend.layout')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h3> List   
                        <a href="{{ route('blogs.create') }}" class="btn btn-primary float-end" style="margin-left: 60%">Add </a>
                    </h3>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Image </th>
                                <th> Subject  </th>
                                <th> Subject Details </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($blogpage as $key => $item)
                            <tr>
                                <td> {{ ++$key }} </td>
                                {{-- <td>{{ $item->id }}</td> --}}  
                                <td>
                                     <img src="{{ asset('uploads/blog/'.$item->image)}}" alt="" height="150px" width="150px">
                                </td>
                                <td>{{ $item->subject }}</td>
                                <td>{{ $item->subject_details }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('blogs.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    {{-- <a href="{{ route('blogs.destroy', $item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection