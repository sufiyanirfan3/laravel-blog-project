@extends("layouts.app")

@section('content')
    <a href="/posts" class="btn btn-primary">Back</a>
    <br><br>
    <h1>{{ $post->title }}</h1>
    <img style="width:100%"  src="/storage/blog_images/{{$post->cover_image}}">

    <div class="conatiner mt-5">
        {!! $post->body !!}
    </div>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <br><br>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-end']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif
@endsection
