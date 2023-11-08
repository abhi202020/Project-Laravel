<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Products</title>
</head>
<body>
    <h1>Create Products</h1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('POST')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name"/>
        </div> 
         <div>
            <label for="qty">Quantity</label>
            <input type="text" name="qty" id="qty" placeholder="Qty"/>
        </div> 
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="price"/>
        </div> 
       
        <div>
            <label for="description">Remarks</label>
            <input type="text" name="description" id="description" placeholder="description"/>
        </div>
        <div>
            <input type="submit" value="Save a new product"/>
        </div>
    </form>
</body>
</html>
