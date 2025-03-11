@extends('layouts.admin')

@section('content')

<div class="container">
    <h2>Issue a Book</h2>
    <form action="{{route('book.issue')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="student_id">Select student:</label>
            <select name="student_id" class="form-control" required>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
           
            
            <label for="book_id">Select Book:</label>
            <select name="book_id" class="form-control" required>
                @foreach($books as $book)
                    <option value="{{ $book->id}}">Name: {{ $book->name }}; Author Name: {{ $book->author_name }} ({{ $book->quantity }} available)</option>
                    
                    @endforeach
            </select>
           
           
            </div>
           
           
     
       
        <button type="submit" class="btn btn-primary">Issue Book</button>
    </form>
    
</div>
@endsection
