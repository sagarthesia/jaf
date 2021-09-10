@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    @if(count($jaf) > 0)
                        <table class="table table-dark table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jaf as $data)
                                    <tr>
                                        <td>{{ $data->first_name }}</td>
                                        <td>{{ $data->last_name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>
                                            <a href="{{route('view', ['id' => $data->id])}}" class="btn btn-success">View</a>
                                            <a href="{{route('edit', ['id' => $data->id])}}" class="btn btn-info">Edit</a>
                                            <a href="{{route('delete', ['id' => $data->id])}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                    <div class="form-group col-md-12 text-center">
                        <label>No application found</label>
                    </div>
                    @endif

                    {{ $jaf->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
