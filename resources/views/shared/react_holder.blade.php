@extends($layout)

@section('title',$title)

@section('content')

<div id="{{$component}}" 

@isset($data)

  @foreach ($data as $key=>$data_item)

    {!! "data-" . $key . "='" . $data_item . "'"; !!}
      
  @endforeach

@endisset

></div>
<script src="{{mix('js/'.$component.'.js')}}" ></script>

@endsection
