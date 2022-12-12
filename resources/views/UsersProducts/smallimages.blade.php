@foreach($images as $img)
    @if($product['id'] == $img['product_id'])
<div class="col-3" style="margin: 3%">
    <a href="{{ asset('/storage/images/' . $img['user_id'] . '_'. $img['product_id'] . '_' . $img['hash_id'])}}">
        <img src="{{ asset('/storage/images/' . "SMALL_" . $img['user_id'] . '_'. $img['product_id'] . '_' . $img['hash_id'])}}" alt="Lights">
    </a>
</div>
    @endif
@endforeach
