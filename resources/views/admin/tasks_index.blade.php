@extends('admin.layouts.master')

@section('content')

@component('admin.components.navbar')
@slot('title',"Tasks")
@slot('right_comp')
<a href="{{ route('admin.tasks.create') }}" class="btn btn-primary btn-sm">Add Task</a>
@endslot
@endcomponent

@endsection
