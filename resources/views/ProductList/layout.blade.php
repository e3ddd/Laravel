<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .indexBtn
        {
            float: right;
        }

        .paginator
        {
            position: relative;
            left: 20%;
        }
    </style
</head>
<body>
<div class="container-fluid">
@foreach($products as $product)
        <h4>{{$product['email']}} PRODUCT LIST</h4>
        @break
    @endforeach
    <div class="row">
        @foreach($products as $product)
            @include('ProductList/item', [
    'id' => $product['id'],
    'email' => $product['email'],
    'name' => $product['name'],
    'price' => $product['price'],
    'description' => $product['description'],
])
        @endforeach
    </div>
    <div class="row">
        {{$products->links()}}
    </div>
</div>
</body>
</html>
