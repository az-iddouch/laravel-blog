<div class="blog-post">

            <a href="/posts/{{ $post->id }}">
                <h2 class="blog-post-title">{{ $post->title }}</h2>
            </a>
            <p class="blog-post-meta">{{ $post->user->name }} on  {{ $post->created_at->toFormattedDateString() }}
            
            @if(count($post->tags))

                @foreach($post->tags as $tag)

                    <a href="/posts/tags/{{ $tag->name }}"> 
                        <span class="badge badge-info">{{ $tag->name }}</span> 
                    </a>
            
                @endforeach

            @endif

            </p>
            <p>{{ $post->body }}</p>
            
</div><!-- /.blog-post -->