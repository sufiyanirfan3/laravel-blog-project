@extends("layouts.app")
@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ["App\Http\Controllers\PostsController@update",$post->id], 'method' => 'POST',"enctype"=>"multipart/form-data"]) !!}

    <div class="form-group pb-4">
        {{Form::label("title","Title")}}
        {{Form::text("title",$post->title,["class"=>"form-control","placeholder"=>"Title"])}}
    </div>

    <div class="form-group pb-4">
        {{Form::label("body","Body")}}
        {{Form::textarea("body",$post->body,["id"=>"ckeditor","class"=>"form-control","placeholder"=>"Body Text"])}}
    </div>

    <div class="form-group pb-4">
        {{Form::file("cover_image")}}
    </div>

    {{Form::Hidden("_method","PUT")}}
    {{Form::submit("Submit", ["class"=>"btn btn-primary"])}}
    {!! Form::close() !!}
@endsection

