@php
    $title = env('APP_NAME');
@endphp

@extends('layouts.my')

@section('title', 'crud-sisaku')

@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <p>{{__('CRUD-SISAKU')}}</p>
    <ul>
        <li><a href="https://yahoo.co.jp"> yahoo </a></li>
        <li><a href="https://yahoo.co.jp"> yahoo </a></li>
    </ul>
    <h2>{{__('CRUD-SISAKU')}}</h2>
    <ul>
        <li><a href="https://yahoo.co.jp"> yahoo </a></li>
        <li><a href="https://yahoo.co.jp"> yahoo </a></li>
    </ul>
</div>
@endsection