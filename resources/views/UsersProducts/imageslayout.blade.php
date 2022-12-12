@foreach($images as $img)
    @if($product['id'] == $img['product_id'])
    <div class="col">
    <a href="{{ asset('/storage/images/' . $img['user_id'] . '_'. $img['product_id'] . '_' . $img['hash_id'])}}">
        <img class="img" style="padding-left: 15px" src="{{asset('/storage/images/' . $img['user_id'] . '_'. $img['product_id'] . '_' . $img['hash_id'])}}" alt="None Images">
    </a>
    @break
        @endif
    @endforeach
    <div class="row">
        @include('UsersProducts.smallimages')
    </div>
</div>

