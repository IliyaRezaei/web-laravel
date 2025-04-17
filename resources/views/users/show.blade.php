@extends('layouts.master')

@section('title','show user')


@section('content')
<body>
    <h2>User with id {{$user-> id}}</h2>
    <div class="user-container">
        <div class="user-name">User Name: {{$user->name}}</div>
        <a href="{{route("users.index")}}" class="red-button">Back</a>
        <div class="user-email">User Email: {{$user->email}}</div>
    </div>
</body>
@endsection

@push('styles')
    <style>
        h2 {
            text-align: center;
            margin: 1rem 0;
            font-size: 1.5rem;
        }
        .user-container{
            width: 50%;
            margin: 0 25%;
            display: flex;
            flex-direction: row;
            text-align: center;
            justify-content: space-around;
            align-items: center;
            background-color: #333333;
            color: white;
            padding: 1rem;
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
    </style>
@endpush
