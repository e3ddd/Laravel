<div class="row p-1">
 <div class="col-sm"></div>
    <div class="col-sm">Hours</div>
    @for($i=1;$i<25;$i++)
        @include('UsersProductStatisticList.hours', ['hour' => $i])
    @endfor
</div>
<div class="row m-3">Date</div>
@foreach($views as $date => $view)
    @include('UsersProductStatisticList.row', [
    'view' => $view,
    'date' => $date,
])
@endforeach



