<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BookUserController extends Controller
{
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Book $book)
    {
        $user=Auth::user();
        $user->books()->attach($book->id,[
            'status'=>'Want To Read',
            'rating'=> 5
        ]);
        return Redirect::back();
    }

    public function manage()
    {
        $user=Auth::user();
        $Books = $user->books;
        return view('book.mybooks',[
            'Books'=>$Books,
        ]);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, Book $book)
    {
        $user=Auth::user();
        $user->books()->updateExistingPivot($book->id,[
            'status'=>$request->status,
        ]);

        return Redirect::back();
    }

    public function destroy(Book $book)
    {
        $user=Auth::user();
        dd($user->books);
    }

}
