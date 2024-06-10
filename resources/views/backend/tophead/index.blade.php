@extends('backend.layout')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card"  style="margin-top: 5%;">
                <div class="card-header">
                    <h3> List   
                        <a href="{{ route('topheader.create') }}" class="btn btn-primary float-end" style="margin-left: 60%">Add </a>
                    </h3>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Gmail</th>
                                <th>Phone Number</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($topindex as $key => $item)
                            <tr>
                                <td> {{ ++$key }} </td>
                                {{-- <td>{{ $item->id }}</td> --}}
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <a href="{{ route('topheader.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('topheader.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    {{-- <a href="{{ route('topheader.destroy', $item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
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