@extends('layouts.blog')

@section('content')
    <article class="post single-post about-me contact">
        <div class="post-thumb">
            <img src="assets/images/contact-img.jpg" alt="">

        </div>
        <div class="post-content">
            <div class="post-header">
                <h2>Get In Touch</h2>
            </div>
            <div class="entry-content">

                <div class="contact-form">
                    <h3>Send your Query</h3>
                    <p>What you write here will send to my mailbox. Welcome to contact me.
                        I will reply you as soon as possible.
                    </p>
                    {!! Form::open(['url'=>'contact','class'=>'form-horizontal','method'=>'post']) !!}
                    <div class="form-group">
                        <div class="col-md-12">
                        <textarea class="form-control" name="content" rows="5"
                                  placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <div class="form-group label-floating is-empty">
                        <div class="col-md-12">
                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name *']) !!}
                        </div>
                        <div class="col-md-12">
                            {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Email *']) !!}

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 text-center">
                            <button type="submit" class="btn send-btn">
                                Send Message
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <h3 class="ex-contact-info">Additional Contact Info: </h3>
                <p>My E-mail : </p>
                <ul class="list-post">
                    <li>linweiyu10@outlook.com</li>
                    <li>asyncfun@gmail.com</li>
                </ul>
                <p>My QQ: 511254671</p>
                <p> We Chat: </p>
                <img src="{{asset('/img/wechat.jpg')}}" class="img-responsive img-rounded" style="width: 60%;height: 60%">

            </div>
        </div>
    </article>
@endsection
{{--@section('footer')--}}
{{--<script>--}}
{{--AddTitleInPicture("How to Contact Me");--}}
{{--</script>--}}
{{--@endsection--}}