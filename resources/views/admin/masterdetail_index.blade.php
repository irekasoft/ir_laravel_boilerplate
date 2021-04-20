@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Master Detail")
@endcomponent

<div class="container-fluid">
<?php

$list = [];

for ($i = 0; $i < 500; $i++){
    array_push($list, "Hi");
}

?>

{{-- Content --}}

<table class="table">
<tr>
<th width="25px">
#
</th>
<th>
Item
</th>
</tr>
@foreach ($list as $idx=>$item)

<tr>
<td>{{$idx+1}}</td>
<td>{{$item}}</td>
</tr>

@endforeach

</table>

</div>
@endsection
