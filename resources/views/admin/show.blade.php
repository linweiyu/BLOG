@extends('layouts.admin')

@section('content')
    <div class="et bmj">
        <div class="bls">
            <div class="blt">
                <h6 class="blv">Dashboards</h6>
                <h2 class="blu">{{$article->title}}</h2>
            </div>

            <div class="lf blw">
                <div class="asr bld">
                    <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
                    <span class="bv awh"></span>
                </div>
            </div>
        </div>

    <p>{{$article->author->name}}</p>
    <hr>
    {!! $article->body !!}
    </div>
    @endsection