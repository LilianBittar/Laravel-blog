<x-layout>
    <div>
        <a href="/post/create"><button>Create</button></a>
    </div>
    @foreach ($posts as $post)

        <article class="{{$loop->even ? 'foobar' : ''}}">
            <h1>
                <a href="/posts/{{$post->id}}">
                {{ $post->title }}
            </h1>
            <p>
                <a href="/categories/{{ $post->category->slug  }}">{{$post->category->name}}</a>
            </p>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
        @endforeach
</x-layout>