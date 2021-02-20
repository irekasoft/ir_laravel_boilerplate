@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')  
@slot('title',"Dashboard")
@endcomponent

@endsection
