@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
  <h2>{{ $calendar->title; }}</h2>
  <div><p>{{ $calendar->start_at; }}</p></div>
  <div><p>{{ $calendar->end_at; }}</p></div>
@stop