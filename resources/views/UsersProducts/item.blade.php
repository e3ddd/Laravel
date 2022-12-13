@foreach($products as $product)
    <div class="col-md-3 m-5 shadow-sm item">
        <p></p>
        <div>@include('UsersProducts.imageslayout', ['products' => $products])</div>
        <div class="p-2">
            <p><b>User: {{$product['email']}}</b></p>
            <p><b>{{$product['name']}}</b></p>
            <p><b>Price: {{$product['price']}}$</b></p>
{{--            <button class="btnDesc btn-primary" data-id="">{{$product['description']}}</button><br>--}}
            <span id="">{{$product['description']}}</span>
            <form action="users_products/{{$product['id'] . "_" . $product['name']}}" method="GET">
                @csrf
                <input class="btn btn-primary" type="submit" name="view" value="View">
                <div class="col pt-3">Views:
                    @foreach($views as $view)
                        @if($product['id'] == $view['product_id'] && $view['minute'] == date('i'))
                            {{$view['views']}}
                        @endif
                    @endforeach
                    <img src="https://cdn-icons-png.flaticon.com/512/159/159604.png" height="20px"></div>
                <input type="hidden" name="prodId" value="{{$product['id']}}">
            </form>
        </div>
    </div>
@endforeach
