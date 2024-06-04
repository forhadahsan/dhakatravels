@extends('backend.layout')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> List   
                        <a href="{{ route('abouts.create') }}" class="btn btn-primary float-end" style="margin-left: 60%">Add </a>
                    </h3>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Top Content </th>
                                <th> services </th>
                                <th> Mid Header </th>
                                <th> Mid Content </th>
                                <th> Image1 </th>
                                <th> Image1 </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($aboutpage as $key => $item)
                            <tr>
                                <td> {{ ++$key }} </td>
                                {{-- <td>{{ $item->id }}</td> --}}
                                <td>{{ $item->top_content }}</td>
                                <td>{{ $item->services }}</td>
                                <td>{{ $item->mid_header }}</td>
                                <td>{{ $item->mid_content }}</td>
                                <td>{{ $item->image1 }}</td>
                                <td>{{ $item->image2 }}</td>
                                <td>
                                    <a href="{{ route('abouts.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('abouts.destroy', $item->id) }}" class="btn btn-danger btn-sm">Delete</a>
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