<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    @foreach ($productsData as $product)
        <div>
            <h2>{{$product['product_name']}}</h2>
            <h2>{{$product['product_description']}}</h2>
            <h2>{{$product['product_category']}}</h2>
            <h2>{{$product['product_price']}}</h2>
            <h2>{{$product['product_stock']}}</h2>
        </div>
    @endforeach

</body>

</html>