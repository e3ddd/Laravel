@foreach($images as $img)
<div class="row">
    <form action="/add_image/{{$img['user_id'] . '_'. $img['product_id'] . '_' . $img['hash_id']}}" method="POST">
        @csrf
        @method('DELETE')
    <p><img src="{{ asset('/storage/images/' . $img['user_id'] . '_'. $img['product_id'] . '_' . $img['hash_id'])}}" alt="img"></p>
    <div class="col">
        <input type="hidden" name="img_path" value="{{$img['user_id'] . '_'. $img['product_id'] . '_' . $img['hash_id']}}">
        <input type="hidden" name="img_hash" value="{{$img['hash_id']}}">
        <input class="btn btn-primary" type="submit" name="deleteImg" value="Delete">
    </div>
    </form>
</div>
@endforeach
