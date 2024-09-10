@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Dashboard")
@endcomponent

<div class="container" >

  <div class="card mt-2">
    <div class="card-header">
      Header
    </div>
    <div class="card-body">

</div>


@endsection
