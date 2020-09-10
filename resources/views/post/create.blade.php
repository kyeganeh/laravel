@extends('main.app')

@section('content')
    {!! Form::open(['method' => 'POST','action'=>'PostsController@store','files'=>true]) !!}
        {!! Form::text('title',null,['placeholder'=>'عنوان پست']) !!}
        <br><br>
        {!! Form::textarea('description',null,['placeholder'=>'متن پست']) !!}
        <br><br>
        {!! Form::file('file') !!}
        <br><br>
        {!! Form::submit('ارسال',['class'=>'btn btn-success']) !!}
    {!! Form::close() !!}
    <br><br>
    @if ($errors)
        @foreach ($errors->all() as $item)
            <div class="alert alert-danger">{{ $item }}</div>
        @endforeach
        
    @endif
@endsection