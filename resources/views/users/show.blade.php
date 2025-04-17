<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show User Page</title>
    <style>
        h2 {
            text-align: center;
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
</head>
<body>
    <h2>User with id {{$user-> id}}</h2>
    <div class="user-container">
        <div class="user-name">User Name: {{$user->name}}</div>
        <a href="{{route("users.index")}}" class="red-button">Back</a>
        <div class="user-email">User Email: {{$user->email}}</div>
    </div>
</body>
</html>
