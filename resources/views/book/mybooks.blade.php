<x-layout>
   
    <div class="mybooks-container">
        <div class="mybooks-info">
            <h5>cover</h5>
            <h5>title</h5>
            <h5>author</h5>
            <h5>status</h5>
            <h5>Delete</h5>
        </div>
        @foreach($Books as $Book)
        <hr>
        <div class="mybooks-info">
            <a href="/Books/{{$Book->id}}"><img src="{{$Book->cover ? asset('storage/' . $Book->cover) : asset('images/cover.jpg')}}" alt="" style="width:70px;"></a>
            <a href="/Books/{{$Book->id}}"><h3>{{$Book->title}}</h3></a>
            <h3>{{$Book->author}}</h3>
            <x-status :book="$Book" :status="$Book->pivot->status" />
            <form action="/destroy/{{$Book->id}}" method="POST">
                @method('DELETE')
                @csrf 
                <button>Delete</button>
            </form>
        </div>
        @endforeach
    </div>
</x-layout>