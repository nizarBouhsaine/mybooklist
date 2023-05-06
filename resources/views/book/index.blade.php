<x-layout>
@include('partiels._hero')
    <div class="books_listing">
        @foreach($Books as $Book)
            <div class="book-listing">
            <a href="/Books/{{$Book->id}}"><img src="{{$Book-> cover ? asset('storage/'.$Book->cover) : asset('images/cover.jpg')}}" alt="" class=""></a>
                <a href="/Books/{{$Book->id}}"><h3>{{$Book->title}}</h3></a>
                <p>by {{$Book->author}}</p>
                <div class="tags">
                @foreach(explode(",",$Book->genre) as $genre)
                    <a href="?genre={{$genre}}" class="tag">{{$genre}}</a>
                @endforeach
                </div>
            </div>
        @endforeach
    </div>
   
</x-layout>