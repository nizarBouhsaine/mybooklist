<x-layout>
    <div class="book-form-container">
        <form method="POST" class="form" action="/Books" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="item" value="{{old('title')}}">
            @error('title')
                <p class="err-msg">{{$message}}</p>
            @enderror

            <label for="author">Author</label>
            <input type="text" id="author" name="author" class="author" value="{{old('author')}}">
            @error('author')
                <p class="err-msg">{{$message}}</p>
            @enderror
            
            <label for="language">Language</label>
            <input type="text" id="language" name="language" class="item" value="{{old('language')}}">
            @error('language')
                <p class="err-msg">{{$message}}</p>
            @enderror

            <label for="genre">Genre</label>
            <input type="text" id="genre" name="genre" class="item" value="{{old('genre')}}"> 
            @error('genre')
                <p class="err-msg">{{$message}}</p>
            @enderror

            <label for="cover">Cover</label>
            <input type="file" id="cover" name="cover" class="cover" value="{{old('cover')}}"> 
            @error('cover')
                <p class="err-msg">{{$message}}</p>
            @enderror
            
            <label for="synopsis">Synopsis</label>
            <textarea type="text" id="synopsis" name="synopsis" class="item" >{{old('synopsis')}}</textarea>
            @error('synopsis')
                <p class="err-msg">{{$message}}</p>
            @enderror
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</x-layout>