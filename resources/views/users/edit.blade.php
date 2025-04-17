<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User Page</title>
    <style>
        h2 {
            text-align: center;
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
</head>

<h2>Edit User</h2>

<form action="/users/{{ $user->id }}" method="POST" class="form">
    @csrf
    @method('PUT')
    <div class="user-input-container">
        <label class="user-label">Email</label>
        <input class="user-input" type="email" name="email" value="{{ $user->email }}" required/>
    </div>
    <div class="user-input-container">
        <label class="user-label">Name</label>
        <input class="user-input" type="text" name="name" value="{{ $user->name }}" required/>
    </div>
    <div class="user-input-container">
        <button type="submit" class="green-button">Save</button>
        <a href="{{ route('users.index') }}" class="red-button">Back</a>
    </div>
</form>
</html>
