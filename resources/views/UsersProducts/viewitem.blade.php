@foreach($products as $product)
    <div class="col-3 m-3">@include('UsersProducts.imageslayout')</div>
<div class="col-3 pt-2" style="margin-left: 10%">
    <p><b>User: {{$product['email']}}</b></p>
    <p><b>{{$product['name']}}</b></p>
    <p><b>Price: {{$product['price']}}$</b></p>
</div>
<div class="col-4 pt-2">
    <p>{{$product['description']}}</p>
</div>
<form class="d-flex justify-content-center" action="/user_products/{{$product['id'] . "_" . $product['name']}}/view_statistic">
    @csrf
    <input class="btn btn-primary" type="submit" name="view" value="Statistic">
    <input type="hidden" name="prodId" value="{{$product['id']}}">
</form>
    @break
    @endforeach()
