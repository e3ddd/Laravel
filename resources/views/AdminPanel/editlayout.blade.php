<form action="/admin_panel/{{$email}}/edit" method="GET">
    @csrf
    <div>
        <input type="text" name="email" value="{{$email}}">
        <input type="hidden" name="num" value="{{$num}}">
    </div>
    @if($errors->has('email'))
        <div class="alert alert-danger">
            <ul style="list-style: none; text-align: center">
                @foreach ($errors->get('email') as $error)
                    <li style="margin-right: 30px">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input class="btn btn-primary" type="submit" name="action" value="Ok">
</form>
