<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Products</title>
</head>
<body>
    <h1>Edit a Product</h1>
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
