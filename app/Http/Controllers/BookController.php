<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    
    public function index()
    {
        return view('book.index',[
            "Books"=>Book::latest()->filter(request(['genre','search']))->get(),
        ]);
    }

  
    public function create()
    {
        return view('book.create');
    }


    public function store(Request $request)
    {  
        $formInfo = $request->validate([
            'title'=>'required',
            'author'=>['required','min:3'],
            'language'=>['required','min:3'],
            'synopsis'=>'required',
            'genre'=>'required',           
        ]);

        if($request->hasFile('cover')){
            $formInfo['cover']=$request->file('cover')->store('covers','public');
        }

        Book::create($formInfo);

        return redirect('/');
    }


    public function show(Book $book)
    {   
        $user=Auth::user();

        if($user != null)
        {   $read = FALSE;
            $status = 'Want To Read';
            $Books=$user->books;
            foreach($Books as $Book)
            {
                if($Book->id == $book->id)
                {
                    $read = True;
                    $status = $Book->pivot->status;
                    break;
                }
            }
            return view('book.show',[
                'book'=>$book,
                'read'=>$read,
                'status'=>$status
            ]);
        }
        return view('book.show',[
            'book'=>$book,
        ]);
    }

    public function edit(Book $book)
    {
        //
    }

    public function update(Request $request, Book $book)
    {
        
    }

    public function destroy(Book $book)
    {
        //
    }
}
