@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"React")
@endcomponent

<div id='MyTasksPage'></div>
<script src='{{mix('js/MyTasksPage.js')}}'></script>

@endsection
