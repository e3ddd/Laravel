@foreach($product as $item)
<form action="/products/{{$item['id']}}/edit" method="POST">
    @csrf
    @method('PUT')
    <div  class="col">
        <input type="text" name="name" value="{{$item['name']}}">
    </div>
    <div  class="col">
        <input type="text" name="price" value="{{$item['price']}}">
    </div>
    <div class="col">
        <textarea style="margin-top: 10px; width: 21%" rows="10" name="description">{{$item['description']}}</textarea>
    </div>
    <input type="hidden" name="id" value="{{$item['id']}}">
    <input class="btn btn-primary" type="submit" name="action" value="Ok">
</form>
@endforeach

