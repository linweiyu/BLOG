@extends('layouts.admin')

@section('content')
    <p> this is write part</p>

    {{--{!! Form::open(['url' => 'articles/create']) !!}--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('title', 'Article Title', ['class' => 'awesome']) !!}--}}
        {{--{!! Form::text('title') !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('body', 'Article Title', ['class' => 'awesome']) !!}--}}
        {{--{!! Form::text('body') !!}--}}
    {{--</div>--}}
    {{--{!! Form::date('published_at', \Carbon\Carbon::now()) !!}--}}
    {{--{!! Form::submit('Upload'); !!}--}}
    {{--{!! Form::close() !!}--}}
    @endsection