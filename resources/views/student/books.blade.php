@extends('layouts.student')

@section('content')
<div class="container">
    <h2>Issue Book List</h2>
   
    <table class="table mt-3 p-4 table-striped table-bordered ">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Title</th>
                <th>Author</th>
                <th>Due date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($issues as $issue)
                <tr>
                  
                    <td>{{ $issue->student_name }}</td>
                    

                    <td>{{ $issue->book_name }}</td>
                    <td>{{ $issue->author }}</td>
                    <td>{{ $issue->due_date}}</td>
                    <td><a href="{{route('return_book',parameters: ['id' => $issue->id])}}">Return</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
