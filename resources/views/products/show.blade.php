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
    <h1>Products Show Page</h1>
    <h2>Product with id {{$product->id}}</h2>
    <div class="user-container">
        <div class="user-name">Product Name: {{$product->name}}</div>
        <a href="{{route("products.index")}}" class="red-button">Back</a>
        <div class="user-email">Product Slug: {{$product->slug}}</div>
        <div class="user-email">Product Number: {{$product->number}}</div>
        <div class="user-email">Product Price: {{$product->price}}</div>
        <div class="user-email">Product Category Id: {{$product->category_id}}</div>
    </div>
</body>
</html>