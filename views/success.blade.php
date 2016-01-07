@section('success')
  @if ($type == 'success')
    <div class="alert alert-success" role="alert">{{$error}}</div>
  @endif
@stop
