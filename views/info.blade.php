@section('info')
  @if ($type == 'info')
    <div class="alert alert-info" role="alert">{{$error}}</div>
  @endif
@stop
