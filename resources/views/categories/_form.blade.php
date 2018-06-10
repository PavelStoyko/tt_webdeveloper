<div class="form-group">
    {{ Form::label('alias', 'Alias')}}
    {{ Form::text('alias', $category->alias, ['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('title', 'Title')}}
    {{ Form::text('title', $category->title, ['class'=>'form-control', 'id'=>'title'])}}
</div>
<div class="text-right">
    {{ Form::submit('Save', ['class'=>'btn btn-success'])}}</div>
<script>
    $(document).ready(function(){
        $('#description').summernote();
    });
</script>