@extends('backend.layout')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h3> List   
                        <a href="{{ route('packages.create') }}" class="btn btn-primary float-end" style="margin-left: 60%">Add </a>
                    </h3>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th>  Location </th>
                                <th>  Duration </th>
                                <th>  Person </th>
                                <th>  Area </th>
                                <th>  Image </th>
                                <th>  Rating </th>
                                <th>  Price </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($packagepage as $key => $item)
                            <tr>
                                <td> {{ ++$key }} </td>
                                {{-- <td>{{ $item->id }}</td> --}}
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->duration }}</td>
                                <td>{{ $item->person }}</td>
                                <td>{{ $item->area }}</td>
                                <td>
                                    <img src="{{ asset('uploads/package/'.$item->image)}}" alt="" height="150px" width="150px">
                                </td>
                                <td>{{ $item->rating }}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a href="{{ route('packages.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('packages.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                                {{-- <td>
                                    <a href="{{ route('packages.destroy', $item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td> --}}
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