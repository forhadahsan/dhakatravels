@extends('backend.layout')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card"  style="margin-top: 5%;">
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
                                <th> service Content </th>
                                <th> Mid Header </th>
                                <th> Mid Content </th>
                                <th> Image1 </th>
                                <th> Image2 </th>
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
                                <td>{{ $item->service_content }}</td>
                                <td>{{ $item->mid_header }}</td>
                                <td>{{ $item->mid_content }}</td>
                                <td>
                                    <img src="{{ asset('uploads/about/'.$item->image)}}" alt="" height="150px" width="150px">
                               </td>
                                <td>{{ $item->image2 }}</td>
                                <td>
                                    <a href="{{ route('abouts.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('abouts.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    {{-- <a href="{{ route('abouts.destroy', $item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
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