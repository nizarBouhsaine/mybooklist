<x-layout>
    <div class="signup-container">   
        <h2>User Registration</h2>
            <form method="POST" action="/store" name="form">
                @csrf
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="item" value="{{old('name')}}">
                @error('name')
                    <p class="err-msg">{{$message}}</p>
                @enderror

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

                <label for="password_confirmation">Confirm password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="item"> 
                @error('password_confirmation')
                    <p class="err-msg">{{$message}}</p>
                @enderror
                <button type="submit" class="submit-btn">Sign up</button>
                <p class="err-msg">Already have an account?<a href="/login">Login</a></p>
            </form>
    </div>
</x-layout>