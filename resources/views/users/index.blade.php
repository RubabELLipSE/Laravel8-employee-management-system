@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
    </div>

    <div class="row">
        <div class="card col-12">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title"> User </h3>
                <a href="{{route('user.create')}}" class="float-right">Create</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <body>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>Edit/Delete</td>
                                </tr>
                            @endforeach
                        </body>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection