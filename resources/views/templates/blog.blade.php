@foreach($posts as $post)
    <article>
        <h2><a href="{{ route('blog.post', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h2>
        <p>
            Опубликовано {{ $post->author->name }}  {{ $post->published_date }}
        </p>

        {!! $post->excerpt_html or $post->body_html !!}
    </article>
@endforeach

{!! $posts->render() !!}
