@extends('layout')
@section('title','User List')
@section('content')

<table class="table table-bordered" style="width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @if($users->count() > 0)
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                    <a href="{{ route('edit', $user->id) }}"><button class="btn btn-primary" type="submit">Edit</button></a>
                      
                </td>
                <td><form action="{{ route('delete', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-primary" type="submit">Delete</button>
                        </form>  </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection