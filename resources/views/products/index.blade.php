<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    color: #333;
}

div {
    margin-bottom: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th, td {
    border: 1px solid #333;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

a {
    text-decoration: none;
    color: #007bff;
}

a:hover {
    text-decoration: underline;
}

form {
    display: inline;
    margin: 0;
}

input[type="submit"] {
    background-color: #dc3545;
    color: #fff;
    padding: 6px 10px;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #c82333;
}

    </style>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
    <div>
            <a href="{{route('product.create')}}">Create a Product</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->product}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>