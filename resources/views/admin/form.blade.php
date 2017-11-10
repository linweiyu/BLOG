@include('vendor.ueditor.assets')
<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'awesome']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('body', 'Content', ['class' => 'awesome']) !!}
{{--{!! Form::text('body', null, ['class' => 'form-control']) !!}--}}
<!-- 编辑器容器 -->
    <script id="container" name="body" type="text/plain" class="form-control">{!! $article->body !!}</script>
</div>
<div class="form-group">
    {{--{!! Form::date('published_at', \Carbon\Carbon::now()) !!}--}}
    {!! Form::label('published_at','Date:') !!}
    <div class="asr bld">
    {!! Form::input('date','published_at',$article->published_at->format('Y-m-d'),['class'=>'form-control datepicker']) !!}
    <span class="bv awh"></span>
    </div>
</div>
<div class="form-group">
    {!! Form::label('tag_list','Tags:') !!}
    {!! Form::select('tag_list[]',$tags,null,['id'=>'tag_list','class'=>'form-control','multiple']) !!}
</div>
{!! Form::submit('Upload',['class' => 'btn btn-primary']) !!}
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script>
    $('#tag_list').select2({
        placeholder: 'Choose a tag',
        tags: true
    });
    </script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
        ue.ready(function() {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>
    @endsection