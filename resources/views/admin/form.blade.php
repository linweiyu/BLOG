@include('vendor.ueditor.assets')
<div class="form-group">
    {!! Form::label('title', 'Article Title', ['class' => 'awesome']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('body', 'Article Content', ['class' => 'awesome']) !!}
{{--{!! Form::text('body', null, ['class' => 'form-control']) !!}--}}
<!-- 编辑器容器 -->
    <script id="container" name="body" type="text/plain" class="form-control">{!! $article->body !!}</script>
</div>
<div class="form-group">
    {!! Form::date('published_at', \Carbon\Carbon::now()) !!}
</div>
{!! Form::submit('Upload',['class' => 'btn btn-primary']) !!}


<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container');
    ue.ready(function() {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
    });
</script>