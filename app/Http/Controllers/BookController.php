<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }
    public function search()   {
       $search = request("search");
       
       $books = Book::where(function ($query) use ($search) {
        $query->where("name","like","%$search%")
       ->orWhere("author_name","like","%$search%");
       $query->orWhere("category","like","%$search%");
       });
      $books = $books->paginate(10);
        return view('admin.show_book',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.addBook', compact('categories', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function book_store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'author_name' => 'required',
            'category' => 'required',
            'quantity' => 'required','digit:4',
            'total_page' => 'required','digit:4',
            'price' => 'required','digit:4',
            'publish_date' => 'required','date',
            

        ]);

        $book = new Book();

        $book->name = $request->name;
        $book->author_name = $request->author_name;
        $book->category = $request->category;
        $book->quantity = $request->quantity;
        $book->total_page = $request->total_page;
        $book->price = $request->price;
        $book->publish_date = $request->publish_date;
        $book->save();
        
 
        return redirect('show_book')->with('success', 'successfully add book');
    }

    /**
     * Display the specified resource.
     */
    public function show_book()
    {
        $books = Book::all();
        return view('admin.show_book', compact('books'));
    }
     
    public function show_book_student()
    {
        $books = Book::all();
        return view('student.show_book', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_book($id)
    {
       
        
        $books = Book::where('id', $id=request()->id)->get();
       
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.edit_Book', compact('books', 'categories', 'authors'));
    }

    public function edit_author($id)
    {
       
        
        $authors = Author::where('id', $id=request()->id)->get();
       
      
        return view('admin.edit_author', compact( 'authors'));
    }
    public function update_author(Request $request)
    {
        $request->validate([
            'author_name' => 'required',
            
            

        ]);

        $author = Author::findOrFail($request->id);

       $author->author_name = $request->author_name;
       
        
       $author->save();
       
 
        return redirect('book_author')->with('success', 'successfully update author');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_book(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author_name' => 'required',
            'category' => 'required',
            'quantity' => 'required','digit:4',
            'total_page' => 'required','digit:4',
            'price' => 'required','digit:4',
            'publish_date' => 'required','date',
            

        ]);

        $book = Book::findOrFail($request->id);

        $book->name = $request->name;
        $book->author_name = $request->author_name;
        $book->category = $request->category;
        $book->quantity = $request->quantity;
        $book->total_page = $request->total_page;
        $book->price = $request->price;
        $book->publish_date = $request->publish_date;
        
        $book->save();
       
 
        return redirect('show_book')->with('success', 'successfully update book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_book($id)  {
        $book = Book::findOrFail($id);
        
        $book->delete();
            return redirect() -> back()->with('message', 'successfully delete book');

    }
    public function category(){
        $categories = Category::orderBy('id', 'DESC')->paginate(10);
        return view('admin.book_category', compact('categories'));
        
    }
    public function category_add(Request $request){
        
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

       $category = new Category();

       $category->category = $request->category;
        

        
       $category->save();

        return redirect() -> back()->with('success', 'successfully add category');
    }
    public function edit_category($id)
    {
       
        
        $categories = Category::where('id', $id=request()->id)->get();
       
      
        return view('admin.edit_category', compact( 'categories'));
    }
    public function update_category(Request $request)
    {
        $request->validate([
            'category' => 'required',
            
            

        ]);

        $category = Category::findOrFail($request->id);

       $category->category = $request->category;
       
        
       $category->save();
       
 
        return redirect('/category')->with('success', 'successfully update category');
    }

    public function delete_category($id)  {
        $category = Category::findOrFail($id);
        
        $category->delete();
            return redirect() -> back()->with('message', 'successfully delete category');

    }

    public function book_author(){
        $authors = Author::orderBy('id', 'DESC')->paginate(10);
        return view('admin.book_author', compact('authors'));
        
    }
    public function author_add(Request $request){
        
        $request->validate([
            'author_name' => 'required|string|max:255',
        ]);

        $author = new Author();

        $author->author_name = $request->author_name;
        

        
        $author->save();

        return redirect() -> back()->with('success', 'successfully add author');
    }
    public function delete_author($id)  {
        $author = Author::findOrFail($id);
        
        $author->delete();
            return redirect() -> back()->with('message', 'successfully delete author');

    }

}
