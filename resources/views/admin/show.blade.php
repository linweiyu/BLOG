@extends('layouts.admin')

@section('content')
    <div class="et bmj">
        <div class="bls">
            <div class="blt">
                <h6 class="blv">Dashboards</h6>
                <h2 class="blu">{{$article->title}}</h2>
            </div>
        </div>

    <p>{{$article->author->name}}</p>
    <hr>
    {!! $article->body !!}
    </div>
    @endsection