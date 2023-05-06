@php
    $stats_array = array("Want to read","Completed","Currently Reading")
@endphp
<x-layout>
    <div class="book-show">
        <div class="show-img-container">
            <img src="{{$book->cover ? asset('storage/' . $book->cover) : asset('images/cover.jpg')}}" alt="" style="width:200px;">
                @auth
                    @if(!$read)
                        <form action="/Books/{{$book->id}}" method="POST">
                            @csrf
                            <button>Want To Read</button>
                        </form>
                    @else
                    <h4>Status:</h4>
                    <x-status :book="$book" :status="$status" />
                    @endif
            @endauth
        </div>
        <div class="show-info">
            <h2>{{$book->title}}</h2>
            <hr>
            <h4>By {{$book->author}}</h4>
            <div class="tags">
                @foreach(explode(",",$book->genre) as $genre)
                    <a href="/?genre={{$genre}}" class="tag">{{$genre}}</a>
                @endforeach
            </div>
            <h3>Synopsis</h3>
            <hr>
            <p>{{$book->synopsis}}</p>
            <h3>Available in :</h3>
            <hr>
            <div class="show-book-lang">
                @foreach(explode(",",$book->language) as $language)
                    <p>{{$language}} |</p>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>

