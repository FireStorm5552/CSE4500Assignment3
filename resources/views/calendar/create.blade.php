@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop
@section('content')
<form method="POST" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="start_at" type="dateTime-local" label="Start Time" />
    <x-adminlte-input name="end_at" type="dateTime-local" label="End Time" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop