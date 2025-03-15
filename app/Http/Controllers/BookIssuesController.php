<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\bookIssues;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class BookIssuesController extends Controller
{
   
    // Display list of books
    public function listBooks()
    {
        $issues = bookIssues::all();
       
        
        return view('book.books', compact('issues'));
    }

    public function showBooks(Book $book){
        $books = Book::all();
        return view('student.show_book', compact('books'));
    }
    public function studentBooks()
    {
        $issues = bookIssues::where('user_id', Auth::user()->id)->get();
        
        
        return view('student.books', compact('issues'));
    }
    //Show issue book form
    public function showIssueForm()
    {
        $books = Book::where('quantity', '>', 0)->get();
        $students = User::all();
         $students = User::where('role', 'student')->get();
        return view('book.issue', compact('books', 'students'));
    }

   

    // // Issue a book
    public function issueBook(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
        ]);

        $book = Book::findOrFail($request->book_id);
        $book_name = $book->name;
        $author = $book->author_name;
       
         $student= User::findOrFail($request->user_id);
         $student_name= $student->name;

        if ($book->quantity < 1) {
            return redirect()->back()->with('error', 'Book not available');
        }

        $issue = new bookIssues();

        

        $issue->user_id = $request->user_id;
        $issue->book_id = $request->book_id;
        $issue->student_name = $student_name;
        $issue->book_name = $book_name;
        $issue->author = $author;
        $issue->issued_at = now();
        $issue->due_date = now()->addDays(5);
        $issue->status = 'issued';
        $issue->save();

        $book->quantity -= 1;
        $book->save(); 

         return redirect()->route('book.books')->with('success', 'Book issued successfully');
    }

    // // Show return book form
    public function showReturnForm()
    {
        $issuedBooks = bookIssues::where('status', 'issued')->with('book', 'user')->get();
        return view('library.return', compact('issuedBooks'));
    }

    // // Return a book
    public function returnBook($id)
    {
        
        $issue = bookIssues::findOrFail($id);


        
        $issue->delete();

        $book = Book::findOrFail($issue->book_id);
        $book->quantity += 1;
        $book->save();

        return redirect()->back()->with('success', 'Book returned successfully');
    }

}
