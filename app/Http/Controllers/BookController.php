<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  function getBooks(){
      return view('template.table',[
          'books'=>Book::all(),
      ]);
  }

  function findByName(Request $request){
      return view('template.table',[
         'books'=> Book::where('title','LIKE','%'.$request->get('name').'%')->get()
      ]);
  }
}
