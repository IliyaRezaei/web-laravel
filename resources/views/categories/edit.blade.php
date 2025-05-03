<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
<body>
    <h1>Categories Edit Page</h1>
    <h2>Edit Category</h2>

<form action="/categories/{{ $category->slug }}" method="POST" class="form">
    @csrf
    @method('PUT')
    <div class="user-input-container">
        <label class="user-label">Name</label>
        <input class="user-input" type="text" name="name" value="{{ $category->name }}" required/>
    </div>
    <div class="user-input-container">
        <label class="user-label">Slug</label>
        <input class="user-input" type="text" name="slug" value="{{ $category->slug }}" required/>
    </div>
    <div class="user-input-container">
        <button type="submit" class="green-button">Save</button>
        <a href="{{ route('categories.index') }}" class="red-button">Back</a>
    </div>
</form>
</body>
</html>