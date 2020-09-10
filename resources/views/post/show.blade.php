@extends('main.app')

@section('content')
    <li>{{ $post->title }}</li>
    <img src="{{ $post->path }}" alt="" style="width: 100px;height: 100px;" />
@endsection