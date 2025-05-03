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
</head>
<body>
    <h1>Categories Index Page</h1>
    <table class="user-container">
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>
                    <a href="{{ route('categories.show', $category->slug) }}" class="green-button">Show</a>
                </td>
                <td>
                    <a href="{{ route('categories.edit', $category->slug) }}" class="yellow-button">Edit</a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy', $category->slug) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="red-button">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h2>Create New Category</h2>

<form action="/categories" method="POST" class="form">
    @csrf
    <div class="user-input-container">
        <label class="user-label">Name</label>
        <input class="user-input" type="text" name="name" required/>
    </div>
    <div class="user-input-container">
        <label class="user-label">Slug</label>
        <input class="user-input" type="text" name="slug" required/>
    </div>
    <div class="user-input-container">
        <button type="submit" class="green-button">Save</button>
    </div>
</form>

</body>
</html>