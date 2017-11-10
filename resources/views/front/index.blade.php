@extends('layouts.blog')

@section('content')
    <!-- start post -->
    @foreach($articles as $article)
        <article class="post list-post">
            <div class="media">
                <div class="media-left">
                    <div class="post-thumb">
                        <a href="{{url('/articles',$article->id)}}"><img src="{{url("assets/images/list-post-1.jpg")}}" alt=""></a>
                        <a href="{{url('/articles',$article->id)}}" class="post-thumb-overlay text-center">
                            <div class="text-uppercase text-center"><i class="fa fa-search"></i></div>
                        </a>
                    </div>
                </div>
                <div class="post-content">
                    <div class="post-header">
                        <h2><a href="{{url('/articles',$article->id)}}">{{$article->title}} </a> <span
                                    class="pull-right">{{$article->published_at}}</span></h2>
                    </div>
                    <div class="entry-content">
                        <p>{{$article->extract()}}
                        </p>
                        <div class="continue-reading text-uppercase">
                            <a href="{{url('/articles',$article->id)}}" class="more-link text-center">Continue reading</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    @endforeach
    <!-- end post -->

    <!--pagination-->
    <div class=" text-center">
        {!! $articles->render() !!}
    </div>


@endsection
