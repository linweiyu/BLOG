@extends('layouts.front')

@section('main')
    <div class="row">

        <div class="col-md-8">
            @yield('content')
        </div>

        <div class="col-md-4">
            <!-- start sidebar -->
            <div class="sidebar">
                <aside class="widget about-me-widget"><!-- start single widget -->

                    <div class="about-me-img">
                        <img src="{{url("assets/images/LIN.jpg")}}" alt="" class="img-me">
                    </div>
                    <div class="about-me-content">
                        <h3>Lin WeiYu <span>Software Engineer</span></h3>

                        <p>Hello, Every one! I am a software engineer. I love technology. I think technology will change our life.
                            And I hope I can use technology to improve us, change us. Hope you here can find what you want. Thank you to come!</p>
                    </div>

                </aside><!-- end single widget -->


                <aside class="widget p-post-widget">
                    <h3 class="widget-title text-uppercase">Latest Posts</h3>
                    @foreach($latestArticle as $article)
                        <div class="popular-post">
                            <a href="{{url('/articles',$article->id)}}" class="popular-img"><img src="{{url("assets/images/blog-".($loop->index+3).".jpg")}}" alt="">
                                <div class="p-overlay"></div>
                            </a>
                            <div class="p-content">
                                <a href="{{url('/articles',$article->id)}}">{{$article->title}}</a>
                                <span class="p-date">{{$article->published_at}}</span>
                            </div>
                        </div>
                    @endforeach
                </aside>
                <aside class="widget"><!-- start single widget -->
                    <h3 class="widget-title text-uppercase">Popular Posts</h3>
                    <div class="thumb-latest-posts">
                        <div class="media">
                            <div class="media-left">
                                <a href="#" class="popular-img"><img src="{{url("assets/images/pl-post-1.jpg")}}" alt="">
                                    <div class="p-overlay"></div>
                                </a>
                            </div>
                            <div class="p-content">
                                <h3><a href="#">An Edge of Ocean</a></h3>
                                <span class="p-date">February 15, 2017</span>
                            </div>
                        </div>
                    </div>


                </aside><!-- end single widget -->
                <aside class="widget category-post-no"><!-- start single widget -->
                    <h3 class="widget-title text-uppercase">Categories</h3>
                    <ul>
                        @foreach($tags as $tag)
                            <li>
                                {{link_to_action('TagController@show',$tag->name,$tag->name,['class'=>'']) }}
                                <span class="post-count pull-right">{{count($tag->articles()->get())}}</span>
                            </li>
                        @endforeach
                    </ul>
                </aside><!-- end single widget -->
                {{--<aside class="widget widget-texty"><!-- start single widget -->--}}
                    {{--<h3 class="widget-title text-uppercase">Linweiyu Some Images</h3>--}}
                    {{--<ul>--}}
                        {{--@foreach($latestImages as $image)--}}
                            {{--<li>--}}
                                {{--<a href="#"><img src="{{'http:\\\\oc7ax75aj.bkt.clouddn.com\\'.$image->name}}" alt=""></a>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</aside><!-- end single widget -->--}}
                <aside class="widget widget-search">
                    <h3 class="widget-title text-uppercase">Search Articles</h3>
                    <form method="get" id="searchform" action="{{url("/search")}}">
                        <input type="text" placeholder="Search here..." name="str" id="s">
                        <button type="submit" class="submit-btn">Search</button>
                    </form>
                </aside>
            </div>
            <!-- end sidebar -->
        </div>

    </div>


@endsection