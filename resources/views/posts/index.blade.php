@extends("layouts.app")

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body bg-light mb-4">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <img style="width:100%"  src="/storage/blog_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif
@endsection

{{-- <style>
.w-5{
    width: 20px;
    display:inherit
}

</style> --}}
