@section('danger')
  @if ($type == 'danger')
    <div class="alert alert-danger" role="alert">{{$error}}</div>
  @endif
@stop
