@extends('layouts.app')

@section('content')
<h1>Manage Keywords</h1>
<form action="{{ route('keywords.store') }}" method="POST">
    @csrf
    <label for="word">Keyword:</label>
    <input type="text" name="word" required>
    <label for="category_id">Category:</label>
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit">Add Keyword</button>
</form>

<h2>Existing Keywords</h2>
<ul>
    @foreach($keywords as $keyword)
    <li>{{ $keyword->word }} - {{ $keyword->category->name }}</li>
    @endforeach
</ul>
@endsection
