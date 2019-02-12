@extends('layouts.layout')
@section('title', 'Project HQ')

@section('content')
<div>
    <h2>Welcome to my projects</h2>
    <ul>
    @foreach ($projects as $item)
    <li>{{ $item->title }}</li>
    @endforeach
    </ul>
</div>
@endsection



