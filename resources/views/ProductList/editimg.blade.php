@foreach($images as $img)
<div class="row">
    <p><img src="{{ asset('/storage/images/' . $img['product_id'] . '_'. $img['user_id'] . '_' . $img['hash_id'])}}" alt="img"></p>
    <div class="col"><input class="btn btn-primary" type="submit" name="deleteImg" value="Delete"></div>
</div>
@endforeach
