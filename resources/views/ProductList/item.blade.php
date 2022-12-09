<div class="row">
    <div class="col-2 p-2">Name:  <b>{{$name}}</b></div>
    <div class="col-2 p-2">Price:  <b>{{$price}}</b></div>
    <div class="col-2 p-2">Description:  <b>{{$description}}</b></div>
    <div class="col-sm btn-group p-1">
        @include('ProductList/actionBtn', [
    'action' => '/products/' . $id,
    'method' => 'get',
    'method2' => 'get',
    'value' => '',
    'name' => 'Edit',
    'num' => $id,
])
        <div class="col-0 p-1"></div>
        @include('ProductList/actionBtn', [
    'action' => '/products/' . $id,
    'method' => 'post',
    'method2' => 'delete',
    'value' => '',
    'name' => 'Delete',
    'num' => $id,
])
    </div>
</div>

