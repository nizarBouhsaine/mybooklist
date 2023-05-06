<x-layout>
    <div class="login-container">
        <form action="/authenticate" method="POST">
            @csrf 
            <h1>Login to MyBookList</h1>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="item" value="{{old('email')}}">
            @error('email')
                <p class="err-msg">{{$message}}</p>
            @enderror
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="item">
            @error('password')
                <p class="err-msg">{{$message}}</p>
            @enderror

            <button type="submit" class="submit-btn">Login</button>

            <p>Don't have an account?<a href="/signup">Signup</a></p>
        </form>
    </div>
</x-layout>