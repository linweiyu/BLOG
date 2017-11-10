@extends('layouts.admin')

@section('content')
    <div class="et bmj">
        <div class="bls">
            <div class="blt">
                <h6 class="blv">Dashboards</h6>
                <h2 class="blu">Manage Something</h2>
            </div>
        </div>

        <hr class="aah">
        <div class="list-group">
        @foreach ($articles as $article)

                <a href="{{route('home.show',$article->id)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$article->title}}</h5>
                        <small>{{$article->published_at}}</small>
                    </div>
                    {{--<p class="mb-1">{!! $article->body !!}</p>--}}
                    <a type="button" class="btn btn-xs btn-pill btn-success" href="{{route('articles.edit',$article->id)}}">Update</a>

                    {!! Form::open(array('url' => '/articles/'.$article->id,'method'=>'delete')) !!}
                    {!! Form::submit('Delete',array('class' => 'btn btn-xs btn-pill btn-danger')) !!}
                    {!! Form::close()!!}
                </a>

         @endforeach
        </div>
    </div>
    @endsection