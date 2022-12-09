<div class="row">
    <div class="col-3 p-2">E-mail: <b>{{$email}}</b></div>
    <div class="col-2 p-2">Password:  <b>{{$password}}</b></div>
    <div class="col-sm btn-group p-1">
        @include('AdminPanel/actionBtn', [
    'action' => '/users/' . $email,
    'method' => 'get',
    'method2' => '',
    'value' => '',
    'name' => 'Edit',
    'num' => $id,
])
        <div class="col-0 p-1"></div>
        @include('AdminPanel/actionBtn', [
    'action' => '/users/' . $email,
    'method' => 'post',
    'method2' => 'delete',
    'value' => '',
    'name' => 'Delete',
    'num' => $id,
])
        <div class="col-0 p-1"></div>
        @include('AdminPanel/actionBtn', [
    'action' => '/users/' . $email . '/products',
    'method' => 'get',
    'method2' => 'get',
    'value' => '',
    'name' => 'Products',
    'num' => $email,
])
    </div>
</div>

