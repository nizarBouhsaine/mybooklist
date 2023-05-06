<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>MyBookList | Create your own book List</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="/"><img src="{{asset('images/logo.png')}}" alt="Logo" class="logo-img"></a>
            <h1 class="logo-title">MyBookList</h1>
        </div>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul class="nav-list">
                @auth 
                    <li class="nav-list-item"><a href="/" class="nav-link"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="nav-list-item"><a href="/mybooks" class="nav-link"><i class="fa-solid fa-book"></i> My books</a></li>
                    <li class="nav-list-item"><a href="/create" class="nav-link"><i class="fa-solid fa-plus"></i> Add new book</a></li>
                    <li class="nav-list-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="logout-btn"><i class="fa-solid fa-right-to-bracket"></i> Log Out</button>
                        </form>
                    </li>
                @else
                    <li class="nav-list-item"><a href="/" class="nav-link"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class="nav-list-item"><a href="/login" class="nav-link"><i class="fa-solid fa-right-to-bracket"></i> Log In</a></li>
                    <li class="nav-list-item"><a href="/signup" class="nav-link"><i class="fa-solid fa-user-plus"></i> Sign Up</a></li>
                @endauth
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>
    
    <main>
        {{$slot}}
    </main>
    
    <footer>
    
    </footer>
</body>
</html>