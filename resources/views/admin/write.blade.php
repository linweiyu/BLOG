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



    {!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}

    @include('admin.form')

    {!! Form::close() !!}
    </div>


    @endsection