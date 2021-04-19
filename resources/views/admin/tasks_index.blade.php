@extends('admin.layouts.master')

@section('title','Tasks')

@section('content')

@component('admin.components.navbar')
@slot('title',"Tasks")
@slot('right_comp')
<a href="{{ route('admin.tasks.create') }}" class="btn btn-primary btn-sm">Add Task</a>
@endslot
@endcomponent

<div class="container">

<table class="table">
    <tr>
    <th width="25px">
    #
    </th>
    <th>
    Item
    </th>
    </tr>
    @foreach ($tasks as $idx=>$task)

    <tr>
    <td>{{$idx+1}}</td>
    <td>
        {{$task->title}}<br/>
        {{$task->description}}
    </td>
    </tr>

    @endforeach

    </table>

</div>
@endsection
