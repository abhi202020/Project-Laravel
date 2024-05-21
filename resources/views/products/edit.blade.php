<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Products</title>
</head>
<body style="width: 300px; height: 650px; background-image: url('https://i.pinimg.com/originals/55/a5/e4/55a5e47c099e0ddaf60fcfdcf3761eb6.jpg'); background-size: cover; background-position: center; color: black;">
    <h1>Edit a Product</h1>
    <a href="{{route('dashboard')}}">Return to Dashboard</a>
    <form method="post" action="{{route('product.update',['product'=>$product])}}"> 
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{$product->name}}"/>
        </div> 
         <div>
            <label for="qty">Quantity</label>
            <input type="text" name="qty" id="qty" placeholder="Qty" value="{{$product->qty}}"/>
        </div> 
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="price" value="{{$product->price}}"/>
        </div> 
       
        <div>
            <label for="description">Remarks</label>
            <input type="text" name="description" id="description" placeholder="description" value="{{$product->description}}"/>
        </div>
        <div>
            <input type="submit" value="Update a product"/>
        </div>
    </form>
</body>
</html>
