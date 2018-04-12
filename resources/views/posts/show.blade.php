@php
    $title = $post->title;
@endphp
@extends('layouts.my')
@section('content')
<div class="container">
    <h1 id="post-title">{{ $title }}</h1>
    <div class="table-responsive">
        <a href="{{ url('posts/'.$post->id.'/edit') }}" class="btn btn-primary">
            {{__('Edit')}}
        </a>
        <!-- 削除 -->
        @component('components.btn-del')
            @slot('table','posts')
            @slot('id',$post->id)
        @endcomponent
    </div>


<!-- 記事内容 -->
<dl class="row">
    <dt class="col-md-2">{{__('Created')}}:</dt>
    <dd class="col-md-10">
        <time itemprop="dateCreated" datetime="{{ $post->created_at }}">
            {{ $post->updated_at }}
        </time>
    </dd>
</dl>
<hr>
 <div id="post-body">
    {{ $post->body }}
 </div>

</div>
@endsection