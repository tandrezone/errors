@section('warning')
  @if ($type == 'warning')
    <div class="alert alert-info" role="alert">{{$error}}</div>
  @endif
@stop
