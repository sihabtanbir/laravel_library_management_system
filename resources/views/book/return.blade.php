@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Return a Book</h2>
    <form action="{{ route('library.return') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="issue_id">Select Issued Book:</label>
            <select name="issue_id" class="form-control" required>
                @foreach($issuedBooks as $issue)
                    <option value="{{ $issue->id }}">
                        {{ $issue->book->title }} (Issued to: {{ $issue->user->name }})
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Return Book</button>
    </form>
</div>
@endsection
