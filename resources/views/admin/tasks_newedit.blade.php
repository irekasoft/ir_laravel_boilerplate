@extends('admin.layouts.master')

<?php
$title = 'Edit Task';
$button_title = "Update Task";

if ($new_form == true){
  $title = 'New Task';
  $button_title = "Create New Task";
}
?>

@section('content')

@component('admin.components.navbar')
@slot('title',$title)
@slot('back_url',route('admin.tasks.index'))
@endcomponent

{{-- Will do the form --}}


@endsection
