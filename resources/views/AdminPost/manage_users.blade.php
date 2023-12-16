@extends('layouts.admin_nav')

@section('content')

<h1 class="text-center mt-5">User Management</h1>
    <hr>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
               <th>Function</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role == '1' ? 'Admin' : 'User' }}</td> <!-- Check the role and display the corresponding string -->
        <td>
            <form action="{{ route('admin.posts.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
        </tbody>
    </table>
@endsection