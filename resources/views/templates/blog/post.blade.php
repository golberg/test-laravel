<article>
    <h2>{{ $post->title }}</h2>
    <p>
        Опубликовано {{ $post->author->name }}  {{ $post->published_date }}
    </p>

    {!! $post->body_html !!}
</article>
