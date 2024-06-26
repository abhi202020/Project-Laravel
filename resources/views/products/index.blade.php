
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="width: 300px; height: 650px; background-image: url('https://i.pinimg.com/originals/55/a5/e4/55a5e47c099e0ddaf60fcfdcf3761eb6.jpg'); background-size: cover; background-position: center; color: black;">
    <h1>Index</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{ session('success') }}

        </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('product.create')}}"> Add a Product</a>  
            <br>
            <a href="{{route('dashboard')}}">Return to Dashboard</a>
       </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            @foreach($products as $product)

            <tr>
                <td>{{$product->id}}</td>
                 <td>{{$product->name}}</td>
                  <td>{{$product->qty}}</td>
                   <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td> <a href="{{route('product.edit',['product'=>$product])}}">Edit</a></td>
                    <td> 
                        <form method="post" action="{{route('product.delete',['product'=>$product])}}">
                            @csrf
                            @method('Delete')
                        <input type="submit" value="Delete">
                        </form>
                    </td>
            </tr>    
            @endforeach
        </table>
    </div>
</body>
</html>