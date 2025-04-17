
@extends('layouts.master')

@section("title","list/create users")



@section('content')
<h2>List of Users</h2>

<table class="user-container">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}" class="green-button">Show</a>
            </td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}" class="yellow-button">Edit</a>
            </td>
            <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="red-button">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<h2>Create New User</h2>

<form action="/users" method="POST" class="form">
    @csrf
    <div class="user-input-container">
        <label class="user-label">Email</label>
        <input class="user-input" type="email" name="email" required/>
    </div>
    <div class="user-input-container">
        <label class="user-label">Name</label>
        <input class="user-input" type="text" name="name" required/>
    </div>
    <div class="user-input-container">
        <label class="user-label">Password</label>
        <input class="user-input" type="password" name="password" required/>
    </div>
    <div class="user-input-container">
        <button type="submit" class="green-button">Save</button>
    </div>
</form>
@endsection

@push('styles')
    <style>
        h2 {
            text-align: center;
            margin: 1rem 0;
            font-size: 1.5rem;
        }
        .form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            justify-content: center;
            align-items: center;
        }
        .user-input-container{
            width: 50%;
            display: flex;
            flex-direction: row;
        }
        .user-label{
            width: 100%;
        }
        .user-input{
            width: 100%;
            height: 1.5rem;
            line-height: 1.5rem;
        }
        .green-button {
            border: none;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            color: white;
            background-color: green;
            text-align: center;
            cursor: pointer;
        }

        .user-container {
            border-collapse: collapse;
            width: 50%;
            border: 2px solid #333;
            margin: 0 25%;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #ffffff;
        }

        .red-button {
            border: none;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            color: white;
            background-color: red;
            text-align: center;
            cursor: pointer;
        }
        .yellow-button {
            border: none;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            color: white;
            background-color: darkgoldenrod;
            text-align: center;
            cursor: pointer;
        }
    </style>
@endpush
