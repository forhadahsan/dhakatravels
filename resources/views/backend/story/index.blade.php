@extends('backend.layout')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h3> List   
                        <a href="{{ route('stories.create') }}" class="btn btn-primary float-end" style="margin-left: 60%">Add </a>
                    </h3>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Image </th>
                                <th> Title  </th>
                                <th> Sub Title </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($storypage as $key => $item)
                            <tr>
                                <td> {{ ++$key }} </td>
                                {{-- <td>{{ $item->id }}</td> --}}  
                                <td>
                                     <img src="{{ asset('uploads/story/'.$item->image)}}" alt="" height="150px" width="150px">
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->sub_title }}</td>
                                <td>
                                    <a href="{{ route('stories.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('stories.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    {{-- <a href="{{ route('stories.destroy', $item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
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