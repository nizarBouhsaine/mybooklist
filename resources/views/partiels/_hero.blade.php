<div class="Hero-img-container">
    <div class="Hero-inner-container">
        @auth
        <h1>Welcome {{auth()->user()->name}}</h1>
        @else
        <h1>Create Your own Book List</h1>
        @endauth
        @include('partiels._search')
    </div>
</div> 
