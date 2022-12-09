<form action="{{ $action }}" method="{{ $method }}">
    @csrf
    <input type="hidden" name="_method" value="{{ $method2 }}">
    <input type="hidden" name="page" value="{{ $value }}">
    <button class="btn btn-primary" type="submit">{{ $name }}</button>
    <input type="hidden" name="num" value="{{ $num }}">
</form>
