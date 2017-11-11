@extends('layouts.blog')

@section('content')
    {{--<div class="container">--}}
    {{--<div class="media-body ">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8">--}}
    {{--{!! $article->body !!}--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<blockquote>--}}
    {{--<div class="title">--}}
    {{--<h3>New Articles</h3>--}}
    {{--</div>--}}
    {{--@foreach($commendArticles as $carticle)--}}

    {{--<p><a href="{{url('/articles',$carticle->id)}}">{{$carticle->title}}</a></p>--}}
    {{--@endforeach--}}
    {{--<div class="clearfix"></div><br><br>--}}
    {{--</blockquote>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<hr>--}}
    {{--@unless($article->tags->isEmpty())--}}
    {{--<h5>Tags:</h5>--}}
    {{--<ul class="tag-ul">--}}
    {{--@foreach($article->tags as $tag)--}}
    {{--<li class="tag-li"><span class="label label-success">{{link_to_action('TagsController@show',$tag->name,$tag->name,['class'=>'tag-css']) }}</span></li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}

    {{--@endunless--}}
    {{--<hr>--}}
    {{--<p>--}}
    {{--@if($lastOne=$article->lastOne())--}}
    {{--<a href="{{url('/articles',$lastOne->id)}}">Last Article: {!! $lastOne->title !!}</a>--}}
    {{--@else--}}
    {{--<a href="#">Last Article: Not Any More</a>--}}
    {{--@endif--}}
    {{--@if($nextOne=$article->nextOne())--}}
    {{--<a href="{{url('/articles',$nextOne->id)}}" style="float: right;">Next Article: {!! $nextOne->title !!}</a>--}}
    {{--@else--}}
    {{--<a href="#" style="float: right;">Next Article: Not Any More</a>--}}
    {{--@endif--}}
    {{--</p>--}}
    {{--<div class="panel panel-primary" id="commentsPart">--}}
    {{--<div class="panel-heading">--}}
    {{--<h3 class="panel-title">Comments</h3>--}}
    {{--</div>--}}
    {{--@foreach($comments as $comment)--}}

    {{--<div class="panel-body">--}}
    {{--<p>{{$comment->content}}</p>--}}
    {{--<p>Post By : {{$comment->user->name}}</p>--}}
    {{--</div>--}}
    {{--<hr>--}}
    {{--@if($comment->getcomments())--}}
    {{--@foreach($comment->getcomments() as $reply)--}}
    {{--<hr>--}}
    {{--<div class="panel-body">--}}
    {{--<p>{{$reply->content}}</p>--}}
    {{--<p>Post By: {{$reply->user->name}}</p>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--@endif--}}
    {{--@endforeach--}}
    {{--</div>--}}

    {{--{!! Form::open(['url'=>'comments/store','id'=>'submitcomment']) !!}--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::label('content','Comment:') !!}--}}
    {{--{!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'Write your comment here.','rows'=>'7']) !!}--}}
    {{--</div>--}}
    {{--{!! Form::text('article_id',$article->id,['hidden']) !!}--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::submit('Submit',['class'=>'btn btn-primary','id'=>'commentSubmit','onclick'=>'SubmitComment()']) !!}--}}
    {{--</div>--}}

    {{--{!! Form::close() !!}--}}
    {{--</div>--}}


    {{--stop--}}

    <article class="post single-post">
        <div class="post-thumb">
            <img src="{{url("assets/images/blog-".rand(1,12).".jpg")}}" alt="">
        </div>
        <div class="post-content">
            <div class="post-header">
                <h2>{{$article->title}}<span
                            class="pull-right">{{$article->published_at}}</span></h2>
            </div>
            <div class="entry-content">
                {!! $article->body !!}
            </div>
            <div class="post-tag">

                @unless($article->tags->isEmpty())
                    @foreach($article->tags as $tag)
                        {{link_to_action('TagController@show',$tag->name,$tag->name,['class'=>'']) }}
                    @endforeach

                @endunless
            </div>
            <div class="single-post-meta">
                <ul class="meta-profile pull-left">
                    <li><a href="#"><i class="fa fa-user"></i>{{$article->author->name}}</a></li>
                    @foreach($article->tags as $tag)
                    <li><a href="#"><i class="fa fa-folder-open"></i>{{$tag->name}}</a></li>
                    @endforeach
                </ul>
                <ul class="meta-social pull-right">
                    <li class="s-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="s-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="s-google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="s-heart"><a href="#"><i class="fa fa-heart"></i></a></li>
                </ul>
            </div>
            <div class="single-post-me">
                <div class="media">
                    <div class="media-left text-center">
                        <a href="#"> <img class="media-object img-circle img-thumbnail"
                                          src="{{url("assets/images/LIN.jpg")}}" alt=""></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">{{$article->author->name}}</a>
                        </h4>
                        <p class="comment-p">
                            Something should be here;
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <div class="comment-area" id="comment">
        <div class="comment-heading">
            <h3>{{count($article->getReplies()->get())}} Thoughts</h3>
        </div>

        @foreach($article->getReplies()->get() as $reply)
            @if(!$reply->issecond())
                <div class="single-comment">
                    <div class="media">
                        <div class="media-left text-center">
                            <a><img class="media-object" src="{{$reply->get_gravatar($s=70)}}" alt=""></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <h3 class="text-uppercase">
                                    <a>{{$reply->name}}</a>
                                    <a v-on:click="addReply" value="{{$reply->id}}" class="pull-right reply-btn"
                                       style="cursor:pointer">reply</a>
                                </h3>
                            </div>
                            <span class="comment-date">
									{{$reply->published_at}}
								</span>
                            <p class="comment-p">
                                {{$reply->content}}
                            </p>
                        </div>
                    </div>
                </div>
                @foreach($reply->replies()->get() as $comment)
                    <div class="single-comment single-comment-reply">
                        <div class="media">
                            <div class="media-left text-center">
                                <a><img class="media-object"src="{{url($comment->get_gravatar($s=60))}}" alt=""></a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h3 class="text-uppercase"><a>{{$comment->name}}</a></h3>
                                </div>
                                <span class="comment-date">
                                {{$comment->published_at}}
                            </span>
                                <p class="comment-p">
                                    {{$comment->content}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        @endforeach


        <div id="newcomment">
            <div class="single-comment">
                <div class="media">
                    <div class="media-body">
                        <div class="media-heading">
                            <h3 class="text-uppercase"><a href="#" v-text="name"></a></h3>
                        </div>
                        <p class="comment-p" v-text="content"></p>
                    </div>
                </div>
            </div>
            <div class="leave-comment"><!--leave comment-->
                <h3 class="reply-heading">Leave a Thought</h3>
                <a id="cancel" v-on:click="cancelReply" class="btn btn-danger hidden" style="cursor:hand; float: right;
        margin-bottom: 15px; margin-top: -30px;" align="right">cancel reply</a>
                <form class="form-horizontal contact-form" id="AddCommentForm" role="form" method="post"
                      action="{{url('/replies')}}">
                    {{csrf_field()}}
                    <input name="article_id" value="{{$article->id}}" hidden="hidden">
                    <div class="form-group">
                        <div class="col-md-12">
									<textarea class="form-control" rows="4" name="content"
                                              placeholder="Join the discussion" v-model="content"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" name="name" v-model="name"
                                   placeholder="Name *">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="E-mail *">
                        </div>
                    </div>
                    <button type="submit" class="btn send-btn">Submit Comment</button>
                </form>
                <p class="email-alert">Your email address will not be published. Required fields are marked
                    *</p>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script>
        function insertAfter(newEl, targetEl) {
            var parentEl = targetEl.parentNode;

            if (parentEl.lastChild == targetEl) {
                parentEl.appendChild(newEl);
            } else {
                parentEl.insertBefore(newEl, targetEl.nextSibling);
            }
        }
        var app = new Vue({
            el: '#comment',
            data: {
                name: '',
                email: '',
                content: ''
            },
            methods: {
                addReply: function (event) {
                    var SiblingNode = event.target.parentNode.parentNode.parentNode.parentNode;
                    var newelement = document.getElementById('newcomment');
                    var form=document.getElementById('AddCommentForm');
                    var replyinput=document.createElement('input');
                    replyinput.setAttribute('name','comment_id');
                    replyinput.setAttribute('hidden','hidden');
                    replyinput.setAttribute('value',event.target.getAttribute('value'));
                    form.appendChild(replyinput);
                    var Cancel = document.getElementById('cancel');
                    Cancel.setAttribute('class', 'btn btn-danger');
                    insertAfter(newelement, SiblingNode);
                },
                cancelReply: function (event) {
                    var ParentNode = event.target.parentNode.parentNode.parentNode.parentNode;
                    var newelement = document.getElementById('newcomment');
                    var form=document.getElementById('AddCommentForm');
                    form.removeChild(form.lastChild);
                    var Cancel = document.getElementById('cancel');
                    Cancel.setAttribute('class', 'btn btn-danger hidden');
                    ParentNode.insertBefore(newelement, ParentNode.lastChild);
                }
            }

        })


    </script>

@endsection



