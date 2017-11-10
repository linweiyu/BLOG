@extends('layouts.admin')

@section('content')

    <div class="et bmj">
        <div class="bls">
            <div class="blt">
                <h6 class="blv">Dashboards</h6>
                <h2 class="blu">Write Something</h2>
            </div>
        </div>

        <hr class="aah">
        {!! Form::model($article, ['method'=>'PATCH','action'=>['ArticleController@update',$article->id]]) !!}
            @include('admin.form')
        {!! Form::close() !!}
    </div>
    @endsection