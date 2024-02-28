<x-layouts.app>
    @foreach ($posts as $post)
        <h1>{{$post->title}}</h1>
    @endforeach
    {{$posts->links()}}
</x-layouts.app>